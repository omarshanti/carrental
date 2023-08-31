<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BooksController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\PlaceController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\TestimonialsController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\VehiclesController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\UserController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\UserController as UserManagementUserController;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route::get('/login',function(){
//     return view('login')
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
//     })->name('dashboard');
// ************** Website Front Pages ******************* //
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/',[HomeController::class,'index'])->name('index');
        Route::get('/about-us',[AboutController::class,'about'])->name('AboutUs');
        Route::get('/privacy',[AboutController::class,'privacy'])->name('privacy');
        Route::get('/terms',[AboutController::class,'terms'])->name('terms');
        Route::get('/carlisting',[HomeController::class,'carlisting'])->name('carlisting');
        Route::post('/carlisting/search',[HomeController::class,'carlisting_search'])->name('carlisting_search');
        Route::post('/carlisting/search/home',[HomeController::class,'home_search'])->name('home_search');
        Route::get('/faqs',[HomeController::class,'faqs'])->name('faqs');
        Route::get('/contact-us',[HomeController::class,'contact'])->name('ContactUS');
        Route::get('/vehical-details/{id}',[HomeController::class,'v_details'])->name('v-details');
        Route::post('/contact-us-post',[AboutController::class,'postContact'])->name('post.contact');
        Route::get('/forget-password',[HomeController::class,'forgetPassword'])->name('forgetPassword');
        Route::post('/forget-password',[HomeController::class,'postForgetPassword'])->name('postForgetPassword');
        
    });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::middleware(['auth'])->group(function () {
            Route::get('/profile',[UserController::class,'index'])->name('profile');
            Route::post('/profile',[UserController::class,'update'])->name('profile.update');
            Route::get('/update-password',[UserController::class,'passwordView'])->name('password');
            Route::post('/update-password',[UserController::class,'updatePassword'])->name('passsword.update');
            Route::get('/my-booking',[UserController::class,'my_booking'])->name('my-booking');
            Route::post('/vehical-details/{id}',[UserController::class,'v_details_book'])->name('v-details-book');
            Route::get('/testimonial',[UserController::class,'testimonial'])->name('testimonial');
            Route::post('/testimonial',[UserController::class,'post_testimonial'])->name('post.testimonial');
            Route::get('/my-testimonial',[UserController::class,'my_testimonial'])->name('my-testimonial');
            Route::post('/subscribe',[AboutController::class,'subscribe'])->name('subscribe');
            Route::get('/booking/{id}',[UserController::class,'booking'])->name('booking');
           
        
        });
        
    });


