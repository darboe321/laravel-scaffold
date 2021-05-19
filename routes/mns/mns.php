<?php
Route::middleware('auth')->group(function () {
    Route::group(['namespace' => 'Mns'], function() {
        // views
        Route::group(['prefix' => 'mns'], function() {
            Route::view('/', 'mns.index')->middleware('permission:read-mns');
            Route::view('/create', 'mns.create')->middleware('permission:create-mns');
            Route::view('/{mns}/edit', 'mns.edit')->middleware('permission:update-mns');
        });

        // api
        Route::group(['prefix' => 'api/mns'], function() {
            Route::get('/getUserRoles/{mns}', 'MnsController@getUserRoles');
            Route::get('/count', 'MnsController@count');
            Route::post('/filter', 'MnsController@filter')->middleware('permission:read-mns');

            Route::get('/{mns}', 'MnsController@show')->middleware('permission:read-mns');
            Route::post('/store', 'MnsController@store')->middleware('permission:create-mns');
            Route::put('/update/{mns}', 'MnsController@update')->middleware('permission:update-mns');
            Route::delete('/{mns}', 'MnsController@destroy')->middleware('permission:delete-mns');
        });
    });
});