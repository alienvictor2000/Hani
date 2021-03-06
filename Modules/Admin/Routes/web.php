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

Route::prefix('authenticate')->group(function(){
    Route::get('/','AdminAuthController@getLogin')->name('admin.login');
    Route::post('/','AdminAuthController@postLogin');

    Route::post('/register','AdminAuthController@postRegister')->name('admin.register');
});

Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function() {
    // /admin
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix'=>'category'], function(){
        Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create','AdminCategoryController@store')->name('admin.get.store.category');
        Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post ('/update/{id}','AdminCategoryController@update');

        Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.get.action.category');

    });

    Route::group(['prefix'=>'product'], function(){
        Route::get('/','AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create','AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.get.edit.product');
        Route::post ('/update/{id}','AdminProductController@update');

        Route::get('/{action}/{id}','AdminProductController@action')->name('admin.get.action.product');

    });

    Route::group(['prefix'=>'article'], function(){
        Route::get('/','AdminArticleController@index')->name('admin.get.list.article');
        Route::get('/create','AdminArticleController@create')->name('admin.get.create.article');
        Route::post('/create','AdminArticleController@store');
        Route::get('/update/{id}','AdminArticleController@edit')->name('admin.get.edit.article');
        Route::post ('/update/{id}','AdminArticleController@update');

        Route::get('/{action}/{id}','AdminArticleController@action')->name('admin.get.action.article');

    });

    Route::group(['prefix'=>'transaction'], function(){
        Route::get('/','AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/view/{id}','AdminTransactionController@viewOrder')->name('admin.get.view.order');
        Route::get('/action/{id}','AdminTransactionController@actionTransaction')->name('admin.get.active.transaction');
        Route::get('/{id}','AdminTransactionController@deleteTransaction')->name('admin.get.action.transaction');

    });

    Route::group(['prefix'=>'delivery'], function(){
        Route::get('/','AdminDeliveryController@index')->name('admin.get.list.delivery');
        Route::get('/action/{id}','AdminDeliveryController@actionTransaction')->name('admin.get.active.delivery');

    });

    Route::group(['prefix'=>'user'], function(){
        Route::get('/','AdminUserController@index')->name('admin.get.list.user');
        Route::get('/update/{id}','AdminUserController@edit')->name('admin.get.edit.user');
        Route::post('/update/{id}','AdminUserController@update');
        Route::get('/{id}','AdminUserController@deleteUser')->name('admin.get.action.user');

    });

    Route::group(['prefix'=>'coupon'], function(){
        Route::get('/','AdminCouponController@index')->name('admin.get.list.coupon');
        Route::get('/create','AdminCouponController@create')->name('admin.get.create.coupon');
        Route::post('/create','AdminCouponController@store');
        Route::get('/update/{id}','AdminCouponController@edit')->name('admin.get.edit.coupon');
        Route::post ('/update/{id}','AdminCouponController@update');

        Route::get('/{action}/{id}','AdminCouponController@action')->name('admin.get.action.coupon');
    });

    Route::group(['prefix'=>'comment'], function(){
        Route::get('/','AdminCommentController@index')->name('admin.get.list.comment');

        Route::get('/{action}/{id}','AdminCommentController@action')->name('admin.get.action.comment');
    });
});
