<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PageController;
use App\Mail\contactus;
use Illuminate\Support\Facades\Mail;





Route::get('/', [PageController::class, 'Storelocator'])->name('Storelocator');
Route::get('/GetStoreImage/{id}', [PageController::class, 'GetStoreImage'])->name('getstoreimage');