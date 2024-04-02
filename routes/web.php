<?php


use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\TransportController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;



//log in

Route::get("/login", [UserController::class, 'login'])->name('admin.login');
Route::post("/login/store", [UserController::class, 'loginPost'])->name('admin.login.post');


Route::group(['middleware' => 'auth'], function () {

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
Route::get('/transport/edit/{id}',[TransportController::class, 'edit'])->name('transport.edit');
Route::post('/transport/update/{id}',[TransportController::class, 'update'])->name('transport.update');

});




