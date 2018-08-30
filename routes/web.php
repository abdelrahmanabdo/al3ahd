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
Auth::routes();



/**
 *  Navigation
 */
Route::get('/','NavigationController@home')->name('home');
Route::get('/new-members', 'NavigationController@new_members')->name('new-members');
Route::get('/special-members', 'NavigationController@special_members')->name('special-members');
Route::get('/women-mesiar', 'NavigationController@women_mesiar')->name('women-mesiar');
Route::get('/women-multi', 'NavigationController@women_multi')->name('women-multi');
Route::get('/profile/{id}', 'NavigationController@profile')->name('profile');
Route::get('/profile-settings/{id}', 'NavigationController@profile_settings')->name('profile-settings');
Route::post('/profile-settings/updateSocial/{id}','ProfileController@update_socail_links')->name('updateProfileSocial');
Route::post('/profile-settings/update/{id}','ProfileController@update_profile_data')->name('updateProfileData');
Route::post('/profile-settings/update/avatar/{id}','ProfileController@update_profile_avatar')->name('updateUserAvatar');
Route::post('/block','BlocksController@block_user')->name('block');
Route::get('/blockList','BlocksController@user_block_list')->name('blockList');

Route::get('/change_password','NavigationController@changePassword')->name('change_password');


Route::post('/changePassword','ProfileController@changePassword')->name('changePassword');
Route::post('/search','HomeController@search')->name('search');


Route::get('/login', 'NavigationController@login')->name('login');
Route::get('/new-account', 'NavigationController@new_account')->name('new-account');
Route::get('/about', 'NavigationController@about')->name('about');
Route::get('/contact', 'NavigationController@contact')->name('contact');
Route::get('/faq', 'NavigationController@faq')->name('faq');
Route::get('/terms', 'NavigationController@terms')->name('terms');
Route::get('/policy', 'NavigationController@policy')->name('policy');
Route::get('/qasam', 'NavigationController@qasam')->name('qasam');
Route::post('/removeAccount','ProfileController@removeAccount')->name('removeAccount');
Route::get('/removeAccount','NavigationController@remove_account')->name('removeAccount');


Route::get('/inbox/received/{id}','MessagesController@user_received_messages')->name('receivedInbox');
Route::get('/inbox/sent/{id}','MessagesController@user_sent_messages')->name('sentInbox');
Route::post('/send/{id}', 'MessagesController@send_message')->name('sendMessage');
Route::get('/inbox/{id}','MessagesController@single_message')->name('viewMessage');
Route::group(['prefix' => 'admin/963124/' , 'middleware'=>['web']], function () {
    Route::get('dashboard','AdminController@dashboard')->name('dashboard')->middleware('auth');
    Route::get('all-members','AdminController@all_members')->name('allMembers');
    Route::get('blocked-members','AdminController@blocked_members')->name('blockedMembers');
    Route::get('special-members','AdminController@special_members')->name('specialMembers');
    Route::get('generalSettings' ,'AdminController@general_settings')->name('generalSettings');
    Route::post('generalSettings','AdminController@update_settings')->name('updateSettings');
    Route::get('user/{id}','AdminController@get_user_data')->name('userDetails');
    Route::get('blockUser/{id}','AdminController@block_user')->name('blockUser');
    Route::get('unblockUser/{id}','AdminController@unblock_user')->name('unblockUser');
    Route::get('subecribeUser/{id}','AdminController@subscribe_user')->name('subscribeUser');
    Route::get('unsubecribeUser/{id}','AdminController@unsubscribe_user')->name('unsubscribeUser');


});
/**
 *  End navigation
 */

Route::post('/send', 'EmailController@send')->name('sendMail');



