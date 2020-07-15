<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('forum', 'ForumController')->parameters([
	'forum' => 'question'
]);

Route::resource('mentoring', 'MentoringController');

Route::get('/profile', 'UserProfileController@user_profile')->name('profile');

/* Mungkin rute-rute ini dapat dijadikan API saja? */
Route::resource('forum.answers', 'AnswerController')->shallow();
Route::resource('answer.replies', 'ReplyController')->shallow();