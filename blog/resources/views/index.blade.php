<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Post</title>

</head>

<body>
    @foreach($posts as $post)
    <a href="/posts/{{$post->url}}">
        <p>{{ $post->content }}</p>
    </a>
    @endforeach
</body>

</html>