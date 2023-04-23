<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $post['title'] }}</title>
</head>
<body>
  @include('posts.partials.menu', ['active' => 'show'] )
  <h1>{{ $post['title'] }}</h1>
  <p>{{$post['content']}}</p>
  {{-- <p>{ !!$post['content']!! }</p> html tag remove code --}} 
</body>
</html>