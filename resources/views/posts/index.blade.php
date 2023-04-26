@extends('layouts.postsLayout')
@section('content')
    @include('posts.partials.menu', ['active' => 'all'])

    @foreach ($posts as $post)
        <x-post :post="$post" :loop="$loop" />
    @endforeach
@endsection
