<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SimpleRestHelloWorldApiTest extends TestCase
{
    use RefreshDatabase;
    // use DatabaseMigrations;

    /**
     * Retrieve greetings collection resource test.
     *
     * @return void
     */
    public function testCanShowAllGreetings()
    {
        // Arrange
        factory(\App\Greeting::class)->create(['text' => 'Hello World!']);
        factory(\App\Greeting::class)->create(['text' => 'How\'s it going?']);

        // Act
        $response = $this->getJson('/api/v1/greetings');

        // Assert
        $response
            ->assertOk()
            ->assertExactJson([
                'data' => [
                    [
                        'type' => 'greeting',
                        'id' => 1,
                        'attributes' => ['text' => 'Hello World!'],
                    ],
                    [
                        'type' => 'greeting',
                        'id' => 2,
                        'attributes' => ['text' => 'How\'s it going?'],
                    ]
                ],
                'meta' => [
                    'author' => 'Jim Merioles',
                    'email' => 'jimwisleymerioles@gmail.com',
                    'github' => 'https://github.com/jimmerioles',
                    'twitter' => 'https://twitter.com/jimmerioles',
                    'linkedin' => 'https://linkedin.com/in/jimwisleymerioles',
                    'message' => 'Thank you for checking out the source! :) #HireMe!'
                ]
            ]);
    }

    /**
     * Store a greeting resource test.
     *
     * @return void
     */
    public function testCanStoreGreeting()
    {
        // Arrange & Act
        $response = $this->postJson('/api/v1/greetings', ['text' => 'Whatsup!']);

        // Assert
        $response
            ->assertStatus(201)
            ->assertExactJson([
                'data' => [
                    'type' => 'greeting',
                    'id' => 1,
                    'attributes' => ['text' => 'Whatsup!'],
                ]
            ]);
        $this->assertDatabaseHas('greetings', ['text' => 'Whatsup!']);
    }

    /**
     * Show a greeting resource test.
     *
     * @return void
     */
    public function testCanShowAGreeting()
    {
        // Arrange
        factory(\App\Greeting::class)->create(['text' => 'Good morning!']);

        // Act
        $response = $this->getJson('/api/v1/greetings/1');

        // Assert
        $response
            ->assertOk()
            ->assertExactJson([
                'data' => [
                    'type' => 'greeting',
                    'id' => 1,
                    'attributes' => ['text' => 'Good morning!'],
                ]
            ]);
        $this->assertDatabaseHas('greetings', ['text' => 'Good morning!']);
    }

    /**
     * Update a greeting resource test.
     *
     * @return void
     */
    public function testCanUpdateAGreeting()
    {
        // Arrange
        factory(\App\Greeting::class)->create(['text' => 'Good morning!']);

        // Act
        $response = $this->patchJson('/api/v1/greetings/1', [
            'data' => [
                "type" => "greetings",
                "id" => 1,
                "attributes" => [
                    'text' => 'Good afternoon!'
                ]
            ]
        ]);

        // Assert
        $response->assertStatus(204);
        $this->assertDatabaseHas('greetings', ['id' => 1, 'text' => 'Good afternoon!']);
    }

    /**
     * Delete a greeting resource test.
     *
     * @return void
     */
    public function testCanDeleteAGreeting()
    {
        // Arrange
        factory(\App\Greeting::class)->create(['text' => 'Good morning!']);
        factory(\App\Greeting::class)->create(['text' => 'Good afternoon!']);

        // Act
        $response = $this->deleteJson('/api/v1/greetings/1');

        // Assert
        $response->assertStatus(204);
        $this->assertDatabaseMissing('greetings', ['id' => 1, 'text' => 'Good morning!']);
    }
}
