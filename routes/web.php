<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/add', function () {
    return view('add');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/list', 'ProjectsController@getProjects')->name('project.list');

Route::get('/edit/{project}', 'ProjectsController@show')->name('project.show');
Route::post('/edit/{project}', 'ProjectsController@update')->name('project.edit');

Route::post('/add', 'ProjectsController@store')->name('project.add');

Route::get('/delete/{project}', 'ProjectsController@delete')->name('project.delete');