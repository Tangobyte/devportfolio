@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Form Results Overview</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Attractiveness Rating</th>
                <th>Easy to Use Rating</th>
                <th>Website Navigation Rating</th>
                <th>Clean and Simple Rating</th>
                <th>User Experience Rating</th>
                <th>Anything to Add</th>
                <th>Open Remarks</th>
                <th>More Details</th>
                <th>Edit Form</th>
                <th>Delete Form</th>
            </tr>
            </thead>
            <tbody>
            @foreach($submissions as $submission)
                <tr>
                    <td>{{ $submission->RateAttractiveness }}</td>
                    <td>{{ $submission->RateEasyOfUse }}</td>
                    <td>{{ $submission->RateNavigation }}</td>
                    <td>{{ $submission->RateCleanAndSimple }}</td>
                    <td>{{ $submission->RateUserExperience }}</td>
                    <td>{{ $submission->AnythingToAdd }}</td>
                    <td>{{ $submission->OpenRemark }}</td>
                    <td>
                        <a href="{{ route('form.show', $submission->id) }}" class="btn btn-primary">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('form.edit', $submission->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('form.destroy', $submission->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this form result?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
