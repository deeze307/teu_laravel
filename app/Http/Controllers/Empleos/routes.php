<?php
Route::group([
    'prefix'=>'jobs',
    'namespace'=>'Empleos'],function(){

    Route::get('/enabledjobs',[
        'as'=>'teu.jobs.enabledjobs',
        'uses'=>'EmpleosController@enabledJobs'
    ]);
    Route::get('/categories/view','EmpleosController@viewCategories');

    Route::get('/categories','EmpleosController@jobsCategrories');
    Route::get('/categories/create/{nombrecategoria}','CRUDEmpleosController@createJobCategory');
});



