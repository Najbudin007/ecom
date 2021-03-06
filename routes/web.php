<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontProductListController@index');
Route::get('product/{id}', 'FrontProductListController@show');


// Route::get('/index/test',function(){
//     return view('test');
// });

Auth::routes();

Route::get('subcategories/{$id}','productController@loadSubCategories');

Route::get('/home', 'HomeController@index')->name('home');

Route:Route::group(['prefix' => 'auth','middleware'=>['auth','isAdmin']], function () {


Route::get('/dashboard',function(){
    return view('admin.dashboard');
});
    Route::resource('category', 'CategoryController');
    Route::resource('Subcategory', 'SubcategoryController');
    Route::resource('product', 'productController');

});

