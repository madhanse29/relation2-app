<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;

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

// Route::get('/capital', function () {
//     $capital = Country::find(2)->capital;
//     return $capital;
// });


Route::get('/villages', function () {
    $villages = Country::find(1)->villages;
    return $villages;
});
