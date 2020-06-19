<?php

namespace Tests\Feature;

use App\Author;
use App\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class CreateCourseTest extends TestCase
{
    use RefreshDatabase;

    protected $authors;

    protected $categories;

    public function setUp(): void
    {
        parent::setUp();
        $this->authors = factory(\App\Author::class, 2)->create();
        $this->categories = factory(\App\Category::class, 3)->create();
    }

    /** @test */
    function can_create_course()
    {
        $selectedAuthors = $this->authors->map(function ($author) {
            return [
                'id' => $author->id,
                'name' => $author->name,
            ];
        })->toArray();
        $selectedCategories = $this->categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
            ];
        })->toArray();

        $image = UploadedFile::fake()->image('course.png');
        Storage::fake('author-avatars');

        Livewire::test('course-form')
            ->set('name', 'Refactoring UI')
            ->set('selectedAuthors', $selectedAuthors)
            ->set('selectedCategories', $selectedCategories)
            ->set('image', $image)
            ->set('website', 'refactoringui.com')
            ->set('summary',
                'Learn how to design awesome UIs by yourself using specific tactics explained from a developer\'s point-of-view.')
            ->call('save');

        $this->assertTrue(Course::where('name', 'Refactoring UI')->exists());
        $this->assertEquals(2, Course::where('name', 'Refactoring UI')->first()->authors->count());
        $this->assertEquals(3, Course::where('name', 'Refactoring UI')->first()->categories->count());

        Storage::disk('course-avatars')->assertExists(Course::where('name', 'Refactoring UI')->first()->image);
    }
}
