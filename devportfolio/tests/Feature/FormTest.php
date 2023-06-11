<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testFormSubmissionWithValidData(): void
    {
        $response = $this->post('/form', [
            'RateAttractiveness' => '6',
            'RateEasyOfUse' => '6',
            'RateNavigation' => '6',
            'RateCleanAndSimple' => '6',
            'RateExperience' => '6',
            'AnythingToAdd' => 'None',
            'OpenRemark' => '',
        ]);

        $response->assertRedirect(); // Assert that the response is a redirect
        $response->assertStatus(302); // Optional: Assert the specific status code
    }

    public function testFormSubmissionWithInvalidData()
    {
        $response = $this->post('/form', [
            'RateAttractiveness' => '', // Provide an empty value for the name field to trigger validation error
            'RateEasyOfUse' => '11', // Provide a higher number
            'RateNavigation' => '6.5', // Provide not a whole number
            'RateCleanAndSimple' => '-1', // Provide a negative number
            'AnythingToAdd' => '$%', // Provide special characters
        ]);

        $response->assertSessionHasErrors([
            'RateAttractiveness',
            'RateEasyOfUse',
            'RateNavigation',
            'RateCleanAndSimple',
            'AnythingToAdd'
            ]); // Assert that the specified fields have validation errors
    }
}
