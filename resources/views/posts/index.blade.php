<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    </head>
    <body>
        
        <div style="width: 900px; max-whidth: 100%; margin: 0 auto;" class="container">

            <h1 class="mt-3"><strong>Meu blog</strong></h1>
            <a href="/posts/create" class="btn btn-primary my-3">Adicionar post</a>

            @foreach ($posts as $post)
                
            
            <article>
                <a href="/posts/{{ $post->id }}/edit" class="h3 text-decoration-none">{{ $post->title }}</a>
                <p>{{ $post->content }}</p>
                <hr>
            </article>

            @endforeach

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>