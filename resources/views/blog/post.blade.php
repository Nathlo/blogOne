<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h2>{{ $post->title  }}</h2>
    <p>{{ $post->content  }}</p>
    <a href="{{ url('/') }}">Liste des articles</a>



</body>
</html>