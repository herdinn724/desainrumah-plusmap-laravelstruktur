<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/', [TemplateController::class, 'index']);

route::get('/', [TemplateController::class, 'index'])->name('index');;
route::get('about', [TemplateController::class, 'about'])->name('about');
route::get('contact', [TemplateController::class, 'contact'])->name('contact');
Route::get('service', [TemplateController::class, 'service'])->name('service');;
