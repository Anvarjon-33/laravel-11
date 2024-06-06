<?php

namespace Tests\Feature;

use App\Exceptions\SimpleExeption;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Exceptions;
use Tests\TestCase;

class Controllers extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected User $user;
    protected User $user_with_token;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->user_with_token = User::factory()->create([
            'remember_token' => $this->user->createToken('sanctum')->plainTextToken
        ]);
    }

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_some_path()
    {
        $response = $this->get('/some');
        $response->assertStatus(200);
    }

    public function test_some_with_session()
    {
        $response = $this->withSession(['data' => 'String_data'])->get('/some');
        $response->assertStatus(200);
        $response->dumpHeaders();
        $response->dumpSession();
        $response->dump();

    }

    /*
        public function test_some_path_with_exeption()
        {
            Exceptions::fake();
            $response = $this->get('/some_1');
            Exceptions::assertReported(SimpleExeption::class);
    }
    */

    public function test_request_with_special_hedaers()
    {
        $response = $this->get('/');
        $response->assertHeader('Content-Type');
        $response->assertStatus(200);
    }

    public function test_user_successfully_login()
    {
        $response = $this->actingAs($this->user)->post('login');
        $response->assertStatus(302);
        $response->assertRedirectToRoute('dashboard');
    }

    public function test_basic_test(): void
    {
        $response = $this->get('/');
        $response->dumpHeaders();
        $response->dumpSession();
        $response->dump();
        $response->assertSee('User can');
    }

    public function test_get_user_from_api()
    {
        $response = $this->actingAs($this->user_with_token)->get('api/user');
        $response->assertStatus(200);
        $response->dump();
        $response = $this->get('login');
        $response->assertRedirectToRoute('dashboard');
    }

    public function test_ModelNotFoundException_is_working(): void
    {
        Exceptions::fake();
        $this->get('/user/4');
        $this->expectException(ModelNotFoundException::class);
        //        Exceptions::assertNotReported(ModelNotFoundException::class);

        //        Exceptions::assertReported(ModelNotFoundException::class);
    }
}
