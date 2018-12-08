<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertViewIs('welcome');
    }

    public function testView()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/profile');

        $response->assertViewIs('myprofile');
    }

    public function testAuth()
    {
        $response = $this->post('register', ['name' => 'jojon', 'email' => 'bebek', 'password' => 'testing', 'password-confirm' => 'test']);

        $response->assertSessionHasErrors(['password']);
    }
}
