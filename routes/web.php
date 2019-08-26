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

Route::get('/services','ServiceController@index')->name('services.index');
Route::get('/services/create','ServiceController@create')->name('services.create');
Route::post('/services/store','ServiceController@store')->name('services.store');
Route::patch('/services/{service}','ServiceController@update')->name('services.update');
Route::get('/services/{service}','ServiceController@show')->name('services.show');
Route::delete('/services/{service}','ServiceController@destroy')->name('services.destroy');
Route::patch('/status/{service}','ServiceController@servicestatus')->name('status.service');


// packages

Route::get('/package','DashboardController@package')->name('addpackage');
Route::get('/packageshow','DashboardController@showpackage')->name('showpackage');
Route::get('/packagedetail','DashboardController@packagedetail')->name('packagedetail');



// gallery

// Route::get('/imageview','DashboardController@imageview')->name('imageview');
Route::get('/images','GalleryController@index')->name('images.index');
Route::get('images/create','GalleryController@create')->name('images.create');
Route::get('gallery/create/{id?}','GalleryController@gallerycreate')->name('gallery.create');
Route::post('images/store','GalleryController@store')->name('images.store');
Route::get('images/{image}','GalleryController@show')->name('images.show');
Route::delete('/images/{image}','GalleryController@destroy')->name('images.destroy');
Route::post('imagealbums','GalleryController@store1')->name('imagealbums.store1');
Route::delete('imagealbums/{imagealbum}','GalleryController@destroy1')->name('imagealbums.destroy1');


// carousel


Route::get('/carousels','CarouselController@index')->name('carousels.index');
Route::get('/carousels/create','CarouselController@create')->name('carousels.create');
Route::post('/carousels/store','CarouselController@store')->name('carousels.store');
Route::get('/carousels/{carousel}','CarouselController@show')->name('carousels.show');
Route::delete('/carousels/{carousel}','CarouselController@destroy')->name('carousels.destroy');
Route::patch('/status/{stat}','CarouselController@status')->name('status.stat');


// booking

Route::get('/bookinginbox','DashboardController@bookinginbox')->name('bookinginbox');
Route::get('/bookingview','DashboardController@bookingview')->name('bookingview');

// review

Route::get('/reviews','ReviewController@index')->name('reviews.index');
Route::get('/reviews/create','ReviewController@create')->name('reviews.create');
Route::get('/reviews/{review}','ReviewController@show')->name('reviews.show');
Route::post('/reviews/store','ReviewController@store')->name('reviews.store');
Route::patch('/reviews/{review}','ReviewController@update')->name('reviews.update');
Route::delete('/reviews/{review}','ReviewController@destroy')->name('reviews.destroy');

// about
Route::get('/about','AboutController@about')->name('about');
Route::get('/aboutshow','AboutController@aboutshow')->name('showabout');
Route::get('/aboutdetail/{id}','AboutController@aboutdetail')->name('aboutdetail');
Route::post('/aboutstore','AboutController@aboutstore')->name('aboutstore');
Route::post('/aboutupdate/{id}','AboutController@aboutupdate')->name('aboutupdate');
Route::delete('abouts/{about}','AboutController@destroy')->name('abouts.destroy');


// contact
Route::get('/contactinbox','DashboardController@contactinbox')->name('contactinbox');
Route::get('/contactview','DashboardController@contactview')->name('contactview');
Route::get('/contactreply','DashboardController@contactreply')->name('contactreply');
Route::post('contacts','ContactController@store')->name('contacts.store');
Route::get('contacts/create','ContactController@create')->name('contacts.create');

// seo
Route::get('/serviceseo','DashboardController@serviceseo')->name('serviceseo');
Route::get('/packageseo','DashboardController@packageseo')->name('packageseo');
Route::get('/aboutseo','DashboardController@aboutseo')->name('aboutseo');
Route::get('/viewseo','DashboardController@viewseo')->name('viewseo');


