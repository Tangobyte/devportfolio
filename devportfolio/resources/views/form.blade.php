@extends('layout')

@section('content')
    <h1>Form</h1>

    <article>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <p class="basicform">Please rate the following questions between 1 and 10 with 10 being very satisfactory.<br><br></p>

    <form class="basicform" method="POST" action="{{ route('form.store') }}">
        @csrf
        <div>
            <label for="rate_attractiveness">*Rate attractiveness:</label>
            <input type="number" name="RateAttractiveness" id="rate_attractiveness" value="{{ old('RateAttractiveness') }}" required>
            @error('RateAttractiveness')
            <div class="alert alert-danger">{{ $errors->first('RateAttractiveness') }}</div>
            @enderror
        </div>
        <div>
            <label for="rate_easy_of_use">*Rate easy of use:</label>
            <input type="number" name="RateEasyOfUse" id="rate_easy_of_use" value="{{ old('RateEasyOfUse') }}" required>
            @error('RateEasyOfUse')
            <div class="alert alert-danger">{{ $errors->first('RateEasyOfUse') }}</div>
            @enderror
        </div>
        <div>
            <label for="rate_navigation">*Rate navigation:</label>
            <input type="number" name="RateNavigation" id="rate_navigation" value="{{ old('RateNavigation') }}" required>
            @error('RateNavigation')
            <div class="alert alert-danger">{{ $errors->first('RateNavigation') }}</div>
            @enderror
        </div>
        <div>
            <label for="rate_clean_and_simple">*Clean and simple design:</label>
            <input type="number" name="RateCleanAndSimple" id="rate_clean_and_simple" value="{{ old('RateCleanAndSimple') }}" required>
            @error('RateCleanAndSimple')
            <div class="alert alert-danger">{{ $errors->first('RateCleanAndSimple') }}</div>
            @enderror
        </div>
        <div>
            <label for="rate_user_experience">*Rate your user experience:</label>
            <input type="number" name="RateUserExperience" id="rate_user_experience" value="{{ old('RateUserExperience') }}" required>
            @error('RateUserExperience')
            <div class="alert alert-danger">{{ $errors->first('RateUserExperience') }}</div>
            @enderror
        </div>
        <div>
            <label for="anything_to_add">Anything to add:</label>
            <input type="text" name="AnythingToAdd" id="anything_to_add" value="{{ old('AnythingToAdd') }}">
            @error('AnythingToAdd')
            <div class="alert alert-danger">{{ $errors->first('AnythingToAdd') }}</div>
            @enderror
        </div>
        <div>
            <label for="open_remark">Open remark:</label>
            <input type="text" name="OpenRemark" id="open_remark" value="{{ old('OpenRemark') }}">
            @error('OpenRemark')
            <div class="alert alert-danger">{{ $errors->first('OpenRemark') }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
    </article>

@endsection
