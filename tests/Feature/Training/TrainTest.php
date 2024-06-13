<?php

namespace Tests\Feature\Training;

use Tests\TestCase;

class TrainTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_for_see_asserSee_function()
    {
        $response = $this->get('/some_1');
        $response->assertSee('SOME');
    }
}
