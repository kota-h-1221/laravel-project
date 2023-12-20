<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Laravel Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body, h1, h2, p, a {
            font-family: 'Roboto', sans-serif;
        }
        h1 {
            font-family: 'Indie Flower', cursive;
            color: #4A90E2;
            text-align: center;
            font-size: 2.5rem;
        }
        .content {
            text-align: center;
            padding: 20px;
        }
        a {
            color: #FF5722;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            font-size: 0.8rem;
            color: #888;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Welcome to My Laravel Project!</h1>
        <p>This is a custom page to showcase the Laravel framework.</p>
        <a href="https://laravel.com/docs">Check out the Laravel documentation</a>
    </div>

    <div class="footer">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
</body>
</html>
