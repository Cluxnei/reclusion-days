<?php

use App\Http\Middleware\SetLanguage;
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

Route::get('/language/{language}', 'LanguageController@change')->name('language');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/obras/{WorkOfArt}', 'WorkOfArtController@show')->name('work-of-art');
Route::get('/download/{lang}', 'HomeController@download')->name('download');
Auth::routes();
Route::prefix('admin')->name('admin.')->middleware('auth')->group(static function () {
    Route::get('/', 'AdminController@index')->name('home');
    Route::resource('works-of-arts', 'WorkOfArtController')->only(['store']);
});
