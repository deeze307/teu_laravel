<?php
Route::group([
    'prefix'=>'jobs',
    'namespace'=>'Empleos'],function(){

    // Empleos

    Route::get('/',[
        'as'=>'teu.jobs',
        'uses'=>'EmpleosController@viewJobs'
    ]);

    Route::get('/enabledjobs',[
        'as'=>'teu.jobs.enabledjobs',
        'uses'=>'EmpleosController@enabledJobs'
    ]);

    // Categorias

    Route::get('/categories','EmpleosController@viewCategories');//Vista de categorias

    Route::get('/categories/all','EmpleosController@jobsCategrories');
    Route::get('/categories/create/{nombrecategoria}','CRUDEmpleosController@createJobCategory');
    Route::get('/categories/update/{id}/{name}','CRUDEmpleosController@updateJobCategory');
    Route::get('/categories/delete/{id}','CRUDEmpleosController@deleteJobCategory');
    Route::get('/categories/prompt','EmpleosController@prompt');
});



