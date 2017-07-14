<?php
Route::group([
    'namespace'=>'TeU'],function(){


    Route::get('/manage','Management\ManageController@index');
    Route::get('/tips',[
        'as'=>'teu.gettips',
        'uses'=>'TeUController@tips'
    ]);
// Staff
    Route::get('/staff','TeUController@staff');


});



