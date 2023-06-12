<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'RateAttractiveness.between' => 'Please only pick a number between 1 and 10',
            'RateEasyOfUse.required' => 'Please enter a rating for ease of use.',
            'RateEasyOfUse.between' => 'Please only pick a number between 1 and 10',
            'RateNavigation.required' => 'Please enter a rating for navigation.',
            'RateNavigation.between' => 'Please only pick a number between 1 and 10',
            'RateCleanAndSimple.required' => 'Please enter a rating for cleanliness and simplicity.',
            'RateCleanAndSimple' => 'Please only pick a number between 1 and 10',
            'RateUserExperience.required' => 'Please enter a rating for user experience.',
            'RateUserExperience.between' => 'Please only pick a number between 1 and 10',
            'AnythingToAdd.regex' => 'This field should only contain alphabetic characters and spaces.',
            'AnythingToAdd.max' => 'This field should not exceed 100 characters.',
            'OpenRemark.regex' => 'The :attribute field should only contain alphabetic characters and spaces.',
            'OpenRemark.max' => 'The :attribute field should not exceed 100 characters.',
        ]);

        // Create a new form submission
        $formSubmission = FormSubmission::create($validatedData);

        // Optionally, you can perform additional actions here (e.g., sending emails, notifications, etc.)

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function showOverview()
    {
        $submissions = DB::table('form_submissions')->get();

        return view('auth.formoverview', ['submissions' => $submissions]);
    }

    public function show($id)
    {
        $submission = DB::table('form_submissions')->find($id);

        return view('auth.formshow', ['submission' => $submission]);
    }

    public function edit($id)
    {
        $submission = DB::table('form_submissions')->find($id);

        return view('auth.formedit', ['submission' => $submission]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only([
            'RateAttractiveness',
            'RateEasyOfUse',
            'RateNavigation',
            'RateCleanAndSimple',
            'RateUserExperience',
            'AnythingToAdd',
            'OpenRemark',
        ]);

        DB::table('form_submissions')->where('id', $id)->update($data);

        return redirect()->route('form.show', $id)->with('success', 'Form result updated successfully.');
    }

    public function destroy($id)
    {
        // Find the form result by ID
        $submission = FormSubmission::findOrFail($id);

        // Delete the form result
        $submission->delete();

        // Redirect back to the overview page with a success message
        return redirect()->route('auth.formoverview')->with('success', 'Form result deleted successfully.');
    }
}
