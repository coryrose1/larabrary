<?php

namespace App\Http\Livewire;

use App\Author;
use App\Rules\ValidDomain;
use Livewire\Component;
use Livewire\WithFileUploads;

class AuthorForm extends Component
{
    use WithFileUploads;

    public $name = '';
    public $bio = '';
    public $avatar;
    public $website = '';
    public $twitter = '';
    public $github = '';

    public function render()
    {
        return view('livewire.author-form');
    }

    public function save()
    {
        $this->validate($this->validationRules());

        if ($this->avatar)
            $filename = $this->avatar->store('/', 'author-avatars');

        Author::create([
            'name' => $this->name,
            'avatar' => $filename ? $filename : null,
            'website' => $this->website,
            'github' => $this->github,
            'twitter' => $this->twitter,
            'bio' => $this->bio
        ]);

        return redirect('/');
    }

    //public function updated($field)
    //{
    //    $this->validateOnly($field, $this->validationRules());
    //}

    protected function validationRules()
    {
        return [
            'name' => 'required|min:6',
            'avatar' => 'image|max:2000',
            'website' => ['nullable', 'sometimes', new ValidDomain],
            'github' => 'nullable|sometimes|string|min:5',
            'twitter' => 'nullable|sometimes|string|min:5',
            'bio' => 'required|string'
        ];
    }
}
