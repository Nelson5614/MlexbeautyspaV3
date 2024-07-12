<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MarchantController;
use App\Http\Controllers\ShopController;

 // pages routes
 Route::get('/', [PagesController::class, 'index']);
 Route::get('/about', [PagesController::class, 'about']);

 Route::get('/appointments', [PagesController::class, 'appointment']);
 Route::post('/appointments', [AppointmentController::class, 'save'])->name('appointments');
 Route::get('/send-whatsapp-appointment{id}', [AppointmentController::class, 'sendWhatsapp'])->name('send-whatsapp-appointment');

 Route::get('/contact', [PagesController::class, 'contact']);
 Route::post('/contact', [ContactController::class, 'save'])->name('contact');
 Route::get('/send-whatsapp-contact{id}', [ContactController::class, 'sendWhatsapp'])->name('send-whatsapp-contact');

 Route::get('/gallery', [PagesController::class, 'gallery']);
 Route::get('/services', [PagesController::class, 'service']);

 Route::get('/testimonials', [PagesController::class, 'testimonial']);

 Route::get('/shop', [ShopController::class, 'index']);
 Route::get('/shop/{product}', [ShopController::class, 'show'])->name('product_details');


 Route::get('/existingmarchant', [PagesController::class, 'existingmarchant']);

 Route::get('/becomeamarchant', [PagesController::class, 'becomeamarchant']);
 Route::post('/becomeamarchant', [MarchantController::class, 'save'])->name('marchant');
 Route::get('/send-whatsapp-marchant{id}', [MarchantController::class, 'sendWhatsapp'])->name('send-whatsapp-marchant');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
