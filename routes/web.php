<?php
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdmissionAdminController;
use App\Http\Controllers\FormBuilderController;
use App\Http\Controllers\CustomPageController;
use App\Http\Controllers\Admin\HomeSettingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AboutSettingController;
use App\Models\HomeSetting;
use App\Models\AboutSetting;
use Illuminate\Support\Facades\Route;

// --- PUBLIC FORM ROUTES ---
Route::get('/form/{slug}', [FormBuilderController::class, 'showForm'])->name('form.show');
Route::post('/form/{slug}/submit', [FormBuilderController::class, 'submitForm'])->name('form.submit');

// === WEBSITE PAGES ===
Route::get('/', function () { 
    $homeSetting = HomeSetting::first();
    return view('index', compact('homeSetting')); 
})->name('home');

Route::get('/about', function () { 
    $about = AboutSetting::first();
    return view('about', compact('about')); 
})->name('about');

Route::get('/program', function () { return view('program'); });
Route::get('/activities', function () { return view('activities'); });
Route::get('/gallery', function () { return view('gallery'); });
Route::get('/admissions', function () { return view('admission'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/faq', function () { return view('faq'); });

// === STUDENT ADMISSION FORM ===
Route::get('/admissionform', [AdmissionController::class, 'form'])->name('admission.form');
Route::post('/admission-store', [AdmissionController::class, 'store'])->name('admission.store');
Route::get('/admission-success/{id}', [AdmissionController::class, 'success'])->name('admission.success');
Route::get('/admission-receipt/{id}', [AdmissionController::class, 'downloadReceipt'])->name('admission.receipt');

// === ADMIN PANEL ===
Route::get('/admin/login',[AuthController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AuthController::class,'doLogin'])->name('admin.doLogin');
Route::get('/admin/forgot-password',[AuthController::class,'showForgot'])->name('admin.forgot');
Route::post('/admin/forgot-password',[AuthController::class,'handleForgot'])->name('admin.forgot.handle');

Route::middleware(['admin'])->prefix('admin')->group(function(){
 Route::get('/dashboard',[AdmissionAdminController::class,'dashboard'])->name('admin.dashboard');
 Route::get('/admissions',[AdmissionAdminController::class,'index'])->name('admin.admissions');
 Route::get('/admissions/{id}',[AdmissionAdminController::class,'show'])->name('admin.show');
 Route::get('/admissions/{id}/edit',[AdmissionAdminController::class,'edit'])->name('admin.edit');
 Route::post('/admissions/{id}/update',[AdmissionAdminController::class,'update'])->name('admin.update');
 Route::get('/admissions/{id}/delete',[AdmissionAdminController::class,'destroy'])->name('admin.delete');
 Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

 Route::prefix('form-builder')->group(function () {
    Route::get('/', [FormBuilderController::class, 'index'])->name('form-builder.index');
    Route::get('/create', [FormBuilderController::class, 'create'])->name('form-builder.create');
    Route::post('/store', [FormBuilderController::class, 'store'])->name('form-builder.store');
    Route::get('/{id}/edit', [FormBuilderController::class, 'editForm'])->name('form-builder.edit');
    Route::post('/{id}/update', [FormBuilderController::class, 'updateForm'])->name('form-builder.update');
    Route::get('/{id}/submissions', [FormBuilderController::class, 'submissions'])->name('form-builder.submissions');
    Route::delete('/{id}', [FormBuilderController::class, 'destroy'])->name('form-builder.destroy');
 });

 Route::get('/custom-pages', [CustomPageController::class, 'index'])->name('admin.custom-pages.index');
 Route::get('/custom-pages/create', [CustomPageController::class, 'create'])->name('admin.custom-pages.create');
 Route::post('/custom-pages/store', [CustomPageController::class, 'store'])->name('admin.custom-pages.store');
 Route::get('/custom-pages/{id}/edit', [CustomPageController::class, 'edit'])->name('admin.custom-pages.edit');
 Route::post('/custom-pages/{id}/update', [CustomPageController::class, 'update'])->name('admin.custom-pages.update');
 Route::get('/custom-pages/{id}/delete', [CustomPageController::class, 'destroy'])->name('admin.custom-pages.delete');

 // HOME SETTINGS
 Route::get('/home-settings', [HomeSettingController::class,'index'])->name('admin.home.settings.index');
 Route::post('/home-settings', [HomeSettingController::class,'store'])->name('admin.home.settings.store');
 Route::post('/home-settings/delete-banner', [HomeSettingController::class,'deleteBanner'])->name('admin.home.settings.deleteBanner');

 // ABOUT SETTINGS - FIXED - No double admin
 Route::get('/about-settings', [AboutSettingController::class, 'index'])->name('admin.about.index');
 Route::post('/about-settings', [AboutSettingController::class, 'update'])->name('admin.about.update');

 // PAGES - OLD SYSTEM - agar chahiye to rakho, nahi to delete kar sakte ho
 Route::prefix('pages')->name('admin.pages.')->group(function(){
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/{slug}', [PageController::class, 'show'])->name('show');
    Route::post('/{slug}', [PageController::class, 'update'])->name('update');
 });
});

Route::post('/admissions/{id}/status', [AdmissionAdminController::class,'updateStatus'])->name('admin.status');
Route::get('/page/{slug}', [CustomPageController::class, 'show'])->name('page.show');