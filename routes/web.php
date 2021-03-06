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

Route::get('/', 'HomeController@index')->name('home.index');

Route::resource('blog', 'PostsController');
Route::get('blog/categorie/{slug}', 'PostsController@category')->name('blog.category');

// Admin Dashboard
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.index');
    Route::resource('posts', 'Admin\PostsController');
    Route::resource('categories', 'Admin\CategoriesController');
});