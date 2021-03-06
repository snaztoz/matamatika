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
    return view('home');
});

Auth::routes();

Route::get('profile', 'UserProfileController@user_profile')->name('profile');

/**
 * Rute untuk hal-hal terkait foto profile.
 */
Route::apiResource('profile-picture', 'ProfilePictureController');

/**
 * Rute untuk melakukan registrasi kegiatan mentoring.
 */
Route::prefix('mentoring-registration')->group(function() {
	Route::post('{mentoring}/register', 'MentoringRegistrationController@register')
			->name('mentoring-register');
	Route::post('{mentoring}/unregister', 'MentoringRegistrationController@unregister')
			->name('mentoring-unregister');
});

/**
 * Penyimpanan email baru terkait kegiatan mentoring tertentu.
 */
Route::post('mentoring-update/{mentoring}', 'MentoringEmailController@store')
		->name('mentoring-update');
	
Route::resource('forum', 'ForumController')->parameters([
	'forum' => 'question'
]);

Route::resource('mentoring', 'MentoringController');

/* Mungkin rute-rute ini dapat dijadikan API saja? */
Route::resource('forum.answers', 'AnswerController')->shallow();
Route::resource('answer.replies', 'ReplyController')->shallow();