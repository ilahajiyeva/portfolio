<?php


use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Frontend\PageHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageHomeController::class, "index"])->name('index');

Route::post('/contact/store', [AjaxController::class, 'contactStore'])->name('contact.store');

