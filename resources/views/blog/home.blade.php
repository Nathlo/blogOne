<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
</head>
<body>
    <h1>Les Articles du Blog</h1>
    @if ($posts->isEmpty())
        <p>Aucun article trouvé</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h2>{{ $post->title  }}</h2>
                    <p>{{  $post->content }}</p>
                </li>
            @endforeach
        </ul>
        
    @endif

</body>
</html>