<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DoctorsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AppoinmentController;
use App\Http\Controllers\admin\WorkProcessController;
use App\Http\Controllers\Admin\TestimonialsController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('authenticated');
    Route::get('/register', 'register')->name('register')->middleware('authenticated');
    Route::post('process/login', 'processLogin')->name('processLogin');
    Route::post('process/register', 'processRegister')->name('processRegister');
    Route::get('logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin', 'admin')->name('admin');
        //carousel
        Route::controller(AdminHomeController::class)->group(function(){
            Route::get('/admin/carousel', 'carousel')->name('carousel');
            Route::get('/admin/carousel/create', 'carouselCreate')->name('carousel.create');
            Route::post('/carousel/create', 'carouselCreateProcess')->name('create.process');
            Route::get('/carousel/edit/{id}', 'carouselEdit')->name('carousel.edit');
            Route::put('/update/{id}', 'carouselUpdate')->name('carousel.update');
            Route::get('/delete/{id}', 'carouselDelete')->name('carousel.delete');
        });
        //About
        Route::controller(AdminAboutController::class)->group(function(){
            Route::get('/admin/about', 'adminAbout')->name('admin.about');
            Route::get('/admin/about/create', 'adminAboutCreate')->name('about.create');
            Route::post('/admin/about/createProcess', 'AboutCreateProcess')->name('about.create.Process');
            Route::get('/admin/about/edit/{id}', 'AboutEdit')->name('about.edit');
            Route::put('/admin/about/update/{id}', 'AboutUpdate')->name('about.update');
            Route::get('/admin/about/delete/{id}', 'AboutDelete')->name('about.delete');
        });
        //Faqs
        Route::controller(FaqsController::class)->group(function(){
            Route::get('/admin/faqs', 'faqs')->name('admin.faqs');
            Route::get('/admin/faqs/create', 'faqsCreate')->name('faqs.create');
            Route::get('/admin/work-process', 'workProcess')->name('admin.work');
            Route::get('/admin/work-process/create', 'workCreate')->name('work.create');
            Route::post('/admin/work-process/create-process', 'workProcessCreate')->name('work.create.process');
            Route::get('/admin/work-process/edit/{id}', 'workProcessEdit')->name('work.process.edit');
            Route::put('/admin/work-process/update/{id}', 'workProcessUpdate')->name('work.process.update');
            Route::get('/admin/work-process/delete/{id}', 'workProcessDelete')->name('work.process.delete');
        });
        //work process
        Route::controller(WorkProcessController::class)->group(function(){
            Route::get('/admin/work-process', 'workProcess')->name('admin.work');
            Route::get('/admin/work-process/create', 'workCreate')->name('work.create');
            Route::post('/admin/work-process/create-process', 'workProcessCreate')->name('work.create.process');
            Route::get('/admin/work-process/edit/{id}', 'workProcessEdit')->name('work.process.edit');
            Route::put('/admin/work-process/update/{id}', 'workProcessUpdate')->name('work.process.update');
            Route::get('/admin/work-process/delete/{id}', 'workProcessDelete')->name('work.process.delete');
        });
        //Doctors
        Route::controller(DoctorsController::class)->group(function(){
            Route::get('/admin/doctors', 'doctors')->name('admin.doctors');
            Route::get('/admin/doctors/create', 'doctorsCreate')->name('doctors.create');
            Route::post('/admin/doctors/create-process', 'doctorsCreateProcess')->name('doctors.create.process');
            Route::get('/admin/doctors/edit/{id}', 'doctorsEdit')->name('doctors.edit');
            Route::put('/admin/doctors/update/{id}', 'doctorsUpdate')->name('doctors.update');
            Route::get('/admin/doctors/delete/{id}', 'doctorsDelete')->name('doctors.delete');
        });
        //Service
        Route::controller(ServiceController::class)->group(function(){
            Route::get('/admin/service', 'service')->name('admin.service');
            Route::get('/admin/service/create', 'serviceCreate')->name('service.create');
            Route::post('/admin/service/createProcess', 'serviceCreateProcess')->name('service.create.process');
            Route::get('/admin/service/edit/{id}', 'serviceEdit')->name('service.edit');
            Route::put('/admin/service/update/{id}', 'serviceUpdate')->name('service.update');
            Route::get('/admin/service/delete/{id}', 'serviceDelete')->name('service.delete');
        });
        //Blog
        Route::controller(BlogController::class)->group(function(){
            Route::get('/admin/blog', 'blog')->name('admin.blog');
            Route::get('/admin/blog/create', 'blogCreate')->name('blog.create');
            Route::post('/admin/blog/create-process', 'blogCreateProcess')->name('blog.create.process');
            Route::get('/admin/blog/edit/{id}', 'blogEdit')->name('blog.edit');
            Route::put('/admin/blog/update/{id}', 'blogUpdate')->name('blog.update');
            Route::get('/admin/blog/delete/{id}', 'blogDelete')->name('blog.delete');
        });
        //Testimonials
        Route::controller(TestimonialsController::class)->group(function(){
            Route::get('/admin/testimonials', 'testimonials')->name('admin.testimonials');
            Route::get('/admin/testimonials/create', 'testimonialsCreate')->name('testimonials.create');
            Route::post('/admin/testimonials/create-process', 'testimonialsCreateProcess')->name('testimonials.create.process');
            Route::get('/admin/testimonials/edit/{id}', 'testimonialsEdit')->name('testimonials.edit');
            Route::put('/admin/testimonials/update/{id}', 'testimonialsUpdate')->name('testimonials.update');
            Route::get('/admin/testimonials/delete/{id}', 'testimonialsDelete')->name('testimonials.delete');
        });
        //Appoinment
        Route::controller(AppoinmentController::class)->group(function(){
            Route::get('/admin/appoinment', 'appoinment')->name('admin.appoinment');
            Route::get('/admin/appoinment/create', 'appoinmentCreate')->name('appoinment.create');
            Route::get('/admin/appoinment/schedules', 'schedules')->name('admin.appoinment.schedules');
            Route::get('/admin/appoinment/schedules/create', 'schedulesCreate')->name('schedules.create');
            Route::get('/admin/appoinment/details', 'details')->name('admin.appoinment.details');
            Route::get('/admin/appoinment/details/create', 'detailsCreate')->name('details.create');
        });
        //Contact
        Route::controller(ContactController::class)->group(function(){
            Route::get('/admin/contact/title', 'title')->name('admin.title');
            Route::get('/admin/contact/title/create', 'titleCreate')->name('title.create');
            Route::get('/admin/contactInfo', 'contactInfo')->name('admin.contactInfo');
            Route::get('/admin/contactInfo/create', 'contactInfoCreate')->name('contactInfo.create');
            Route::get('/admin/contactDetails', 'contactDetails')->name('admin.contactDetails');
            Route::get('/admin/contactDetails/create', 'detailsCreate')->name('contactDetails.create');
        });
    });
});


