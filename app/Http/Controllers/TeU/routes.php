<?php

Route::group(['prefix' => 'teu'], function()
{
    Route::get('/ping', [
        'as'=>'teu.ping',
        'uses'=>'TeU\TeUController@ping'
    ]);
    Route::get('/tips',[
        'as'=>'teu.gettips',
        'uses'=>'TeU\TeUController@tips'
    ]);
});

