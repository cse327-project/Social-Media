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


    /**
     * Friend Request
     */
    Route::post('/unfriend/{user_id}/{friend_of}', 'RequestController@unfriend')->name('unfriend');
    Route::post('/send-friend-request/{user_id}', 'RequestController@send_request')->name('send-request');
    Route::post('/accept-request/{sender_id}', 'RequestController@accept_request')->name('accept_request');
    Route::post('/decline-request/{sender_id}', 'RequestController@decline_request')->name('decline_request');
    Route::get('/requests', 'RequestController@request_list')->name('request-list');


    /**
     * Follow
     */
    Route::post('/toggle_follow/{follower_of}', 'FollowController@toggle_follow')->name('toggle_follow');
});


Route::get('/user/{username}', 'ProfileController@get_profile')->name('user.profile');
