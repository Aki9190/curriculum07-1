<!DOCTYPE html>
<html long="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nonito:wght0400:600:7006display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1 class="title">{{ $post->title }}</h1>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p class="body">{{ $post->body }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>