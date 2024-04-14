<?php

use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\TransportController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AbousUsController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OurPackageController;
use App\Http\Controllers\Frontend\QuickResponceController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\SinglePackageViewController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('home');

//our package
Route::get('/our-packages',[OurPackageController::class,'ourpackages'])->name('our.packages');

//contactus
Route::get('/contact-us',[ContactUsController::class,'contactus'])->name('contact.us');

//aboutus
Route::get('/about-us',[AboutUsController::class,'aboutus'])->name('about.us');

//search the package
Route::get('package/search',[SearchController::class, 'search'])->name('package.search');


//single package view

Route::get('/package-view/{id}',[SinglePackageViewController::class, 'packageview'])->name('singlepackage.view');

//reservation form for booking

Route::get('/reservation-form/{id}',[SinglePackageViewController::class, 'reservation'])->name('reservation.form');
Route::post('/reservation-form/store',[SinglePackageViewController::class, 'store'])->name('reservation.store');

// quick responce
Route::get('/quick-responce',[QuickResponceController::class, 'index'])->name('quick.responce');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END





Route::group(['prefix' => 'admin'], function () {


//log in

Route::get('/login', [UserController::class, 'login'])->name('admin.login');
Route::post('/login/store', [UserController::class, 'loginPost'])->name('admin.login.post');


Route::group(['middleware' => 'auth'], function () {


//below all routes if I want to visit I have to login first

//dashboard

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');


//logout
Route::get("/logout", [UserController::class, 'logout'])->name('admin.logout');


//Hotel
Route::get('/hotel/create',[HotelController::class,'create'])->name('hotel.create');
Route::post('/hotel/store',[HotelController::class,'store'])->name('hotel.store');
Route::get('/hotel/list',[HotelController::class,'list'])->name('hotel.list');
Route::get('/hotel/delete/{id}',[HotelController::class,'delete'])->name('hotel.delete');
Route::get('/hotel/trash',[HotelController::class,'trash'])->name('hotel.trash');
Route::get('/hotel/restore/{ttt_id}',[HotelController::class,'restore'])->name('hotel.restore');
Route::get('/hotel/force-delete/{id}',[HotelController::class,'forceDelete'])->name('hotel.forceDelete');
Route::get('/hotel/edit/{id}',[HotelController::class,'edit'])->name('hotel.edit');
Route::post('/hotel/update/{id}',[HotelController::class,'update'])->name('hotel.update');


//Package
Route::get('/package/create',[PackageController::class,'create'])->name('package.create');
Route::post('/package/store',[PackageController::class,'store'])->name('package.store');
Route::get('/package/list',[PackageController::class,'list'])->name('package.list');
Route::get('/package/delete/{id}',[PackageController::class,'delete'])->name('package.delete');
Route::get('/package/trash',[PackageController::class,'trash'])->name('package.trash');
Route::get('/package/restore/{id}',[PackageController::class,'restore'])->name('package.restore');
Route::get('/package/force-delete/{id}',[PackageController::class,'forceDelete'])->name('package.forceDelete');
Route::get('/package/edit/{id}',[PackageController::class,'edit'])->where('id', '[0-9]+')->name('package.edit');
Route::post('/package/update/{id}',[PackageController::class,'update'])->name('package.update');



//Transport
Route::get('/transport/create',[TransportController::class, 'create'])->name('transport.create');
Route::post('/transport/store',[TransportController::class, 'store'])->name('transport.store');
Route::get('/transport/list',[TransportController::class, 'list'])->name('transport.list');
Route::get('/transport/delete/{id}',[TransportController::class, 'delete'])->name('transport.delete');
Route::get('/transport/trash',[TransportController::class, 'trash'])->name('transport.trash');
Route::get('/transport/restore/{id}',[TransportController::class, 'restore'])->name('transport.restore');
Route::get('/transport/force-delete/{id}',[TransportController::class, 'forceDelete'])->name('transport.forceDelete');
Route::get('/transport/edit/{id}',[TransportController::class, 'edit'])->name('transport.edit');
Route::post('/transport/update/{id}',[TransportController::class, 'update'])->name('transport.update');



//Destination
Route::get('/destination/create',[DestinationController::class,'create'])->name('destination.create');
Route::post('/destination/store',[DestinationController::class,'store'])->name('destination.store');
Route::get('/destination/list',[DestinationController::class,'list'])->name('destination.list');
Route::get('/destination/delete/{id}',[DestinationController::class,'delete'])->name('destination.delete');
Route::get('/destination/trash',[DestinationController::class,'trash'])->name('destination.trash');
Route::get('/destination/restore/{id}',[DestinationController::class,'restore'])->name('destination.restore');
Route::get('/destination/force-delete/{id}',[DestinationController::class,'forceDelete'])->name('destination.forceDelete');


//User Role
Route::get('/user/role/create',[UserController::class, 'create'])->name('user_role.create');
Route::post('/user/role/store',[UserController::class, 'store'])->name('user_role.store');
Route::get('/user/role/list',[UserController::class, 'list'])->name('user_role.list');




//bookig list from reservation form

Route::get('/package/bookings/list',[BookingController::class, 'list'])->name('bookings.list');

});
});














