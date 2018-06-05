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

Route::group(['middleware' => 'teacher' ], function(){

});

Route::group(['middleware' => 'admin' ], function(){

});

Route::group(['middleware' => 'auth'], function(){

Route::get('/profile/{slug}', [
  'uses' => 'ProfilesController@index',
  'as' => 'profile'
]);

// Route::get('/payment/{slug}', [
//   'uses' => 'PaymentsController@index',
//   'as' => 'payment'
// ]);
// Route::get('/economic/{slug}/new', [
//   'uses' => 'EconomicsController@create',
//   'as' => 'economic.new'
// ]);

// Route::get('/trainer', [
//   'uses' => 'TrainerController@index',
//   'as' => 'trainer'
// ]);
// Route::post('/trainer/choose', [
//   'uses' => 'TrainerController@choose',
//   'as' => 'trainer.choose'
// ]);
Route::get('/profile/edit/profile', [
  'uses' => 'ProfilesController@edit',
  'as' => 'profile.edit'
]);
// Route::get('/program/edit/program', [
//   'uses' => 'ProgramsController@edit',
//   'as' => 'program.edit'
// ]);
Route::post('/profile/update/profile', [
  'uses' => 'ProfilesController@update',
  'as' => 'profile.update'
]);
// Route::post('/program/update/program', [
//   'uses' => 'ProgramsController@update',
//   'as' => 'program.update'
// ]);
// Route::get('/trainer/dashboard', [
//  'uses' => 'TrainerController@dash',
//  'as' => 'dash'
//
// ]);
// Route::get('/trainer/book', [
//  'uses' => 'TrainerController@book',
//  'as' => 'book'
//
// ]);
// Route::post('/trainer/booked', [
//  'uses' => 'TrainerController@booked',
//  'as' => 'booked'
//
// ]);




// Route::get('/get_unread', function() {
//     return Auth::user()->unreadNotifications()->get();
// });

// Route::get('/notifications', [
//  'uses' => 'HomeController@notifications',
//  'as' => 'notifications'
//
// ]);
// Route::post('/payments', [
//  'uses' => 'PaymentsController@payment',
//  'as' => 'payments'
//
// ]);
// Route::post('/payments/force', [
//  'uses' => 'PaymentsController@forcepay',
//  'as' => 'payments.force'
//
// ]);
// Route::post('/trial', [
//  'uses' => 'PaymentsController@trial',
//  'as' => 'trial'
//
// ]);
// Route::get('/payments/forced', [
//  'uses' => 'PaymentsController@forced',
//  'as' => 'payments.forced'
//
// ]);
// Route::get('/admin','AdminController@index')->name('admin');
});
