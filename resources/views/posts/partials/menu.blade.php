<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <nav>
    <ul>
      <li @style(['
          background-color:cyan' => $active
          === 'all',
          'padding: 10px',
      ])>
      <a href="{{route('posts.index')}}"
        @style(['color: black'])>All Posts</a></li>
      <li @style(['
          background-color:gray' => $active
          === 'create',
          'padding: 10px',
      ])>
      <a href="{{route('posts.create')}}" @style(['color: black'])>Create Post</a></li>
    </ul>
  </nav>
</body>
</html>