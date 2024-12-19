<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_the_post_can_be_stored(): void
    {
        $this->withoutExceptionHandling();
        $data = [
            'title' => 'Title',
            'content' => 'Content',
            'author' => 'Author',
        ];
        $res = $this->post('/posts', $data);
        $res->assertStatus(200);
        $res->assertDatabaseCount('posts', 1);
    }
}
