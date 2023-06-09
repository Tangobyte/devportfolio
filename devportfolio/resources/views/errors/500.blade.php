@extends ('layout')

@section('content')
    <div class="error-message">
    <h1>Error 500</h1>
    <article>
        <h2>Internal server error</h2>
            <p>It looks like our server is down for the moment.</p>
                <img src="{{ asset('images/500error.png') }}" alt="500 Image">
            <p>You can refresh the page or come back later.</p>
        <a href='/' class="homelink {{ Request::path() === 'Homepage' ? 'active_page' : '' }}">Return to home page</a>
    </article>
    </div>
@endsection
