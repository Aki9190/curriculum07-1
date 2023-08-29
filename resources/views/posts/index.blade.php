<!DOCTYPE html>
<html long="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nonito:wght0400:600:7006display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <div class="posts">
            @foreach($posts as $post)
            <div class="post">
                <h2 class="title">{{ $post->tite }}</h2>
                <p class="body">{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
        <div class="paginate">{{ $posts->links()}}</div>
    </body>