<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\TransportController;
use App\Http\Controllers\MobileController;
use Illuminate\Support\Facades\Route;

//dashboard

Route::get('/',[DashboardController::class,'dashboard']);




//customer

Route::get('/customer/form', [CustomerController::class,'form'])->name('customer.form');
Route::post('/customer/form/store', [CustomerController::class,'store'])->name('customer_form.store');
Route::get('/customer/view', [CustomerController::class,'view'])->name('customer.view');

// customer delete now behave like a soft deletes

Route::get('/customer/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');

//trash to show the soft deleted data

Route::get('/customer/trash', [CustomerController::class,'trash'])->name('customer.trash');

// restore for back the data from trash (soft deletes)

Route::get('/customer/restore/{id}', [CustomerController::class,'restore'])->name('customer.restore');

//permant deleted (forceDeletes)

Route::get('/customer/force-delete/{id}', [CustomerController::class,'forceDelete'])->name('customer.force-delete');



Route::get('/customer/edit/{id}', [CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');





//customer er mobile dekhabo

// Route::get('/show/mobile/{consumer-id}',[ConsumerController::class, 'showMobile']);



//consumer

Route::get('/consumer/create', [ConsumerController::class, 'createConsumer'])->name('create.consumer');
Route::post('/store/consumer', [ConsumerController::class, 'storeConsumer'])->name('store.consumer');
Route::get('/consumer/list', [ConsumerController::class, 'listConsumer'])->name('list.consumer');


//mobile



Route::get('/mobile/create', [MobileController::class, 'create'])->name('mobile.create');
Route::post('/mobile/store', [MobileController::class, 'store'])->name('mobile.store');
Route::get('/mobile/list', [MobileController::class, 'list'])->name('mobile.list');





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
Route::get('/package/edit/{id}',[PackageController::class,'edit'])->name('package.edit');
Route::post('/package/update/{id}',[PackageController::class,'update'])->name('package.update');



//Transport


Route::get('/transport/create',[TransportController::class, 'create'])->name('transport.create');
Route::post('/transport/store',[TransportController::class, 'store'])->name('transport.store');
Route::get('/transport/list',[TransportController::class, 'list'])->name('transport.list');
Route::get('/transport/delete/{id}',[TransportController::class, 'delete'])->name('transport.delete');
Route::get('/transport/trash',[TransportController::class, 'trash'])->name('transport.trash');
Route::get('/transport/restore/{id}',[TransportController::class, 'restore'])->name('transport.restore');
Route::get('/transport/force-delete/{id}',[TransportController::class, 'forceDelete'])->name('transport.forceDelete');


//testing

Route::get('/customer/dekhabonaaaaaaaaaaaaaaa',[TestController::class, 'test'])->name('customer.test');


