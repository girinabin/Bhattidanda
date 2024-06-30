# Laravel Application Routes Overview

This document provides an overview of the web routes available in this Laravel application. These routes are loaded by the `RouteServiceProvider` within a group containing the "web" middleware group.

## Frontend Routes

These routes are accessible to all users and provide various frontend functionalities:

- `GET /` - Displays the home page (`FrontendController@home`).
- `GET /home` - Displays the home page (`FrontendController@home`).
- `GET /know-about-phool-maya` - Displays information about Phool Maya (`FrontendController@knowabout`).
- `GET /booking/{slug}` - Displays booking information (`FrontendController@booking`). Named route: `booking`.
- `GET /contact` - Displays the contact page (`FrontendController@contact`).
- `GET /gallery` - Displays the gallery page (`FrontendController@gallery`).
- `GET /room` - Displays room information (`FrontendController@room`).
- `GET /package` - Displays package information (`FrontendController@package`). Named route: `package`.
- `GET /ourservice` - Displays our services (`FrontendController@ourservice`).
- `GET /album1/{id}` - Displays album details (`FrontendController@album1`). Named route: `album1`.
- `GET /whyus` - Explains why to choose us (`FrontendController@whyus`). Named route: `whyus`.
- `GET /guestreviews` - Displays guest reviews (`FrontendController@guestreviews`).

## Authentication Routes

These routes handle user authentication:

- `Auth::routes()` - Registers the default authentication routes provided by Laravel.
- `GET /homedashboard` - Displays the home dashboard (`HomeController@index`). Named route: `home`.

## Admin Routes

These routes are protected by the `auth` middleware and are accessible only to authenticated users:

### View Composer

- **Header View Composer**: Provides various counts for the admin header.

### Admin Management

- `GET /adminadd` - Displays the admin add page (`AdminController@adminadd`). Named route: `admin.add`.
- `POST /adminstore` - Stores a new admin (`AdminController@adminstore`). Named route: `admin.store`.
- `GET /adminindex` - Displays the list of admins (`AdminController@adminindex`). Named route: `admin.index`.
- `POST /admindelete/{admin}` - Deletes an admin (`AdminController@admindestroy`). Named route: `admin.destroy`.

### Dashboard

- `GET /dashboard` - Displays the admin dashboard (`DashboardController@index`). Named route: `dashboard`.
- `GET /logout` - Logs out the user (`DashboardController@logout`). Named route: `logout`.

### Introduction Management

- `POST /introstore` - Stores introduction details (`DashboardController@introstore`). Named route: `intro.store`.
- `GET /introview` - Displays introduction details (`DashboardController@introview`). Named route: `intro.view`.
- `POST /introupdate` - Updates introduction details (`DashboardController@introupdate`). Named route: `intro.update`.

### Service Management

- `GET /services` - Lists all services (`ServiceController@index`). Named route: `services.index`.
- `GET /services/create` - Displays the create service form (`ServiceController@create`). Named route: `services.create`.
- `POST /services/store` - Stores a new service (`ServiceController@store`). Named route: `services.store`.
- `PATCH /services/{service}` - Updates a service (`ServiceController@update`). Named route: `services.update`.
- `GET /services/{service}` - Displays a service (`ServiceController@show`). Named route: `services.show`.
- `DELETE /services/{service}` - Deletes a service (`ServiceController@destroy`). Named route: `services.destroy`.
- `PATCH /status/{service}` - Updates service status (`ServiceController@servicestatus`). Named route: `status.service`.

### Package Management

- `GET /packages/create` - Displays the create package form (`PackageController@packagecreate`). Named route: `packages.create`.
- `GET /packages/{package}-{slug}` - Displays a package (`PackageController@packageshow`). Named route: `packages.show`.
- `GET /packages` - Lists all packages (`PackageController@packageindex`). Named route: `packages.index`.
- `POST /packages/store` - Stores a new package (`PackageController@packagestore`). Named route: `packages.store`.
- `POST /status/{package}` - Updates package status (`PackageController@packagestatus`). Named route: `status.package`.
- `POST /packages/{package}` - Deletes a package (`PackageController@destroy`). Named route: `packages.destroy`.
- `POST /packagesupdate/{package}` - Updates a package (`PackageController@packagesupdate`). Named route: `packages.update`.

