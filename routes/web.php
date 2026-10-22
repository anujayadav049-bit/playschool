<?php
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdmissionAdminController;
use App\Http\Controllers\FormBuilderController;
use App\Http\Controllers\CustomPageController;
use App\Http\Controllers\Admin\HomeSettingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AboutSettingController;
use App\Http\Controllers\Admin\ActivitySettingController;
use App\Http\Controllers\Admin\ProgramSettingController;
use App\Http\Controllers\Admin\GallerySettingController;
use App\Http\Controllers\Admin\ContactSettingController;
use App\Http\Controllers\Admin\FaqSettingController;
use App\Http\Controllers\ContactController;
use App\Models\HomeSetting;
use App\Models\AboutSetting;
use App\Models\Teacher;
use App\Models\Program;
use App\Models\Activity;
use App\Models\Gallery;
use App\Models\Faq;
use App\Models\ContactSetting;
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
    $setting = AboutSetting::first();
    $teachers = Teacher::orderBy('id','desc')->get();
    return view('about', compact('setting','teachers')); 
})->name('about');

Route::get('/program', function () { 
    $programs = Program::latest()->get();
    return view('program', compact('programs')); 
});

Route::get('/activities', function () { 
    $activities = Activity::latest()->take(8)->get();
    return view('activities', compact('activities')); 
})->name('activities');

Route::get('/gallery', function () { 
    $galleries = Gallery::latest()->get();
    return view('gallery', compact('galleries')); 
});

Route::get('/admissions', function () { return view('admission'); });

Route::get('/contact', function () { 
    $contact = ContactSetting::first();
    return view('contact', compact('contact')); 
})->name('contact');

Route::get('/faq', function () { 
    $faqs = Faq::latest()->get();
    return view('faq', compact('faqs')); 
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

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
 Route::post('/admissions/{id}/status', [AdmissionAdminController::class,'updateStatus'])->name('admin.status');
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

 Route::get('/home-settings', [HomeSettingController::class,'index'])->name('admin.home.settings.index');
 Route::post('/home-settings', [HomeSettingController::class,'store'])->name('admin.home.settings.store');
 Route::post('/home-settings/delete-banner', [HomeSettingController::class,'deleteBanner'])->name('admin.home.settings.deleteBanner');

 Route::get('/about-settings', [AboutSettingController::class, 'index'])->name('admin.about.index');
 Route::post('/about-settings', [AboutSettingController::class, 'update'])->name('admin.about.update');
 Route::post('/about-settings/teacher', [AboutSettingController::class, 'storeTeacher'])->name('admin.about.teacher.store');
 Route::get('/about-settings/teacher/{id}/delete', [AboutSettingController::class, 'deleteTeacher'])->name('admin.about.teacher.delete');

 Route::prefix('pages')->name('admin.pages.')->group(function(){
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/{slug}', [PageController::class, 'show'])->name('show');
    Route::post('/{slug}', [PageController::class, 'update'])->name('update');
 });

 Route::get('/activity-settings', [ActivitySettingController::class,'index'])->name('admin.activity.index');
 Route::post('/activity-settings', [ActivitySettingController::class,'store'])->name('admin.activity.store');
 Route::post('/activity-settings/update/{id}', [ActivitySettingController::class,'update'])->name('admin.activity.update');
 Route::get('/activity-settings/delete/{id}', [ActivitySettingController::class,'delete'])->name('admin.activity.delete');

 Route::get('/program-settings', [ProgramSettingController::class,'index'])->name('admin.program.index');
 Route::post('/program-settings', [ProgramSettingController::class,'store'])->name('admin.program.store');
 Route::get('/program-settings/delete/{id}', [ProgramSettingController::class,'delete'])->name('admin.program.delete');

 Route::get('/gallery-settings', [GallerySettingController::class,'index'])->name('admin.gallery.index');
 Route::post('/gallery-settings', [GallerySettingController::class,'store'])->name('admin.gallery.store');
 Route::get('/gallery-settings/delete/{id}', [GallerySettingController::class,'delete'])->name('admin.gallery.delete');

 Route::get('/contact-settings', [ContactSettingController::class,'index'])->name('admin.contact.index');
 Route::post('/contact-settings', [ContactSettingController::class,'store'])->name('admin.contact.store');

 Route::get('/faq-settings', [FaqSettingController::class,'index'])->name('admin.faq.index');
 Route::post('/faq-settings', [FaqSettingController::class,'store'])->name('admin.faq.store');
 Route::get('/faq-settings/delete/{id}', [FaqSettingController::class,'delete'])->name('admin.faq.delete');

 // CONTACT INQUIRIES - ADMIN KE ANDAR
 Route::get('/contact-inquiries', [ContactController::class, 'adminList'])->name('admin.contact-inquiries');
 Route::delete('/contact-inquiries/{id}', [ContactController::class, 'adminDelete'])->name('admin.contact-inquiries.delete');
});

Route::get('/page/{slug}', [CustomPageController::class, 'show'])->name('page.show');
Route::get('/fix-activity-img', function(){
    \App\Models\Activity::query()->update(['image' => null]);
    return 'DONE - 8 activities image fixed. Ab admin refresh karo';
});