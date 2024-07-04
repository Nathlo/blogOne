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
    

    <h2>Commentaires</h2>
    @foreach ( $post->comments as $comment )
        <div>
            <p>{{ $comment->content  }}</p>
            <small><b>Posté par</b> {{ $comment->user->name  }} <b>le</b> {{ $comment->created_at  }}</small> 
        </div>
    @endforeach

    @auth
        <h2>Ajoutez un commentaire</h2>
        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf
            <div>
                <label for="content">Votre commentaire :</label>
                <textarea name="content" id="content" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>

        {{-- @else
        <p><a href="{{ route('login') }}">Connectez-vous</a> pour ajouter un commentaire.</p> --}}
    @endauth

    <a href="{{ url('/post') }}">Liste des articles</a>
</body>
</html>