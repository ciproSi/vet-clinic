<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owner;



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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/data-seeding', 'DataSeedingController@index');
Route::get('/owners', 'OwnerController@index');

Route::get('/owners/create', 'OwnerController@create');


=======
<<<<<<< HEAD
Route::get('/data-seeding', 'DataSeedingController@index');
=======
Route::get('/owner/{id}', 'OwnerController@show'); 
>>>>>>> Hilenn-Owner
>>>>>>> c3870c299538a366c6adbc12692d6aa2556cce10