### Gallery Management

- `GET /images` - Lists all images (`GalleryController@index`). Named route: `images.index`.
- `GET /images/create` - Displays the create image form (`GalleryController@create`). Named route: `images.create`.
- `GET /gallery/create/{id?}` - Displays the create gallery form (`GalleryController@gallerycreate`). Named route: `gallery.create`.
- `POST /images/store` - Stores a new image (`GalleryController@store`). Named route: `images.store`.
- `GET /images/{image}` - Displays an image (`GalleryController@show`). Named route: `images.show`.
- `DELETE /images/{image}` - Deletes an image (`GalleryController@destroy`). Named route: `images.destroy`.
- `POST /imagealbums` - Stores an image album (`GalleryController@store1`). Named route: `imagealbums.store1`.
- `DELETE /imagealbums/{imagealbum}` - Deletes an image album (`GalleryController@destroy1`). Named route: `imagealbums.destroy1`.
- `POST /stats/{alb}` - Updates album status (`GalleryController@albumstatus`). Named route: `s.album`.
- `POST /stat/{img}` - Updates image status (`GalleryController@imagestatus`). Named route: `s.image`.

### Carousel Management

- `GET /carousels` - Lists all carousels (`CarouselController@index`). Named route: `carousels.index`.
- `GET /carousels/create` - Displays the create carousel form (`CarouselController@create`). Named route: `carousels.create`.
- `POST /carousels/store` - Stores a new carousel (`CarouselController@store`). Named route: `carousels.store`.
- `GET /carousels/{carousel}` - Displays a carousel (`CarouselController@show`). Named route: `carousels.show`.
- `DELETE /carousels/{carousel}` - Deletes a carousel (`CarouselController@destroy`). Named route: `carousels.destroy`.
- `POST /caro/{stat}` - Updates carousel status (`CarouselController@cstatus`). Named route: `caro.stat`.

### Booking Management

- `POST /bookings/store` - Books a package (`BookingController@packagebook`). Named route: `packages.book`.
- `GET /bookingscreate/{slug}` - Displays the create booking form (`BookingController@bookingcreate`). Named route: `booking.create`.
- `GET /bookings/inbox` - Displays the booking inbox (`BookingController@bookinginbox`). Named route: `bookings.inbox`.
- `GET /bookingsinboxshow/{booking}` - Displays booking details (`BookingController@bookinginboxshow`). Named route: `bookings.inboxshow`.
- `POST /bookingsdelete/{booking}` - Deletes a booking (`BookingController@binboxdestroy`). Named route: `binbox.destroy`.
- `GET /bookingsreplycreate/{booking}` - Displays the booking reply form (`BookingController@breplycreate`). Named route: `breply.create`.
- `POST /bookingsrply/{contact}` - Sends a booking reply (`BookingController@mailreply`). Named route: `bookings.mailreply`.
- `POST /bstatusrply/{id}` - Updates booking reply status (`BookingController@statusreply`). Named route: `b.statusreply`.
- `GET /breplyinbox` - Displays the booking reply inbox (`BookingController@breplyinbox`). Named route: `breply.inbox`.
- `POST /breplydestroy/{booking}` - Deletes a booking reply (`BookingController@breplydestroy`). Named route: `breply.destroy`.
- `GET /breplyview/{booking}` - Displays booking reply details (`BookingController@breplyview`). Named route: `breply.view`.

### Review Management

- `GET /reviews` - Lists all reviews (`ReviewController@index`). Named route: `reviews.index`.
- `GET /reviews/create` - Displays the create review form (`ReviewController@create`). Named route: `reviews.create`.
- `GET /reviews/{review}` - Displays a review (`ReviewController@show`). Named route: `reviews.show`.
- `POST /reviews/store` - Stores a new review (`ReviewController@store`). Named route: `reviews.store`.
- `PATCH /reviews/{review}` - Updates a review (`ReviewController@update`). Named route: `reviews.update`.
- `DELETE /reviews/{review}` - Deletes a review (`ReviewController@destroy`). Named route: `reviews.destroy`.
- `PATCH /stat/{rev}` - Updates review status (`ReviewController@rstatus`). Named route: `rev.stat`.

### About Management

- `GET /about` - Displays the about page (`AboutController@about`). Named route: `about`.
- `GET /aboutshow`
