<?php

Route::get('/manage','TeU\TeUController@manage');

Route::get('/tips',[
    'as'=>'teu.gettips',
    'uses'=>'TeU\TeUController@tips'
]);
Route::get('/enabledjobs',[
    'as'=>'teu.enabledjobs',
    'uses'=>'TeU\TeUController@enabledJobs'
]);

// Staff
Route::get('/staff','TeU\TeUController@staff');

