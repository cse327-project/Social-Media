<?php


Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', 'StatusController@index');
    Route::resource('/status', 'StatusController');
    Route::resource('/comments', 'CommentController');
});


Route::get('/user/{username}', 'ProfileController@get_profile');
