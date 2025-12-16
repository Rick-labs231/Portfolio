<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MessageController;

use Illuminate\Support\Facades\Artisan;

Route::get('/migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return "Migration completed!";
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/send-message', [HomeController::class, 'sendMessage'])->name('send.message');
Route::post('/send-message', [ContactController::class, 'send'])->name('contact.send');

// Admin Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');


