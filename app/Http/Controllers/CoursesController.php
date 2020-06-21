<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
}
