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
        {{-- <div {{ $loop->even ? 'style=background-color:gray;' : '' }}> --}}
            <div  @style([
                'background-color: gray' => $loop->odd {{-- $loop->even --}},
                'font-weight: bold',
                'padding: 10px',
            ])>
            <h3>{{ $post['title'] }}</h3>
            <p> {{ $post['content'] }} </p>
            <?php 
            // echo htmlspecialchars($post['id']) 
            ?>
            {{ $post['id'] }}. <a href="{{route('posts.show', $post['id'])}}">Read more</a>
            <hr>
        </div>
    @endforeach

</body>

</html>
