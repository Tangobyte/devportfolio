<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageLoadingTest extends TestCase
{
    /**
     * Test response with Homepage
     */
    public function testHomePage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test response with Homepage
     */
    public function testProfilePage(): void
    {
        $response = $this->get('/profile');

        $response->assertStatus(200);
    }

    /**
     * Test response with Homepage
     */
    public function testDashboardPage(): void
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    /**
     * Test that the proper page loads with a 404 error
     */
    public function testError404Page(): void
    {
        $response = $this->get('/UwU');

        $response->assertStatus(404);
    }

    /**
     * Test the form page
     */
    public function testFormPage(): void
    {
        $response = $this->get('/form');

        $response->assertStatus(200);
    }
}
