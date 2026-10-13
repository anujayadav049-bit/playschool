<?php
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdmissionAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); });
Route::get('/about', function () { return view('about'); });
Route::get('/program', function () { return view('program'); });
Route::get('/activities', function () { return view('activities'); });
Route::get('/gallery', function () { return view('gallery'); });
Route::get('/admissions', function () { return view('admission'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/faq', function () { return view('faq'); });

// STUDENT ADMISSION FORM
Route::get('/admissionform', [AdmissionController::class, 'form'])->name('admission.form');
Route::post('/admission-submit', [AdmissionController::class, 'store'])->name('admission.submit');

// ADMIN PANEL ROUTES
Route::get('/admin/login',[AuthController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AuthController::class,'doLogin'])->name('admin.doLogin');

Route::middleware(['admin'])->prefix('admin')->group(function(){
 Route::get('/dashboard',[AdmissionAdminController::class,'dashboard'])->name('admin.dashboard');
 Route::get('/admissions',[AdmissionAdminController::class,'index'])->name('admin.admissions');
 Route::get('/admissions/{id}',[AdmissionAdminController::class,'show'])->name('admin.show');
 Route::get('/admissions/{id}/edit',[AdmissionAdminController::class,'edit'])->name('admin.edit');
 Route::post('/admissions/{id}/update',[AdmissionAdminController::class,'update'])->name('admin.update');
 Route::get('/admissions/{id}/delete',[AdmissionAdminController::class,'destroy'])->name('admin.delete');
 Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
});