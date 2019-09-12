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



// Frontend route

Route::get('/','FrontendController@home');

Route::get('home','FrontendController@home');


Route::get('know-about-phool-maya','FrontendController@knowabout');


Route::get('booking/{slug}','FrontendController@booking')->name('booking');


Route::get('contact','FrontendController@contact');


Route::get('gallery','FrontendController@gallery');


Route::get('room','FrontendController@room');


Route::get('package','FrontendController@package')->name('package');


Route::get('ourservice','FrontendController@ourservice');


Route::get('album1/{id}','FrontendController@album1')->name('album1');




Route::get('whyus','FrontendController@whyus')->name('whyus');



Route::get('guestreviews','FrontendController@guestreviews');












Auth::routes(); 	

Route::get('/homedashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){



// view composer


View::composer('cd-admin.header.header', function ($view) {
		$serv = DB::table('services')->count();
    	$pack = DB::table('packages')->count();
    	$gal =  DB::table('albums')->count();
    	$cal = DB::table('carousels')->count();
    	$seo = DB::table('seos')->count();
    	$boo = DB::table('bookings')->count();
        $reply = DB::table('booking_statuses')->count();
      	$book = $boo - $reply;
      	$coo = DB::table('contacts')->count();
        $creply = DB::table('reply_contacts')->count();
        $contact = $coo - $creply;
        $review = DB::table('reviews')->count();




      $view->with(['serv'=>$serv,'pack'=>$pack,'gal'=>$gal,'cal'=>$cal,'seo'=>$seo,'book'=>$book , 'contact'=>$contact,'review'=>$review] );
});

// Admin
Route::get('adminadd/','AdminController@adminadd')->name('admin.add');
Route::post('adminstore/','AdminController@adminstore')->name('admin.store');
Route::get('adminindex/','AdminController@adminindex')->name('admin.index');
Route::post('admindelete/{admin}','AdminController@admindestroy')->name('admin.destroy');

// Dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/logout','DashboardController@logout')->name('logout');

// Introduction

// Route::get('intro','DashboardController@introcreate')->name('intro.create');
Route::post('introstore','DashboardController@introstore')->name('intro.store');
Route::get('introview','DashboardController@introview')->name('intro.view');
Route::post('introupdate','DashboardController@introupdate')->name('intro.update');


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
Route::post('packagesupdate/{package}','PackageController@packagesupdate')->name('packages.update');






// gallery

Route::get('/images','GalleryController@index')->name('images.index');
Route::get('images/create','GalleryController@create')->name('images.create');
Route::get('gallery/create/{id?}','GalleryController@gallerycreate')->name('gallery.create');
Route::post('images/store','GalleryController@store')->name('images.store');
Route::get('images/{image}','GalleryController@show')->name('images.show');
Route::delete('/images/{image}','GalleryController@destroy')->name('images.destroy');
Route::post('imagealbums','GalleryController@store1')->name('imagealbums.store1');
Route::delete('imagealbums/{imagealbum}','GalleryController@destroy1')->name('imagealbums.destroy1');
Route::post('/stats/{alb}','GalleryController@albumstatus')->name('s.album');
Route::post('/stat/{img}','GalleryController@imagestatus')->name('s.image');




// carousel


Route::get('/carousels','CarouselController@index')->name('carousels.index');
Route::get('/carousels/create','CarouselController@create')->name('carousels.create');
Route::post('/carousels/store','CarouselController@store')->name('carousels.store');
Route::get('/carousels/{carousel}','CarouselController@show')->name('carousels.show');
Route::delete('/carousels/{carousel}','CarouselController@destroy')->name('carousels.destroy');
Route::post('caro/{stat}','CarouselController@cstatus')->name('caro.stat');


// booking


Route::post('bookings/store','BookingController@packagebook')->name('packages.book');
Route::get('bookingscreate/{slug}','BookingController@bookingcreate')->name('booking.create');
Route::get('bookings/inbox','BookingController@bookinginbox')->name('bookings.inbox');
Route::get('bookingsinboxshow/{booking}','BookingController@bookinginboxshow')->name('bookings.inboxshow');
Route::post('bookingsdelete/{booking}','BookingController@binboxdestroy')->name('binbox.destroy');
Route::get('bookingsreplycreate/{booking}','BookingController@breplycreate')->name('breply.create');
Route::post('bookingsrply/{contact}','BookingController@mailreply')->name('bookings.mailreply');
Route::post('bstatusrply/{id}','BookingController@statusreply')->name('b.statusreply');

Route::get('breplyinbox/','BookingController@breplyinbox')->name('breply.inbox');
Route::post('breplydestroy/{booking}','BookingController@breplydestroy')->name('breply.destroy');
Route::get('breplyview/{booking}','BookingController@breplyview')->name('breply.view');







// review

Route::get('/reviews','ReviewController@index')->name('reviews.index');
Route::get('/reviews/create','ReviewController@create')->name('reviews.create');
Route::get('/reviews/{review}','ReviewController@show')->name('reviews.show');
Route::post('/reviews/store','ReviewController@store')->name('reviews.store');
Route::patch('/reviews/{review}','ReviewController@update')->name('reviews.update');
Route::delete('/reviews/{review}','ReviewController@destroy')->name('reviews.destroy');
Route::patch('stat/{rev}','ReviewController@rstatus')->name('rev.stat');


// about
Route::get('/about','AboutController@about')->name('about');
Route::get('/aboutshow','AboutController@aboutshow')->name('showabout');
Route::get('/aboutdetail','AboutController@aboutdetail')->name('aboutdetail');
Route::post('/aboutstore','AboutController@aboutstore')->name('aboutstore');
Route::post('/aboutupdate','AboutController@aboutupdate')->name('aboutupdate');
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
Route::post('/qucikreply','DashboardController@quickmailstore')->name('quick.store');
Route::get('/quickreplysent','DashboardController@qsent')->name('q.sent');
Route::get('/qucikview/{quick}','DashboardController@qview')->name('q.view');
Route::post('/qdestroy/{quick}','DashboardController@qdestroy')->name('qmessage.destroy');

// seo

// Route::get('/seopages','SeoController@seopages')->name('seo.pages');
Route::get('/viewseo','SeoController@viewseo')->name('viewseo');
Route::post('/seostore','SeoController@seostore')->name('seo.store');
Route::post('/seoupdate/{seo}','SeoController@seoupdate')->name('seo.update');

});

