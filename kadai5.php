<?php

Route::group(['prefix' => 'user'], function() {
    Route::get('profile/creat', 'User\ProfileController@add');
});