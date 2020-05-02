<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testGetById()
    {
        $user = factory(User::class)->create();

        $response = $this->get('/id/'.$user->id);

        $response
            ->assertStatus(200)
            ->assertJson($user->toArray());
    }

    /**
     * @return void
     */
    public function testGetByEmail()
    {
        $user = factory(User::class)->create();

        $response = $this->get('/email/'.$user->email);

        $response->assertStatus(200)
            ->assertJson($user->toArray());
    }
}
