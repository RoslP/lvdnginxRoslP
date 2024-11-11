<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>123</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href={{ route('main.index')}}> Main page </a></li>
            <li><a href={{ route('post.index') }}> Posts page </a></li>
            <li><a href={{ route('about.index') }}> About page </a></li>
            <li><a href={{ route('contact.index') }}> Contacts page </a></li>
        </ul>
    </nav>
</div>
<div>
    @yield('content')
</div>
</body>
</html>
