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
use App\Models\Artikel;
use Illuminate\Http\Request;

Route::get('/', 'Indexcontroller@index');

Route::get('/blog', 'BlogController@index');

Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');

Route::get('/blog/{id}', 'BlogController@show')->name('link');

Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::put('/blog/{id}', 'BlogController@update');

Route::delete('/blog/{id}', 'BlogController@destroy');
