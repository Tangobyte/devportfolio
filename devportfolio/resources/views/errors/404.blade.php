@extends ('layout')

@section('content')
    <div class="error-message">
    <h1>Error 404</h1>
    <article>
        <h2>Page not found</h2>
            <p>It seems the page you were looking for does not exist or has been removed from the site.</p>
                <img src="{{ asset('images/404error.png') }}" alt="404 Image">
            <p>Check the URL or return to the homepage</p>
        <a href='/' class="homelink {{ Request::path() === 'Homepage' ? 'active_page' : '' }}">Return to home page</a>
    </article>
    </div>
@endsection
