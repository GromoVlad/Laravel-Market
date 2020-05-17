<?php

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::middleware(['set_locale'])->group(function () {
    Route::get('/', 'MainController@index')->name('index');
    Route::get('/reset', 'ResetController@reset')->name('reset'); // убрать под миддлвейр админа, по окончанию
    Route::get('/locale/{locale}', 'MainController@changeLocale')->name('locale');
    Route::get('/currency/{currency}', 'MainController@changeCurrency')->name('currency');
    Route::get('/categories', 'MainController@categories')->name('categories');
    Route::post('/subscription/{skus}', 'MainController@subscribe')->name('subscription');
    Route::post('/basket/add/{skus}', 'BasketController@basketAdd')->name('basket-add');
    Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

    Route::group(['middleware' => 'basketIsNotEmpty'], function () {
        Route::get('/basket', 'BasketController@basket')->name('basket');
        Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
        Route::post('/basket/remove/{skus}', 'BasketController@basketRemove')->name('basket-remove');
        Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');
    });

    Route::group(['middleware' => ['auth', 'isAdmin']], function () {
        Route::get('admin/orders', 'Admin\OrderController@index')->name('admin-order');
        Route::get('admin/orders/{order}', 'Admin\OrderController@show')->name('admin-order-show');
        Route::resource('admin/categories', 'Admin\CategoryController');
        Route::resource('admin/products', 'Admin\ProductController');
        Route::resource('admin/products/{product}/skus', 'Admin\SkuController');
        Route::resource('admin/properties', 'Admin\PropertyController');
        Route::resource('admin/properties/{property}/property_option', 'Admin\PropertyOptionController');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('person/orders', 'Person\OrderController@index')->name('person-order');
        Route::get('person/orders/{order}', 'Person\OrderController@show')->name('person-order-show');
    });

    Route::get('/{category}', 'MainController@category')->name('category');
    Route::get('/{category}/{product}/{skus}', 'MainController@sku')->name('sku');
});
