<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Список постов</h1>

<ul>
    <li>
        <a href="{{ route('posts.show', ['id' => 1]) }}">Post 1</a>
        <br>
        <a href="{{ route('posts.edit', ['id' => 1]) }}">Edit - Post 1</a>
        <br>
        <form action="{{ route('posts.destroy', ['id' => 1]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <hr>
    </li>
    <li>
        <a href="{{ route('posts.show', ['id' => 2]) }}">Post 2</a>
        <br>
        <a href="{{ route('posts.edit', ['id' => 2]) }}">Edit - Post 2</a>
        <br>
        <form action="{{ route('posts.destroy', ['id' => 2]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <hr>
    </li>
    <li>
        <a href="{{ route('posts.show', ['id' => 3]) }}">Post 3</a>
        <br>
        <a href="{{ route('posts.edit', ['id' => 3]) }}">Edit - Post 3</a>
        <br>
        <form action="{{ route('posts.destroy', ['id' => 3]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <hr>
    </li>
</ul>

</body>
</html>