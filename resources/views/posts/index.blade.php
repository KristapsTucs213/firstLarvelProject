<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>All posts</h1>
    <a href="/posts/create/">Create</a>
    <ul>
        @foreach ($allPosts as $post)
            <li>
                Title: {{ $post->title }} <br>
                Content: {{ $post->content }} <br>
                <a href="/posts/{{ $post->id }}">Show</a>
                <a href="/posts/{{ $post->id }}/edit">Edit</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
