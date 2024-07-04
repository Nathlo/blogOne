<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un article</title>
</head>
<body>
    <h1>Créer un article</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Contenu :</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button type="submit">Créer</button>
    </form>
    <a href="{{ url('/post') }}">Retour à la liste des articles</a>
</body>
</html>