@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Form Result</h1>

        <form action="{{ route('form.update', $submission->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Attractiveness Rating -->
            <div class="form-group">
                <label for="rateAttractiveness">Attractiveness Rating</label>
                <input type="number" class="form-control" id="rateAttractiveness" name="RateAttractiveness" value="{{ $submission->RateAttractiveness }}" required min="1" max="10">
                @error('RateAttractiveness')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Easy to Use Rating -->
            <div class="form-group">
                <label for="rateEasyOfUse">Easy to Use Rating</label>
                <input type="number" class="form-control" id="rateEasyOfUse" name="RateEasyOfUse" value="{{ $submission->RateEasyOfUse }}" required min="1" max="10">
                @error('RateEasyOfUse')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Website Navigation Rating -->
            <div class="form-group">
                <label for="rateNavigation">Website Navigation Rating</label>
                <input type="number" class="form-control" id="rateNavigation" name="RateNavigation" value="{{ $submission->RateNavigation }}" required min="1" max="10">
                @error('RateNavigation')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Clean and Simple Rating -->
            <div class="form-group">
                <label for="rateCleanAndSimple">Clean and Simple Rating</label>
                <input type="number" class="form-control" id="rateCleanAndSimple" name="RateCleanAndSimple" value="{{ $submission->RateCleanAndSimple }}" required min="1" max="10">
                @error('RateCleanAndSimple')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- User Experience Rating -->
            <div class="form-group">
                <label for="rateUserExperience">User Experience Rating</label>
                <input type="number" class="form-control" id="rateUserExperience" name="RateUserExperience" value="{{ $submission->RateUserExperience }}" required min="1" max="10">
                @error('RateUserExperience')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Anything to Add -->
            <div class="form-group">
                <label for="anythingToAdd">Anything to Add</label>
                <textarea class="form-control" id="anythingToAdd" name="AnythingToAdd" rows="3">{{ $submission->AnythingToAdd }}</textarea>
                @error('AnythingToAdd')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Open Remarks -->
            <div class="form-group">
                <label for="openRemark">Open Remarks</label>
                <textarea class="form-control" id="openRemark" name="OpenRemark" rows="3">{{ $submission->OpenRemark }}</textarea>
                @error('OpenRemark')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <br>
            <a href="{{ route('auth.formoverview') }}" class="btn btn-secondary mt-3">Back to Overview</a>
        </form>
    </div>
@endsection
