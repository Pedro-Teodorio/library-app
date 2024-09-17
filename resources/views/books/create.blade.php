<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
        }

        label {
            margin-top: 10px;
        }

        input {
            margin-top: 5px;
            padding: 5px;
        }

        button {
            margin-top: 10px;
            padding: 5px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="{{route('books.store')}}" method="post">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" required>

        <label for="author">Autor</label>
        <input type="text" name="author" id="author" required>

        <label for="pages">Páginas</label>
        <input type="number" name="pages" id="pages" required>

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>