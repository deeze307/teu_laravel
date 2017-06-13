<?php

Route::group(['prefix' => 'teu'], function(){
    Route::get('/ping', [
        'as'=>'teu.ping',
        'uses'=>'TeU\initController@ping'
    ]);
});

