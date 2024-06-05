<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AppoinmentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DoctorsController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\ServiceController;
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
        });
        //Faqs
        Route::controller(FaqsController::class)->group(function(){
            Route::get('/admin/faqs', 'faqs')->name('admin.faqs');
            Route::get('/admin/faqs/create', 'faqsCreate')->name('faqs.create');
            Route::get('/admin/work-process', 'workProcess')->name('admin.work');
            Route::get('/admin/work-process/create', 'workProcessCreate')->name('work.create');
        });
        //Doctors
        Route::controller(DoctorsController::class)->group(function(){
            Route::get('/admin/doctors', 'doctors')->name('admin.doctors');
            Route::get('/admin/doctors/create', 'doctorsCreate')->name('doctors.create');
        });
        //Service
        Route::controller(ServiceController::class)->group(function(){
            Route::get('/admin/service', 'service')->name('admin.service');
            Route::get('/admin/service/create', 'serviceCreate')->name('service.create');
        });
        //Blog
        Route::controller(BlogController::class)->group(function(){
            Route::get('/admin/blog', 'blog')->name('admin.blog');
            Route::get('/admin/blog/create', 'blogCreate')->name('blog.create');
        });
        //Testimonials
        Route::controller(TestimonialsController::class)->group(function(){
            Route::get('/admin/testimonials', 'testimonials')->name('admin.testimonials');
            Route::get('/admin/testimonials/create', 'testimonialsCreate')->name('testimonials.create');
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
