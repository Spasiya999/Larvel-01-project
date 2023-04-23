<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function(){
//     return view('Welcome');
// });

// Route::get('/', function () {
//     return '<h1>Hello World</h1>';
// });

//home index view
Route::get('/', function () {
    return view('home.index');
})->name('home.index');


//about index view
Route::get('/about', function(){
    return '<h1>About</h1>';
});

//index view
Route::get('/posts', function(){
    $posts = [
        ['id' => 1, 'title' => 'post 1', 'content' => 'content 1'],
        ['id' => 2, 'title' => 'post 2', 'content' => 'content 2'],
        ['id' => 3, 'title' => 'post 3', 'content' => 'content 3'],
        ['id' => 4, 'title' => 'post 4', 'content' => 'content 4'],
        ['id' => 5, 'title' => 'post 5', 'content' => 'content 5'],
        ['id' => 6, 'title' => 'post 6', 'content' => 'content 6'],
    ];
    return view('posts.index', ['posts' => $posts]);
})->name('posts.index');

//single post view
Route::get('/post/{id?}', function($id = 0){
    if($id == 0)
    {
        return redirect()->route('posts.index');
    }
    return view('posts.show', ['post' => $id]);
})->name('posts.show');


//single post view edit
Route::get('/post/{id}/edit', function($id){
    return '<h1>Post '.$id. ' Edit</h1>';
});