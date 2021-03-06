<?php

namespace App\Http\Livewire\Courses;

use App\Course;
use Livewire\Component;

class Courses extends Component
{
    public function render()
    {
        return view('livewire.courses.courses', [
            'courses' => Course::with(['categories', 'authors'])
                ->has('authors')
                ->has('categories')
                ->get(),
        ]);
    }
}
