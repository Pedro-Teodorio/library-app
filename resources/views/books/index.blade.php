<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de livros</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #333333;
            color: white;
        }

        a {
            display: block;
            margin: 10px 0;
            text-decoration: none;
            color: #404040;
        }
    </style>
</head>
<body>
    <h1>Lista de livros </h1>
    <a href="{{route('books.create')}}">Cadastrar Livro</a>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Páginas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->pages}}</td>
            </tr>
            @endforeach
        </tbody>
</body>
</html>