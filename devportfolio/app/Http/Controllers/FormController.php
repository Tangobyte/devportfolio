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
            'RateAttractiveness' => 'required|integer',
            'RateEasyOfUse' => 'required|integer',
            'RateNavigation' => 'required|integer',
            'RateCleanAndSimple' => 'required|integer',
            'RateUserExperience' => 'required|integer',
            'AnythingToAdd' => 'nullable|string',
            'OpenRemark' => 'nullable|string',
        ]);

        // Create a new form submission
        $formSubmission = FormSubmission::create($validatedData);

        // Optionally, you can perform additional actions here (e.g., sending emails, notifications, etc.)

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
