<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BewareController;



Route::get('/', function () {
    return view('index');
});
Route::get('/beware-dashboard', [BewareController::class, 'index']);

Route::get('/beware', [BewareController::class, 'index']);

Route::get('/beware-delivery-challan', function () {
    return view('beware-delivery-challan');
});
Route::get('/beware-delivery-challan-add', function () {
    return view('beware-delivery-challan-add');
});
Route::get('/beware-delivery-challan-pdf', function () {
    return view('beware-delivery-challan-pdf');
});






