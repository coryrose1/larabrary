<?php

namespace App\Http\Livewire\Courses;

use App\Course;
use Livewire\Component;

class CourseMasonry extends Component
{
    public function render()
    {
        $courses = Course::with(['categories', 'authors'])
            ->has('authors')
            ->has('categories')
            ->inRandomOrder()
            ->take(6)
            ->get();

        return view('livewire.courses.course-masonry', [
            'firstRow' => $courses->slice(0,2),
            'secondRow' => $courses->slice(2,2),
            'thirdRow' => $courses->slice(4,2),
        ]);
    }
}
