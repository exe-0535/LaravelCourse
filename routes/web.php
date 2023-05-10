<?php

use App\Http\Controllers\DayOneRecap;
use Illuminate\Support\Facades\Route;

// to avoid pasting the same path all over again
use App\Http\Controllers\PostsController;
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

// Route::get('/about', function () {
//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     return "Contact page";
// });

// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number " . $id . " " . $name;

// });

// // naming routes

// Route::get('/admin/posts/example', array('as'=>'admin.home', function () {

//     $url = route('admin.home');
//     return "this url is " . $url;
// }));

// Controller "PostsController" routed to /post route"
// Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::resource('posts', PostsController::class);

// Route::get('/contact', [PostsController::class, 'contact']);

// Route::get('/dayonerecap/{id}', [DayOneRecap::class, 'index']);


// 

//
// RAW SQL QUERIES
//

// Route::get('/insert', function() {

//     DB::insert('INSERT INTO posts(title, content) VALUES (?, ?);', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);

// });

// Route::get('/read', function() {

//     // Returns a class object (reference to data as object properties)
//     $results =  DB::select('SELECT * FROM posts');

//     foreach($results as $result) {
//         echo $result->title;
//     }
// });

// Route::get('/update', function() {

//     $updated = DB::update('UPDATE posts SET title = "Updated title" WHERE id = ?;', [1]);

//     return $updated;
    
// });

// Route::get('/delete', function() {

//     $deleted = DB::delete('DELETE FROM posts WHERE id = ?;', [1]);

//     return $deleted;
// });


//
// ELOQUENT ORM
//

// These two routes underneath are both used to select/read a post with id number 4.
// Although the first one can be used to select/read all records.

// Route::get('/read', function() {

//     // Gets all the record from the Posts table
//     $posts = App\Models\Post::all();

//     foreach($posts as $post) {
//         if($post->id == 4) {
//             echo $post->id . ". ";
//             echo $post->title . "<br>";
//         }
//     }

//     return;
// });

// Route::get('/read', function() {

//     // Gets all the record from the Posts table
//     $post = App\Models\Post::find(4);

//     return $post->id . ". " . $post->title;
// });

// Route::get('/findwhere', function() {


//     $posts = Post::where('id', 4)->orderBy('id', 'desc')->take(1)->get();
//     return $posts[0]->title;
// });

// Route::get('/findmore', function() {


//     // $posts = Post::findOrFail(1);
//     // return $posts;

//     $posts = Post::where('users_count', '<', 50)->firstOrFail();
//     return $posts;

// });


// INSERTING DATA

// // Inserting data
// Route::get('/basicinsert', function() {

//     $post = new Post;

//     $post->title = 'New Eloquent title insert';
//     $post->content = 'Eloquent inserted content';

//     $post->save();

// });

// // Updating data

// Route::get('/basicupdate', function() {

//     $post = Post::find(4);

//     $post->title = 'ID 4 Updated Title';
//     $post->content = 'ID 4 Updated Content';

//     $post->save();
// });

// Route::get('/create', function() {

//     Post::create(['title'=>'The Create Method', 'content'=>'Create method example']);

// });

Route::get('/update', function() {

    Post::where('id', 4)->where('is_admin', 0)->update(['title'=>'The Update Method', 'content'=>'Update method example content']);
    

});