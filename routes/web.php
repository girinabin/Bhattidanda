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


// Dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard');


// services

Route::get('/service','DashboardController@service')->name('addservice');
Route::get('/serviceshow','DashboardController@showservice')->name('showservice');
Route::get('/servicedetail','DashboardController@servicedetail')->name('servicedetail');

// packages

Route::get('/package','DashboardController@package')->name('addpackage');
Route::get('/packageshow','DashboardController@showpackage')->name('showpackage');
Route::get('/packagedetail','DashboardController@packagedetail')->name('packagedetail');



// gallery

Route::get('/gallery','DashboardController@gallery')->name('addimage');
Route::get('/galleryshow','DashboardController@showgallery')->name('showimage');
Route::get('/imageview','DashboardController@imageview')->name('imageview');

// carousel

Route::get('/carousel','DashboardController@carousel')->name('addcarousel');
Route::get('/carouselshow','DashboardController@carouselshow')->name('showcarousel');
Route::get('/carouselview','DashboardController@carouselview')->name('carouselview');



// booking

Route::get('/bookinginbox','DashboardController@bookinginbox')->name('bookinginbox');
Route::get('/bookingview','DashboardController@bookingview')->name('bookingview');

// review

Route::get('/review','DashboardController@review')->name('review');
Route::get('/reviewshow','DashboardController@reviewshow')->name('showreview');
Route::get('/reviewdetail','DashboardController@reviewdetail')->name('reviewdetail');

// about
Route::get('/about','AboutController@about')->name('about');
Route::get('/aboutshow','AboutController@aboutshow')->name('showabout');
Route::get('/aboutdetail','AboutController@aboutdetail')->name('aboutdetail');
Route::post('/aboutstore','AboutController@aboutstore')->name('aboutstore');
Route::post('/aboutupdate/{id}','AboutController@aboutupdate')->name('aboutupdate');


// contact
Route::get('/contactinbox','DashboardController@contactinbox')->name('contactinbox');
Route::get('/contactview','DashboardController@contactview')->name('contactview');
Route::get('/contactreply','DashboardController@contactreply')->name('contactreply');

// seo
Route::get('/serviceseo','DashboardController@serviceseo')->name('serviceseo');
Route::get('/packageseo','DashboardController@packageseo')->name('packageseo');
Route::get('/aboutseo','DashboardController@aboutseo')->name('aboutseo');
Route::get('/viewseo','DashboardController@viewseo')->name('viewseo');


