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

//Root route
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Main routes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');


//Budget routes
Route::get('/budget', 'BudgettingController@create')->name('budget.create');

Route::post('/budget', 'BudgettingController@store')->name('budget.store');


//Wouldyou routes
Route::get('/wouldyou', 'WouldyouController@create')->name('wouldyou.create');

Route::post('/wouldyou', 'WouldyouController@store')->name('wouldyou.store');


//Dontforget routes
Route::get('/dontforget', 'DontforgetController@create')->name('dontforget.create');

Route::post('/dontforget', 'DontforgetController@store')->name('dontforget.store');


//Category routes
Route::get('/category', 'CategoryController@create')->name('category.create');

Route::post('/category', 'CategoryController@store')->name('category.store');

Route::get('/category/budget', 'CategoryController@budget')->name('category.budget');

Route::post('/category/budget', 'CategoryController@budgetStore')->name('category.budget.store');


//Spending routes
Route::get('/spending', 'SpendingController@create')->name('spending.create');

Route::post('/spending', 'SpendingController@store')->name('spending.store');