<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    @include('posts.partials.menu', ['active' => 'all'])

    @foreach ($posts as $post)
        <x-post :post="$post" :loop="$loop" />
    @endforeach

</body>

</html>
