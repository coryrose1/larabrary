<?php

namespace Tests\Feature;

use App\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class CreateAuthorTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_create_author()
    {
        Livewire::test('author-form')
            ->set('name', 'Adam Wathan')
            ->set('bio', 'Adam is a smart guy that makes a lot of courses')
            ->set('website', 'adamwathan.me')
            ->set('github', 'adamwathan')
            ->set('twitter', 'adamwathan')
            ->call('save')
            ->assertRedirect('/');

        $this->assertTrue(Author::where('name', 'Adam Wathan')->exists());
    }

    /** @test */
    function name_is_required()
    {
        Livewire::test('author-form')
            ->set('name', '')
            ->set('bio', 'Adam is a smart guy that makes a lot of courses')
            ->set('website', 'adamwathan.me')
            ->set('github', 'adamwathan')
            ->set('twitter', 'adamwathan')
            ->call('save')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test */
    function name_is_minimum_of_six_characters()
    {
        Livewire::test('author-form')
            ->set('name', 'Fives')
            ->set('bio', 'Adam is a smart guy that makes a lot of courses')
            ->set('website', 'adamwathan.me')
            ->set('github', 'adamwathan')
            ->set('twitter', 'adamwathan')
            ->call('save')
            ->assertHasErrors(['name' => 'min']);
    }

    /** @test */
    function bio_is_required()
    {
        Livewire::test('author-form')
            ->set('name', 'Adam Wathan')
            ->set('bio', '')
            ->set('website', 'adamwathan.me')
            ->set('github', 'adamwathan')
            ->set('twitter', 'adamwathan')
            ->call('save')
            ->assertHasErrors(['bio' => 'required']);
    }

    /** @test */
    function websites_are_nullable()
    {
        Livewire::test('author-form')
            ->set('name', 'Adam Wathan')
            ->set('bio', 'Adam is a smart guy that makes a lot of courses')
            ->set('website', '')
            ->set('github', '')
            ->set('twitter', '')
            ->call('save')
            ->assertHasNoErrors(['website', 'github', 'twitter'])
            ->assertRedirect('/');

        $this->assertTrue(Author::where('name', 'Adam Wathan')->exists());
    }

    /** @test */
    function can_upload_avatar()
    {
        $file = UploadedFile::fake()->image('avatar.png');

        Storage::fake('author-avatars');

        Livewire::test('author-form')
            ->set('name', 'Adam Wathan')
            ->set('bio', 'Adam is a smart guy that makes a lot of courses')
            ->set('website', 'adamwathan.me')
            ->set('github', 'adamwathan')
            ->set('twitter', 'adamwathan')
            ->set('avatar', $file)
            ->call('save');

        $this->assertTrue(Author::where('name', 'Adam Wathan')->whereNotNull('avatar')->exists());
        Storage::disk('author-avatars')->assertExists(Author::where('name', 'Adam Wathan')->first()->avatar);
    }
}
