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

Route::get('/', 'MainController@index')->name('main.index');
Route::get('/turnikety', 'MainController@turnikety')->name('main.turnikety');
Route::get('/shlagbaumy', 'MainController@shlagbaumy')->name('main.shlagbaumy');
Route::get('/skud', 'MainController@skud')->name('main.skud');
Route::get('/sistemy-videonablyudeniya', 'MainController@video')->name('main.video');
Route::get("katalog/{typeProduct?}", 'MainController@katalog')->name('main.katalog');
Route::post("katalog/{typeProduct?}", 'MainController@katalog')->name('main.katalog_post');
Route::post('/action', 'MainController@action')->name('main.action');
Route::post('/action-ind', 'MainController@actionInd')->name('main.action-ind');

// Поисковые запросы
Route::post('/search', 'ProductController@search')->name('product.action');

Route::get('/admin', 'UserController@index')->name('admin.index');

// Админка
// Route::get('/admin', 'UserController@index')->name('admin.index');
// Route::get('/admin/reg', 'UserController@regForm')->name('admin.reg-form');
// Route::post('/admin/reg', 'UserController@reg')->name('admin.reg');
// Route::post('/admin/auth', 'UserController@auth')->name('admin.auth');
// Route::get('/admin/logout', 'UserController@logout')->name('admin.logout');

// Добавление товаров и работа с товаром в админке
// Route::get("/admin/dobavlenie-tovara/{nameTovar}", 'ProductController@formaDobavlenie')->name('product.dobavlenie');
// Route::post('/admin/product/save', 'ProductController@save')->name('product.save');
// Route::get("/admin/product/list", 'ProductController@list')->name('product.list');
// Route::get("/admin/product/remove/{id}", 'ProductController@remove')->name('product.remove');
// Route::get("/admin/product/updata/{id}", 'ProductController@updataForm')->name('product.updata-form');
// Route::post("/admin/product/updata", 'ProductController@updata')->name('product.updata');

// Не авторизированные
Route::group(['middleware' => 'guest'], function () {
    
    Route::get('/admin/reg', 'UserController@regForm')->name('admin.reg-form');
    Route::post('/admin/reg', 'UserController@reg')->name('admin.reg');
    Route::post('/admin/auth', 'UserController@auth')->name('admin.auth');
});


// Авторизированные пользователи
Route::group(['middleware' => 'auth'], function () {
    // Выход
    Route::get('/admin/logout', 'UserController@logout')->name('admin.logout');

    // Добавление товаров и работа с товаром в админке
    Route::get("/admin/dobavlenie-tovara/{nameTovar}", 'ProductController@formaDobavlenie')->name('product.dobavlenie');
    Route::post('/admin/product/save', 'ProductController@save')->name('product.save');
    Route::get("/admin/product/list", 'ProductController@list')->name('product.list');
    Route::get("/admin/product/remove/{id}", 'ProductController@remove')->name('product.remove');
    Route::get("/admin/product/updata/{id}", 'ProductController@updataForm')->name('product.updata-form');
    Route::post("/admin/product/updata", 'ProductController@updata')->name('product.updata');
});