// ************** Admin Authintication Pages ******************* //
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        
        Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function () {
            Route::get('/dashboard',[AdminController::class,'index'])->name('login');
        /* All Routes URL To Manage Brands In Admin Control Panel  (Create - Edit - Update - Delete) */
            Route::get('/brand/create',[BrandController::class,'create'])->name('brand.create');
            Route::post('/brand/create',[BrandController::class,'store'])->name('brand.create.post');
            Route::get('/brand',[BrandController::class,'index'])->name('brand.show');
            Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
            Route::post('/brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
            Route::get('/brand/delete/{id}',[BrandController::class,'destroy'])->name('brand.delete');
            /* All Routes URL To Manage Vehicles In Admin Control Panel  (Create - Edit - Update - Delete) */
            Route::get('/Vehicles/create',[VehiclesController::class,'create'])->name('Vehicles.create');
            Route::post('/Vehicles/create',[VehiclesController::class,'store'])->name('Vehicles.create.post');
            Route::get('/Vehicles',[VehiclesController::class,'index'])->name('Vehicles.show');
            Route::get('/Vehicles/edit/{id}',[VehiclesController::class,'edit'])->name('Vehicles.edit');
            Route::post('/Vehicles/update/{id}',[VehiclesController::class,'update'])->name('Vehicles.update');
            Route::get('/Vehicles/delete/{id}',[VehiclesController::class,'destroy'])->name('Vehicles.delete');
            /* All Routes URL To Manage Books In Admin Control Panel  */
            Route::get('/books',[BooksController::class,'index'])->name('books');
            Route::get('/books/{id}/{status}',[BooksController::class,'check'])->name('books.check');
            /* All Routes URL To Manage Testimonials In Admin Control Panel  */
            Route::get('/testimonials',[TestimonialsController::class,'index'])->name('testimonials');
            Route::get('/test/{id}/{status}',[TestimonialsController::class,'check'])->name('testimonials.check');
            /* All Routes URL To Manage Contact In Admin Control Panel  */
            Route::get('/contact',[AboutController::class,'contactUs'])->name('contact');
            Route::get('/contact/delete/{id}',[AboutController::class,'contactDelete'])->name('contact.delete');
            /* All Routes URL To Manage User In Admin Control Panel  */

            Route::get('admin/roles/{role}',[RoleController::class,'destroy'])->name('roles.destroyy');
            Route::resource('roles',RoleController::class);
            Route::resource('users',UserManagementUserController::class);
            /* All Routes URL To Manage Informations of App In Admin Control Panel  */
            Route::get('/information',[AboutController::class,'websiteInfo'])->name('websiteInfo');
            Route::get('/information/website',[AboutController::class,'data'])->name('websiteData');
            Route::post('/about-us/{id}',[AboutController::class,'postAboutUs'])->name('post.about');
            Route::post('/faqs/{id}',[AboutController::class,'postFaqs'])->name('post.faqs');
            Route::post('/privacy/{id}',[AboutController::class,'postPrivacy'])->name('post.privacy');
            Route::post('/terms/{id}',[AboutController::class,'postTerms'])->name('post.terms');
            Route::post('/information/{id}',[AboutController::class,'postWebsiteInfo'])->name('post.websiteInfo');
            /* All Routes URL To Manage Subscribers In Admin Control Panel  */
            Route::get('/subscribers',[AboutController::class,'subscribers'])->name('subscribers');
            Route::get('/subscribers/{id}',[AboutController::class,'deleteSubscribers'])->name('delete.subscribers');
            /* All Routes URL To Manage ADMIN PASSWORD AND PROFILE In Admin Control Panel  */
            Route::get('/profile',[AdminController::class,'indexAdmin'])->name('profile');
            Route::post('/profile',[AdminController::class,'update'])->name('profile.update');
            Route::get('/update-password',[AdminController::class,'passwordView'])->name('password');
            Route::post('/update-password',[AdminController::class,'updatePassword'])->name('passsword.update');
            /* All Routes URL To Manage Services In Admin Control Panel  */
            Route::get('/service/add',[ServiceController::class,'create'])->name('serviceCreate');
            Route::post('/service/add',[ServiceController::class,'store'])->name('serviceStore');
            Route::get('/service',[ServiceController::class,'index'])->name('service');
            Route::get('/service/edit/{id}',[ServiceController::class,'edit'])->name('serviceEdit');
            Route::post('/service/update/{id}',[ServiceController::class,'update'])->name('serviceUpdate');
            Route::get('/service/delete/{id}',[ServiceController::class,'destroy'])->name('serviceDelete');
            /* All Routes URL To Manage Payments In Admin Control Panel  */
             Route::get('/payment/add',[PaymentController::class,'create'])->name('paymentCreate');
             Route::post('/payment/add',[PaymentController::class,'store'])->name('paymentStore');
             Route::get('/payment',[PaymentController::class,'index'])->name('payment');
             Route::get('/payment/edit/{id}',[PaymentController::class,'edit'])->name('paymentEdit');
             Route::post('/payment/update/{id}',[PaymentController::class,'update'])->name('paymentUpdate');
             Route::get('/payment/delete/{id}',[PaymentController::class,'destroy'])->name('paymentDelete');
             /* All Routes URL To Manage Payments In Admin Control Panel  */
             Route::get('/place/add',[PlaceController::class,'create'])->name('placeCreate');
             Route::post('/place/add',[PlaceController::class,'store'])->name('placeStore');
             Route::get('/place',[PlaceController::class,'index'])->name('place');
             Route::get('/place/edit/{id}',[PlaceController::class,'edit'])->name('placeEdit');
             Route::post('/place/update/{id}',[PlaceController::class,'update'])->name('placeUpdate');
             Route::get('/place/delete/{id}',[PlaceController::class,'destroy'])->name('placeDelete');
        });
    });

require __DIR__.'/auth.php';
