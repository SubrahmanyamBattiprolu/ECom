<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerAddressController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customers',[CustomerController::class,'getCustomers']);
Route::post('/customer/save',[CustomerController::class,'saveCustomer']);
Route::view('/customer/add','customer_create');
Route::view('/customer/address','customer_address');
Route::post('/customer/address/save',[CustomerAddressController::class,'saveAddress']);
