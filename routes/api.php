<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => 'api'], function() {
    
    // Projects route
    Route::get('projects', 'ProjectsController@index');
    Route::post('projects', 'ProjectsController@store');
    Route::get('projects/{id}', 'ProjectsController@show');
    Route::put('projects/{project}', 'ProjectsController@markAsCompleted');

    // Tasks route
    Route::post('tasks', 'TasksController@store');
    Route::put('tasks/{task}', 'TasksController@markAsCompleted');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
