<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;

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


Route::get('/create', function () {

    $user = User::find(1);

    $user->roles()->save(new Role(['name' => 'Subscriber']));


});

Route::get('/read', function () {

    $user = User::findOrFail(1);

    foreach ($user->roles as $role) {

        echo $role->name . "<br>";

    }

});

Route::get('/update', function() {

    $user = User::findOrFail(1);

    $i = 1;

    foreach ($user->roles as $role) {

        $role->update(['name' => 'Updated role name nr ' . $i]);
        $i++;
    }

});

Route::get('/delete', function() {

    $user = User::findOrFail(1);

    if($user->has('roles')) {

        foreach($user->roles as $role) {

            if($role->id == 1) {

                $role->delete();

            }
    
        }

    }

});