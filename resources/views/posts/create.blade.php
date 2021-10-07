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
        <form method="POST" action="/posts">

            @csrf

            <div class="mb-4">
                <label for="title">Title: </label>
                <input id="title" name="title">
            </div>

            <div class="mb-4">
                <label for="content">Content: </label>
                <textarea id="content" name="content"></textarea>
            </div>

            <button>Update</button>
            <a href="/posts">Cancelar</a>

        </form>
    </div>
    
</body>
</html>