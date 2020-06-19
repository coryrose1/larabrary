<?php

namespace App\Http\Livewire;

use App\Author;
use App\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class CourseForm extends Component
{
    public $name;
    public $authors;
    public $searchAuthor = '';
    public $selectedAuthors = [];
    public $summary;
    public $image;
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
}
