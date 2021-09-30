<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Response;

class StudentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_all_students()
    {
        $this->json('get', 'api/v1/students')
         ->assertStatus(Response::HTTP_OK)
         ->assertJsonStructure(
             [
                 'something',
                 'message',
                 'data' => [
                     '*' =>[
                         'name',
                         'semester',
                         'age'
                     ]
                 ]
             ]
         );
    }
}
