<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Список постов</h1>
    <ul>
        <li>
            <a href="{{ route('posts.show', ['slug'=>1 ]) }}">Post1</a>
            <a href="{{ route('posts.edit', ['slug'=>1 ]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['slug' => 1]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['slug'=>2 ]) }}">Post2</a>
            <a href="{{ route('posts.edit', ['slug'=>2 ]) }}">Edit2</a>
            <form action="{{ route('posts.destroy', ['slug' => 2]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['slug'=>3 ]) }}">Post3</a>
            <a href="{{ route('posts.edit', ['slug'=>3 ]) }}">Edit3</a>
            <form action="{{route('posts.destroy',['slug'=>3])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="soubmit">Delete</button>
            </form>
        </li>


    </ul>
</body>
</html>