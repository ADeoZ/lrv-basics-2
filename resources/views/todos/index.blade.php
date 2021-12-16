<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Todos</title>
    <style>
        .Todos {
            text-align: center;
            border-collapse: collapse;
        }

        .Todos_header {
            font-weight: bold;
        }

        .Todos_col {
            border: 1px solid black;
        }

        .Todos_link {
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            display: block;
            padding: 3px 10px;
            font-weight: bold;
            color: #0c5460;
        }

        .Todos_link:hover {
            background-color: #0c5460;
            color: #ffffff;
        }

        .Todos_new {
            width: 180px;
            display: flex;
            justify-content: center;
            border: 1px solid black;
            border-radius: 5px;
            margin: 25px;
            padding: 15px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            background-color: #0c5460;
            color: #ffffff;
        }

        .Todos_new:hover {
            background-color: #ffffff;
            color: #0c5460;
        }
    </style>
</head>
<body>
<h1>All of the Todos</h1>
<table class="Todos">
    <thead class="Todos_header">
    <tr>
        <td class="Todos_col">ID</td>
        <td class="Todos_col">Title</td>
        <td class="Todos_col">Description</td>
        <td class="Todos_col">Created at</td>
    </tr>
    </thead>
    <tbody>
    @if (count($todos))
        @foreach($todos as $key=>$value)
            <tr class="Todos_row">
                <td class="Todos_col">{{ $value->id }}</td>
                <td class="Todos_col"><a class="Todos_link" href="/todo/{{ $value->id }}">{{ $value->title }}</a></td>
                <td class="Todos_col">{{ $value->description }}</td>
                <td class="Todos_col">{{ $value->created_at }}</td>
            </tr>
        @endforeach
    @else
        <tr class="Todos_row">
            <td class="Todos_col" colspan="4">No todos</td>
        </tr>
    @endif
    </tbody>
</table>
<a class="Todos_new" href="/todo/create">Generate New Todo</a>
</body>
</html>
