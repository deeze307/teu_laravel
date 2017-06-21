<?php

//Route::group(['prefix' => 'teu'], function()
//{
    Route::get('/manage','TeU\TeUController@manage');
    Route::get('/ping', [
        'as'=>'teu.ping',
        'uses'=>'TeU\TeUController@ping'
    ]);
    Route::get('/tips',[
        'as'=>'teu.gettips',
        'uses'=>'TeU\TeUController@tips'
    ]);
    Route::get('/enabledjobs',[
        'as'=>'teu.enabledjobs',
        'uses'=>'TeU\TeUController@enabledJobs'
    ]);
//});

