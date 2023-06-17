<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comments;

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
    return view('index');
})-> name('home');

Route::get('/index', function () {
    return view('index');
})-> name('home');

Route::get('/books', function () {
    return view('books');
})-> name('books');

// Route::get('/profile', function () {
//     return view('profile', ['comm'=> Comments::all()]);
// })-> name('profile');

Route::get(
	'/profile/{id}',
	'App\Http\Controllers\UserController@user_profile'
)-> name('profile');

Route::get('/users', function () {
    return view('users');
})-> name('user');

Route::get('/regist', function () {
    return view('regist');
}) -> name('reg');

Route::post(
    '/regist/submit',
    'App\Http\Controllers\UserController@reg'
) -> name('regist_form');

Route::post(
    '/auth/submit',
    'App\Http\Controllers\UserController@auth'
) -> name('auth_form');

Route::get(
    '/login',
    'App\Http\Controllers\UserController@login'
) -> name('login');

Route::get(
    '/logout',
    'App\Http\Controllers\UserController@logout'
) -> name('logout');

Route::post(
    '/comments/submit',
    'App\Http\Controllers\UserController@com'
) -> name('regist_com');

Route::get(
    '/out_users',
    'App\Http\Controllers\UserController@out_users'
) -> name('out_users');

Route::get(
    '/out_users/user/{id}',
    'App\Http\Controllers\UserController@out_users'
) -> name('out_users_profil');