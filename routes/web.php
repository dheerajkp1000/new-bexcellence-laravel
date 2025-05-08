<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BewareController;
use App\Http\Controllers\SalesInvoiceController;



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
Route::get('/sales-invoice-table', function () {
    return view('sales-invoice-table');
});
Route::get('/beware-sales-invoice-data-dashboard-d', [SalesInvoiceController::class, 'index'])->name('sales.invoice.dashboard');
// routes/web.php
Route::get('/salesinvoice', [SalesInvoiceController::class, 'index'])->name('salesinvoice.index');





