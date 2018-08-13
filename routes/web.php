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



/**
 *  Navigation
 */
Route::get('/','NavigationController@home')->name('home');
Route::get('/new-members', 'NavigationController@new_members')->name('new-members');
Route::get('/special-members', 'NavigationController@special_members')->name('special-members');
Route::get('/women-mesiar', 'NavigationController@women_mesiar')->name('women-mesiar');
Route::get('/women-multi', 'NavigationController@women_multi')->name('women-multi');
Route::get('/profile/{id}', 'NavigationController@profile');
Route::get('/profile-settings/{id}', 'NavigationController@profile_settings');
Route::get('/login', 'NavigationController@login')->name('login');
Route::get('/new-account', 'NavigationController@new_account')->name('new-account');
Route::get('/about', 'NavigationController@about')->name('about');
Route::get('/contact', 'NavigationController@contact')->name('contact');
Route::get('/faq', 'NavigationController@faq')->name('faq');
Route::get('/terms', 'NavigationController@terms')->name('terms');
Route::get('/policy', 'NavigationController@policy')->name('policy');
Route::get('/qasam', 'NavigationController@qasam')->name('qasam');

/**
 *  End navigation
 */

Auth::routes();

