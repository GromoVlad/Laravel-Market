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

Auth::routes([
    'reset'   => false,
    'confirm' => false,
    'verify'  => false,
]);

Route::get('/', 'MainController@index')->name('index');

Route::get('/categories', 'MainController@categories')->name('categories');

Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');

Route::group(['middleware' => ['basketIsNotEmpty']], function () {
    Route::get('/basket', 'BasketController@basket')->name('basket');
    Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
    Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
    Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');
});

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::get('admin/orders', 'Admin\OrderController@index')->name('admin-order');
    Route::get('admin/orders/{order}', 'Admin\OrderController@show')->name('admin-order-show');
    Route::resource('admin/categories', 'Admin\CategoryController');
    Route::resource('admin/products', 'Admin\ProductController');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('person/orders', 'Person\OrderController@index')->name('person-order');
    Route::get('person/orders/{order}', 'Person\OrderController@show')->name('person-order-show');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product}', 'MainController@product')->name('product');