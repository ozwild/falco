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

Route::get('lang/{locale}','LocalizationController@index')->name('localization');

Route::resource('accounts', 'AccountController')
    ->names([
        'create' => 'accounts.create',
        'show' => 'accounts.show',
        'edit' => 'accounts.edit',
        'update' => 'accounts.update',
        'store' => 'accounts.store',
        'delete' => 'accounts.delete'
    ]);

Route::resource('users', 'UserController')
    ->names([
        'create' => 'users.create',
        'show' => 'users.show',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'store' => 'users.store',
        'delete' => 'users.delete'
    ]);

Route::resource('listings', 'ListingController')
    ->names([
        'create' => 'listings.create',
        'show' => 'listings.show',
        'edit' => 'listings.edit',
        'update' => 'listings.update',
        'store' => 'listings.store',
        'delete' => 'listings.delete'
    ]);
