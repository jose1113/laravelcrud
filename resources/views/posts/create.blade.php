<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Novo post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    </head>
<body>
    
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/posts">

            @csrf

            <div class="mb-4">
                <label for="title">Título: </label>
                <input id="title" name="title">
            </div>

            <div class="mb-4">
                <label for="content">Conteúdo: </label>
                <textarea id="content" name="content"></textarea>
            </div>

            <button>Adicionar</button>
            <a href="/posts">Cancelar</a>

        </form>
    </div>
    
</body>
</html>