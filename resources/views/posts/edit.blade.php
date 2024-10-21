<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit post with id: {{$post->id}}</h1>

    <form action="/posts/{{ $post->id}}/update" method="post">
        @csrf
        @method("PUT")

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <br>

        <label for="contnet">Content: </label>
        <textarea name="content" id="content">{{$post -> content}}</textarea>
        <br>

        <input type="submit" value="Edit">
    </form>  
</body>
</html>