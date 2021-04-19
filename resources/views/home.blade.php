<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>
        <body>
            <h1>Hello from Abidjan !</h1>
            <p>It's currently {{ date('H:i')}}</p>

            <footer>
              <p>&copy; Copyright {{date('Y')}} &middot; <a href="/about-us">About Us</a> </p>  
            </footer>
        </body>
</html>

