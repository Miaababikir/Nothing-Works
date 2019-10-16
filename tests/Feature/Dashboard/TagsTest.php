<?php

namespace Tests\Feature\Dashboard;

use App\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagsTest extends TestCase
{

    use RefreshDatabase;

    /**
    * @test
    */
     public function only_auth_user_can_add_new_tag()
    {
        $user = $this->loginUser();

        $this->post('/dashboard/tags', [
            'name' => 'Tailwind'
        ]);

        $this->assertDatabaseHas('tags', [
            'user_id' => $user->id,
            'name' => 'Tailwind'
        ]);
    }

    /**
    * @test
    */
     public function user_can_update_tag()
    {
        $this->loginUser();

        $tag = factory(Tag::class)->create();

        $this->put("/dashboard/tags/{$tag->id}", [
            'name' => 'Updated'
        ]);

        $this->assertDatabaseHas('tags', [
            'name' => 'Updated'
        ]);
    }

    /**
    * @test
    */
     public function can_delete_tags()
    {
        $this->loginUser();

        $tag = factory(Tag::class)->create();

        $this->delete("/dashboard/tags/{$tag->id}");

        $this->assertDatabaseMissing('tags', [
            'name' => 'Updated'
        ]);
    }
}
