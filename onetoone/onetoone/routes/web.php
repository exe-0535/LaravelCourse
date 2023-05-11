<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;

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

    $user = User::findOrFail(2);
    $address = new Address(['name' => '123 Melbourne av NY 11218']);

    $user->address()->save($address);


});

Route::get('/update', function () {

    $address = Address::where('user_id', 1)->first();

    $address->name = '4352 Updated Av ALASKA';

    $address->save();

});

Route::get('/read', function () {

    $user = User::findOrFail(1);
    echo $user->address->name;

});

Route::get('/delete', function () {

    $user = User::findOrFail(1);
    $user->address()->delete();

});