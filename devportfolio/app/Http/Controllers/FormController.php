<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // Validate the form submission
        $validatedData = $request->validate([
            'RateAttractiveness' => ['required', 'integer', 'between:1,10'],
            'RateEasyOfUse' => ['required', 'integer', 'between:1,10'],
            'RateNavigation' => ['required', 'integer', 'between:1,10'],
            'RateCleanAndSimple' => ['required', 'integer', 'between:1,10'],
            'RateUserExperience' => ['required', 'integer', 'between:1,10'],
            'AnythingToAdd' => ['nullable', 'string', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
            'OpenRemark' => ['nullable', 'string', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
        ], [
            'RateAttractiveness.required' => 'Please enter a rating for attractiveness.',
            'RateEasyOfUse.required' => 'Please enter a rating for ease of use.',
            'RateNavigation.required' => 'Please enter a rating for navigation.',
            'RateCleanAndSimple.required' => 'Please enter a rating for cleanliness and simplicity.',
            'RateUserExperience.required' => 'Please enter a rating for user experience.',
            'AnythingToAdd.regex' => 'The :attribute field should only contain alphabetic characters and spaces.',
            'AnythingToAdd.max' => 'The :attribute field should not exceed 100 characters.',
            'OpenRemark.regex' => 'The :attribute field should only contain alphabetic characters and spaces.',
            'OpenRemark.max' => 'The :attribute field should not exceed 100 characters.',
        ]);

        // Create a new form submission
        $formSubmission = FormSubmission::create($validatedData);

        // Optionally, you can perform additional actions here (e.g., sending emails, notifications, etc.)

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
