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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');



Route::get('/budget', 'BudgettingController@create')->name('budget.create');

Route::post('/budget', 'BudgettingController@store')->name('budget.store');



Route::get('/category', 'CategoryController@create')->name('category.create');

Route::post('/category', 'CategoryController@store')->name('category.store');

Route::get('/category/budget', 'CategoryController@budget')->name('category.budget');

Route::post('/category/budget', 'CategoryController@budgetStore')->name('category.budget.store');



Route::get('/spending', 'SpendingController@create')->name('spending.create');

Route::post('/spending', 'SpendingController@store')->name('spending.store');