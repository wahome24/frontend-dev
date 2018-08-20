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

Route::get('/', 'PagesController@soco');

Route::get('/faqs', 'PagesController@faq');

Route::get('/samlis', 'PagesController@samlis');

Route::get('/samaritan', 'PagesController@samaritan');

Route::get('/logins','PagesController@login');

Route::resource('management','ManagementsController');

Route::resource('records', 'OrphansController');

Route::resource('visits','VisitsController');

Route::resource('emails','EmailsController');

Route::resource('sponsorship','HomesponsorsController');

Route::resource('services','ServicesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('filter','FlitersController@sort');

Route::post('/mpesa','MpesaController@payment');

Route::get('/orphanreports', 'OrphanreportsController@index');

Route::get('/homesponsor', 'SponsorsController@sponsors');

Route::get('/visitors', 'VisitorsController@visit');

Route::get('/providers', 'ProvidersController@service');






