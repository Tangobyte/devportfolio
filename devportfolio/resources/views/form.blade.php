@extends('layout')

@section('content')
    <h1>Form</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('form.store') }}">
        @csrf
        <div>
            <label for="rate_attractiveness">Rate attractiveness:</label>
            <input type="number" name="RateAttractiveness" id="rate_attractiveness" required>
        </div>
        <div>
            <label for="rate_easy_of_use">Rate easy of use:</label>
            <input type="number" name="RateEasyOfUse" id="rate_easy_of_use" required>
        </div>
        <div>
            <label for="rate_navigation">Rate navigation:</label>
            <input type="number" name="RateNavigation" id="rate_navigation" required>
        </div>
        <div>
            <label for="rate_clean_and_simple">Clean and simple design:</label>
            <input type="number" name="RateCleanAndSimple" id="rate_clean_and_simple" required>
        </div>
        <div>
            <label for="rate_user_experience">Rate your user experience:</label>
            <input type="number" name="RateUserExperience" id="rate_user_experience" required>
        </div>
        <div>
            <label for="anything_to_add">Anything to add:</label>
            <input type="text" name="AnythingToAdd" id="anything_to_add">
        </div>
        <div>
            <label for="open_remark">Open remark:</label>
            <input type="text" name="OpenRemark" id="open_remark">
        </div>
        <button type="submit">Submit</button>
    </form>

@endsection
