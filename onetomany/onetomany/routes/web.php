<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function () {

    $user = User::findOrFail(1);

    $post = new Post(['title' => 'My first post', 'body' => 'First post content']);

    $user->posts()->save($post);


});

Route::get('/read', function() {

    $user = User::findOrFail(1);

    foreach($user->posts as $post) {
        echo $post->title;
    }

});

Route::get('/update', function() {

    $user = User::findOrFail(1);

    foreach($user->posts as $post) { 
        $post->update(['title' => 'Updated title', 'body' => 'Updated body']);
    }

});

Route::get('/delete', function() {

    $user = User::findOrFail(1);

    $post = $user->posts()->first()->delete();


});