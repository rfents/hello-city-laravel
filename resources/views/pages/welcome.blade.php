<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello Ciy</title>
    </head>
        <h1>Hello from Madagascar!</h1>

        <p>It's actually {{ date('h:i A') }}.</p>

    <footer>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About us</a></footer>
    </body>
</html>
