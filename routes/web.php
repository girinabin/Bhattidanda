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

Route::get('/packages/create','PackageController@packagecreate')->name('packages.create');
Route::get('/packages/{package}-{slug}','PackageController@packageshow')->name('packages.show');
Route::get('/packages','PackageController@packageindex')->name('packages.index');
Route::post('/packages/store','PackageController@packagestore')->name('packages.store');
Route::post('/status/{package}','PackageController@packagestatus')->name('status.package');
Route::post('/packages/{package}','PackageController@destroy')->name('packages.destroy');
Route::post('booking/{book}-{slug}','PackageController@packagebook')->name('packages.book');





// gallery

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
Route::post('/status/{review}','ReviewController@checkstatus')->name('review.status');


// about
Route::get('/about','AboutController@about')->name('about');
Route::get('/aboutshow','AboutController@aboutshow')->name('showabout');
Route::get('/aboutdetail/{id}','AboutController@aboutdetail')->name('aboutdetail');
Route::post('/aboutstore','AboutController@aboutstore')->name('aboutstore');
Route::post('/aboutupdate/{id}','AboutController@aboutupdate')->name('aboutupdate');
Route::delete('abouts/{about}','AboutController@destroy')->name('abouts.destroy');


// contact
Route::get('/contactinbox/','ContactController@contactinbox')->name('contactinbox');
Route::get('/messagesent/','ContactController@contactsentitem')->name('messagesent');
Route::get('/contactview/{contact}','ContactController@contactview')->name('contactview');
Route::get('/messagesentview/{message}','ContactController@sentmsgview')->name('messagesentview');
Route::get('/contactreply/{contact}','ContactController@contactreply')->name('contactreply');
Route::post('contacts','ContactController@store')->name('contacts.store');
Route::post('/cont/{contact}','ContactController@mailreply')->name('contacts.mailreply');
Route::post('/contacts/{contact}','ContactController@destroy')->name('contacts.destroy');
Route::post('/msgreply/{message}','ContactController@sentdestroy')->name('message.destroy');
Route::get('contacts/create','ContactController@create')->name('contacts.create');

// seo
Route::get('/serviceseo','DashboardController@serviceseo')->name('serviceseo');
Route::get('/packageseo','DashboardController@packageseo')->name('packageseo');
Route::get('/aboutseo','DashboardController@aboutseo')->name('aboutseo');
Route::get('/viewseo','DashboardController@viewseo')->name('viewseo');


