<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
<div class="parent">
    <header>
        <nav>
            <ul>
                <li><a href='/' class="{{ Request::path() === 'Homepage' ? 'active_page' : '' }}">Home page</a></li>
                <li><a href='/profile' class="{{ Request::path() === 'Profile' ? 'active_page' : '' }}">My profile</a></li>
                <li><a href='/dashboard' class="{{ Request::path() === 'Dashboard' ? 'active_page' : '' }}">Dashboard</a></li>
                <li><a href='/faq' class="{{ Request::path() === 'FAQ' ? 'active_page' : '' }}">Frequently asked questions</a></li>
                <li><a href='/blog' class="{{ Request::path() === 'Blog' ? 'active_page' : '' }}">My Blog</a></li>
                <li><a href='/articles' class="{{ Request::path() === 'Articles' ? 'active_page' : '' }}">Articles</a></li>
                <li><a href='/grades' class="{{ Request::path() === 'Grades' ? 'active_page' : '' }}">Grades</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <div class="left-side">
        <nav class="subnav">
            <ul>
                <li><a
                        href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/EN/6.-Regulations-Study-Programmes/CER-HZ-Bachelor-full-time-2022-2023-DEF-June-13.pdf">Regulation</a>
                </li>
                <li><a href="https://hz.nl/en/about-hz/regulations-documents/general-conditions">Documents</a></li>
                <li><a href="https://learn.hz.nl/my/">Learn hz</a></li>
                <li><a
                        href="https://teams.microsoft.com/_?culture=en-us&country=US&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school/conversations/Algemeen?threadId=19:827654897ab746089c081f24aff1c984@thread.skype&ctx=channel">Microsoft
                        Team</a></li>
                <li><a href="https://hz.osiris-student.nl/#code=A7MzcI">Osiris</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT">Github</a></li>
            </ul>
        </nav>
    </div>
    <div class="right-side"></div>
    <footer>
        <img class="logo"
             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-b38MlDE6nd0CJz2TjtXXIbajwF80tby6davirrfW&s"
             alt="HZlogo">
    </footer>
</div>
</body>

</html>
