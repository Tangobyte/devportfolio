@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Form Result</h1>

        <div>
            <h3>Attractiveness Rating: {{ $submission->RateAttractiveness }}</h3>
            <p>Easy to Use Rating: {{ $submission->RateEasyOfUse }}</p>
            <p>Website Navigation Rating: {{ $submission->RateNavigation }}</p>
            <p>Clean and Simple Rating: {{ $submission->RateCleanAndSimple }}</p>
            <p>User Experience Rating: {{ $submission->RateUserExperience }}</p>
            <p>Anything to Add: {{ $submission->AnythingToAdd }}</p>
            <p>Open Remarks: {{ $submission->OpenRemark }}</p>
        </div>

        <a href="{{ route('auth.formoverview') }}" class="btn btn-secondary mt-3">Back to Overview</a>
    </div>
@endsection
