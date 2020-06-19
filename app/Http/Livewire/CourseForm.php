<?php

namespace App\Http\Livewire;

use App\Author;
use App\Category;
use App\Course;
use App\Rules\ValidDomain;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CourseForm extends Component
{
    use WithFileUploads;

    public $name;
    public $authors;
    public $searchAuthor = '';
    public $selectedAuthors = [];
    public $summary;
    public $image;
    public $website = '';
    public $description;
    public $categories;
    public $searchCategory = '';
    public $selectedCategories = [];

    public function render()
    {
        return view('livewire.course-form', [
            'existingAuthors' => Author::whereLike('name', $this->searchAuthor)
                ->whereNotIn('id', collect($this->selectedAuthors)->pluck('id')->toArray())
                ->get(),
            'existingCategories' => Category::whereLike('name', $this->searchCategory)
                ->whereNotIn('id', collect($this->selectedCategories)->pluck('id')->toArray())
                ->get(),
        ]);
    }

    public function save()
    {
        $this->validate($this->validationRules());

        if ($this->image)
            $filename = $this->image->store('/', 'course-avatars');

        $course = Course::create([
            'name' => $this->name,
            'image' => isset($filename) ? $filename : null,
            'website' => $this->website,
            'summary' => $this->summary,
            'description' => $this->description,
        ]);

        $course->authors()->attach(collect($this->selectedAuthors)->pluck('id')->toArray());
        $course->categories()->attach(collect($this->selectedCategories)->pluck('id')->toArray());

        $this->dispatchBrowserEvent('notify', 'Course created');
    }

    public function setAuthor($id, $authorName)
    {
        array_push($this->selectedAuthors, [
            'id' => $id,
            'name' => $authorName
        ]);
        $this->searchAuthor = '';
    }

    public function removeAuthor($id, $authorName)
    {
        if (($key = array_search([
                'id' => $id,
                'name' => $authorName
            ], $this->selectedAuthors)) !== false) {
            unset($this->selectedAuthors[$key]);
        }
    }

    public function setCategory($id, $categoryName)
    {
        array_push($this->selectedCategories, [
            'id' => $id,
            'name' => $categoryName
        ]);
        $this->searchCategory = '';
    }

    public function removeCategory($id, $name)
    {
        if (($key = array_search([
                'id' => $id,
                'name' => $name
            ], $this->selectedCategories)) !== false) {
            unset($this->selectedCategories[$key]);
        }
    }

    public function addCategory()
    {
        $category = Category::create([
            'name' => Str::title($this->searchCategory),
        ]);
        $this->setCategory($category->id, $category->name);
    }

    protected function validationRules()
    {
        return [
            'name' => 'required|min:6|unique:courses,name',
            'selectedAuthors' => 'required|array|max:3',
            'selectedCategories' => 'required|array|max:9',
            'image' => 'nullable|image|max:2000',
            'website' => ['nullable', 'sometimes', new ValidDomain],
            'summary' => 'required|string',
            'description' => 'nullable|sometimes|string',
        ];
    }
}
