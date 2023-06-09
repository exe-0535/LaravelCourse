<?php

use App\Http\Controllers\DayOneRecap;
use Illuminate\Support\Facades\Route;

// to avoid pasting the same path all over again
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
use App\Models\Country;/*
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

// Inserting data
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

// Route::get('/update', function() {

//     Post::where('id', 4)->where('is_admin', 0)->update(['title'=>'The Update Method', 'content'=>'Update method example content']);


// });


// Route::get('/delete', function() {

//     $post = Post::find(4);

//     $post->delete();

// });

// Route::get('/delete2', function() {
   
//    Post::destroy([6, 7]); 

// });

// Route::get('/softdelete', function() {

//     Post::where('id', 13)->delete();

// });

// Route::get('/readsoftdelete', function() {

//     // $post = Post::find(8);

//     // return $post;

//     return Post::withTrashed()->where('id', 8)->get();

//     // withTrashed() returns all posts including trashed ones
//     // onlyTrashed() return only trashed posts


// });


// Route::get('/restore', function() {

//     Post::withTrashed()->where('is_admin', 0)->restore();

// });

// Route::get('/forcedelete', function() {

//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

// });


//
//  Eloquent Relationships
//


// // One to one relationship
// Route::get('/user/{id}/post', function($id) {

//     return User::find($id)->post->title;

// });

// // Inverse one to one relationship
// Route::get('/post/{id}/user', function($id) {

//     return Post::find($id)->user->name;

// });

// // One to many relationship
// Route::get('/posts', function() {

//     $user = User::find(1);
//     foreach($user->posts as $post) {

//         echo $post->title . "<br>";

//     }

// });

// // Many to many relationship
// Route::get('/user/{id}/role', function($id) {

//     $user = User::find($id)->roles()->orderBy('name')->get();

//     return $user;

//     // foreach($user->roles as $role) {
//     //     return $role->name;
//     // }

// });

// // Accessing the intermediate table / pivot 

// Route::get('/user/pivot', function() {

//     $user = User::find(1);

//     foreach($user->roles as $role) {
//         echo $role->pivot->created_at;
//     }
// });

// Route::get('/user/country', function() {

//     $country = Country::find(1);

//     foreach($country->posts as $post) {
//         return $post->title;
//     }

// });


//
//  Polymorphic Relations
//

// Route::get('user/photos', function() {

//     $user = User::find(1);

//     foreach($user->photos as $photo) {
//         return $photo;
//     }

// });







// 
//
//

Route::resource('/posts', PostsController::class);