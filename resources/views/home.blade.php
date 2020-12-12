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
Hi World!
<ul>
{{--    @foreach($posts as $post)
        <li>
            <p>id : {{ $post->id }}</p>
            <p>Title : {{ $post->title }}</p>
            <p>Content : {{ $post->content }}</p>
            @if(!empty($post->created_at))
            <p>created_at : {{ $post->created_at }}</p>
            @endif
            @if(!empty($post->updated_at))
                <p>updated_at : {{ $post->updated_at }}</p>
            @endif
            <hr>
        </li>
    @endforeach--}}
</ul>
<hr background="firebreak" color="firebreak">
<ul>
{{--    @foreach($countries as $country)
        <li>
            <p>Code : {{ $country->Code }}</p>
            <p>Name : {{ $country->Name }}</p>
            @if(!empty($country->Continent))
            <p>Continent : {{ $country->Continent }}</p>
            @endif
            @if(!empty($country->Region))
                <p>Region : {{ $country->Region }}</p>
            @endif
            @if(!empty($country->Population))
                <p>Population : {{ $country->Population }}</p>
            @endif
            <hr>
        </li>
    @endforeach--}}
</ul>
</body>
</html>