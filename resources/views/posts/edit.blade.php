<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

        <form method="POST" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="title">Title: </label>
                <input id="title" name="title" value="{{ $post->title }}">
            </div>

            <div class="mb-4">
                <label for="content">Content: </label>
                <textarea id="content" name="content">{{ $post->content }}</textarea>
            </div>

            <button>Update</button>
            <a href="/posts">Cancelar</a>

        </form>

        <form action="/posts/{{ $post->id }}">

            @csrf

            @method('DELETE')

            <button>Apagar post</button>
        
        </form>
    </div>
    
</body>
</html>