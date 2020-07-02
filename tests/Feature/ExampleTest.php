<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function a_user_can_go_to_beverage_page()
    {
        $response = $this->get('/beverage');
        $response->assertStatus(200);
    }
}
