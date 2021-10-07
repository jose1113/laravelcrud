<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    </head>
    <body>

        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

            <form method="POST" action="/posts/{{ $post->id }}">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label">Título: </label>
                    <input id="title" name="title" value="{{ $post->title }}" class="form-control">
                </div>

                <div class="mb-4">
                    <label for="content" class="form-label">Conteúdo: </label>
                    <textarea id="content" name="content" class="form-control">{{ $post->content }}</textarea>
                </div>

                <button class="btn btn-primary">Atualizar</button>
                <a href="/posts" class="btn btn-secondary">Cancelar</a>

            </form>

            <form action="/posts/{{ $post->id }}" method="POST">

                @csrf

                @method('DELETE')

                <button class="btn btn-danger mt-2">Apagar post</button>
            
            </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>