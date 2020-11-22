<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Redirector;

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
    return redirect('/allProduct');
});

/* Start Product */

  Route::get('/allProduct','App\Http\Controllers\ProductController@allProduct');
  Route::get('/product/show/{slug}','App\Http\Controllers\ProductController@show');

  Route::get('/search/product','App\Http\Controllers\ProductController@search');
 
/* Start Product */

Route::group(['prefix'=>'admin'], function(){
  Route::get('/', 'App\Http\Controllers\AdminController@index');

  /* Start Product */

  Route::get('/create/product', 'App\Http\Controllers\ProductController@index');
  Route::post('/create/product', 'App\Http\Controllers\ProductController@create');

  Route::get('/product/show', 'App\Http\Controllers\ProductController@showProduct')->name('admin.product.show');

  Route::get('/product/edit/', 'App\Http\Controllers\ProductController@getProduct');
  Route::post('/product/edit/', 'App\Http\Controllers\ProductController@editProduct');

  /* Start Delete Product */

  Route::post('/product/delete', 'App\Http\Controllers\ProductController@deleteProduct');
  Route::get('/product/delete', 'App\Http\Controllers\ProductController@deleteProduct');
  
  /* End Delete Product */

  /* Start Category Product */
  Route::get('/create/category', 'App\Http\Controllers\CategoryController@index');
  Route::post('/create/category', 'App\Http\Controllers\CategoryController@create');
  Route::get('/show/category', 'App\Http\Controllers\CategoryController@show')->name('admin.show.category');
  Route::get('/edit/category', 'App\Http\Controllers\CategoryController@getCategory');
  Route::post('/edit/category', 'App\Http\Controllers\CategoryController@edit');
  Route::get('/delete/category', 'App\Http\Controllers\CategoryController@delete');
  /* End Category Product */


  /* Start Product */
});

 /* Start Brand */
 Route::group(['prefix'=>'category'], function(){


  
  Route::get('/search/{id}', 'App\Http\Controllers\CategoryController@search');
  

});
 /* End Brand */


 /* Start Brand */
Route::group(['prefix'=>'admin'], function(){


  
  Route::get('/create/brand', 'App\Http\Controllers\BrandController@index');
  Route::post('/create/brand', 'App\Http\Controllers\BrandController@create');
  Route::get('/show/brand', 'App\Http\Controllers\BrandController@show')->name('admin.show.brand');
  Route::get('/edit/brand', 'App\Http\Controllers\BrandController@getBrand');
  Route::post('/edit/brand', 'App\Http\Controllers\BrandController@edit');
  Route::get('/delete/brand', 'App\Http\Controllers\BrandController@delete');
  

});
 /* End Brand */

 Route::group(['prefix'=>'division'], function(){

  Route::get('/create', 'App\Http\Controllers\DivisionController@index');
  Route::post('/create', 'App\Http\Controllers\DivisionController@create');

  Route::get('/show', 'App\Http\Controllers\DivisionController@show');

  Route::get('/edit', 'App\Http\Controllers\DivisionController@getDivision');
  Route::post('/edit', 'App\Http\Controllers\DivisionController@edit');
  Route::get('/delete', 'App\Http\Controllers\DivisionController@delete');

});

Route::group(['prefix'=>'district'], function(){

  Route::get('/create', 'App\Http\Controllers\DistrictController@index');
  Route::post('/create', 'App\Http\Controllers\DistrictController@create');

  Route::get('/show', 'App\Http\Controllers\DistrictController@show');

  Route::get('/edit', 'App\Http\Controllers\DistrictController@getDistrict');
  Route::post('/edit', 'App\Http\Controllers\DistrictController@edit');
  Route::get('/delete', 'App\Http\Controllers\DistrictController@delete');
  
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return view('customer');
})->name('dashboard');
