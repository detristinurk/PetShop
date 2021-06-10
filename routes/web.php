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

Route::get('/beranda', 'FrontController@index');

Route::get('/list','FrontController@list');

  Route::get('logout','FrontController@logout');
  Route::post('beli/{id}','FrontController@beli');

Route::group(['prefix'=>'user','middleware' => ['auth', 'role:member']], function (){
    Route::get('/myproduct','FrontController@mybook');
  });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout','UserController@logout');

Route::group(['prefix'=>'admin'],function(){
    //manajemen produk
    Route::group(['prefix'=>'produk'], function(){
        Route::get('/','ProdukController@index');
        Route::get('create','ProdukController@create');
        Route::post('/','ProdukController@store');
        Route::get('{id}/edit','ProdukController@edit');
        Route::post('{id}/update','ProdukController@update');
        Route::delete('{id}','ProdukController@destroy');
      });
    

    // manajemen user
    Route::group(['prefix'=>'user'], function(){
        Route::get('/','UserController@index');
        Route::get('create','UserController@create');
        Route::post('/','UserController@store');
        Route::get('{id}/edit','UserController@edit');
        Route::post('{id}/update','UserController@update');
        Route::delete('{id}','UserController@destroy');
      });


    //manajamen transaksi
    Route::group(['prefix'=>'transaksi'], function(){
        Route::get('/','TransaksiController@index');
        Route::get('create','TransaksiController@create');
        Route::post('/','TransaksiController@store');
        Route::get('{id}/edit','TransaksiController@edit');
        Route::post('{id}/update','TransaksiController@update');
        Route::delete('{id}','TransaksiController@destroy');
      });

    //manajemen supplier
    Route::group(['prefix'=>'supplier'], function(){
        Route::get('/','SupplierController@index');
        Route::get('create','SupplierController@create');
        Route::post('/','SupplierController@store');
        Route::get('{id}/edit','SupplierController@edit');
        Route::post('{id}/update','SupplierController@update');
        Route::delete('{id}','SupplierController@destroy');
      });

    //manajemen kategori
    Route::group(['prefix'=>'kategori'], function(){
        Route::get('/','KategoriController@index');
        Route::get('create','KategoriController@create');
        Route::post('/','KategoriController@store');
        Route::get('{id}/edit','KategoriController@edit');
        Route::post('{id}/update','KategoriController@update');
        Route::delete('{id}','KategoriController@destroy');
      });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



    
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
