<?php

namespace Tests\Feature\Dashboard;

use App\Post;
use App\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class PostTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function can_add_post_with_tags()
    {
        $this->loginUser();
        $tags = factory(Tag::class, 3)->create();

        $this->post('/dashboard/posts', [
            'title' => 'This is the title',
            'slug' => Str::slug('This is the title'),
            'content' => 'this is the content',
            'tags' => $tags
        ]);

        $this->assertDatabaseHas('posts', [
            'user_id' => auth()->user()->id,
            'title' => 'This is the title',
            'slug' => Str::slug('This is the title'),
            'content' => 'this is the content',
        ]);

        $this->assertDatabaseHas('post_tag', ['post_id' => 1, 'tag_id' => 1]);
        $this->assertDatabaseHas('post_tag', ['post_id' => 1, 'tag_id' => 2]);
        $this->assertDatabaseHas('post_tag', ['post_id' => 1, 'tag_id' => 3]);

    }

    /**
    * @test
    */
     public function can_update_post_with_tags()
    {
        $this->loginUser();

        $post = factory(Post::class)->create();
        $tags = factory(Tag::class, 2)->create();

        $post->tags()->attach($tags);

        $this->put("/dashboard/posts/{$post->id}", [
            'title' => 'This is the title',
            'slug' => Str::slug('This is the title'),
            'content' => 'this is the content',
            'tags' => factory(Tag::class, 3)->create()
        ]);

        $this->assertDatabaseHas('posts', [
            'user_id' => $post->user_id,
            'title' => 'This is the title',
            'slug' => Str::slug('This is the title'),
            'content' => 'this is the content',
        ]);

        $this->assertDatabaseMissing('post_tag', ['post_id' => 1, 'tag_id' => 1]);
        $this->assertDatabaseMissing('post_tag', ['post_id' => 1, 'tag_id' => 2]);

        $this->assertDatabaseHas('post_tag', ['post_id' => 1, 'tag_id' => 3]);
        $this->assertDatabaseHas('post_tag', ['post_id' => 1, 'tag_id' => 4]);
        $this->assertDatabaseHas('post_tag', ['post_id' => 1, 'tag_id' => 5]);
    }

}
