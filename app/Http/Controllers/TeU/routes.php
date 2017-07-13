<?php


// Empleos
Route::group([
    'namespace'=>'TeU'],function(){


    Route::get('/manage','Management\ManageController@index');

    Route::get('/tips',[
        'as'=>'teu.gettips',
        'uses'=>'TeUController@tips'
    ]);
    Route::get('/enabledjobs',[
        'as'=>'teu.enabledjobs',
        'uses'=>'TeUController@enabledJobs'
    ]);

// Staff
    Route::get('/staff','TeUController@staff');

// Empleos
    Route::group([
        'prefix'=>'empleoscategorias'],function(){

        Route::get('/empleoscategorias','TeUController@empleosCategorias');
        Route::get('/empleoscategorias/create/{nombrecategoria}','CRUDTeUController@createEmpleosCategorias');
    });


});



