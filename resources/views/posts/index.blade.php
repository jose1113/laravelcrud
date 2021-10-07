<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

    
    <div style="width: 900px; max-whidth: 100%; margin: 0 auto;" class="container">

        <h1>Meu blog</h1>
        <a href="/posts/create">Adicionar post</a>

        @foreach ($posts as $post)
            
        
        <article>
            <a href="/posts/{{ $post->id }}/edit">{{ $post->title }}</a>
            <p>{{ $post->content }}</p>
            <hr>
        </article>

        @endforeach

    </div>
    
</body>
</html>