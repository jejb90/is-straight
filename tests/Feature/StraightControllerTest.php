<?php

namespace Tests\Feature;

use Tests\TestCase;

class StraightControllerTest extends TestCase
{
    /**
     * @test
     */
    public function testIsStraight()
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->json(
            'GET',
            route('isStraight'),
            [
                'straight' => [2, 3, 4, 5, 10, 14]
            ]
        );
        $response->assertStatus(200)
            ->assertJson([
                'data' => true
            ]);
    }

    /**
     * @test
     */
    public function testIsStraightFalse()
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->json(
            'GET',
            route('isStraight'),
            [
                'straight' => [2, 3, 4, 5, 5, 7, 8]
            ]
        );
        $response->assertStatus(200)
            ->assertJson([
                'data' => false
            ]);
    }
}
