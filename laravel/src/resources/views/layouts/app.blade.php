<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('app_title')</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <div>
            @yield('title')
        </div>

        <div>
            @yield('content')
        </div>

    </body>
</html>
