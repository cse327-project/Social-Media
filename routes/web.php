<?php

use Illuminate\Http\Request;

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'StatusController@index');
    Route::resource('/status', 'StatusController');
    Route::resource('/comments', 'CommentController');
    Route::resource('/replies', 'ReplyController');

    Route::get('/settings', 'ProfileController@settings_page')->name('user.settings');
    Route::post('/settings', 'ProfileController@update_settings')->name('user.settingsUpdate');
});


Route::get('/user/{username}', 'ProfileController@get_profile')->name('user.profile');
Route::get('/user/{username}', 'ProfileController@get_profile')->name('user.profile');



Route::get('/upload', function () {
    return view('upload');
});


Route::post('/upload', function (Request $request) {

    $image = $request->image->store('/public/profile-photos');
    return $image;
});
