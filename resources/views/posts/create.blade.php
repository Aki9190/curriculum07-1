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
        <form action="/posts" method="POST">
            @csrf
            <div vlass="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="タイトル">
            </div>
            <div class="body">
                <h2>BOdy</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れさまでした"></textarea>
            </div>
            <input type="submit" value="store">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>