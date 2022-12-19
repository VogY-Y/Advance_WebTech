<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MailControllerTask;


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

//Route::get('/', function () {
    //return view('welcome');
//});

// this is new route , first show the home page
Route::get('/', function () {
    return view('Home');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/register', function () {
    return view('register');
});

//Route::get('/registration', function () {
    //return view('registration');
//});

// pass value from view to controller
Route::get('/registration', [PagesController::class,'registration'])->middleware('checkprofile');
Route::post('/register', [PagesController::class,'getRegister'])->middleware('checkprofile');
Route::get('/register', [PagesController::class,'getRegister'])->middleware('checkprofile');

//Route::get('/test','PagesController@Hello')->name('hello');

//Route::get('/test',[PagesController::class,'Hello']); // it works

//Route::get('/test',[PagesController::class,'Hello2']);

//Route::get('/test',[PagesController::class,'Hello3']);

//Route::get('/test',[PagesController::class,'Hello4']);

Route::get('/login', function () { // here
    return view('login');
})->middleware('checkprofile');

Route::get('/Update', function () {
    return view('Update');
});

Route::post('/login', [LoginController::class,'checklogin']);



Route::post('/Update',[UpdateController::class,'getUpdate']);

Route::get('/logout',[LoginController::class,'logoutOp']); //for logout

// Route::get('/registration','PagesController@registration')
// ->middleware('checkage');;

Route::get('/profile',[LoginController::class,'profiledir'])->middleware('checklogin'); //middlewarecheck ..we cannot go to profile page with oout login



// Route::get('/logout', function () {
//     return view('logout');
// });


// helps to redirect page
// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');


//just check
Route::get('/admin_test',[PagesController::class,'admin_check']);

Route::get('/customer_reg', function () {
    return view('customer_reg');
});

Route::get('/testing', function () {
    return view('testing');
});

//api

Route::get('/apt', function () {
    return view('apitest');
});

Route::get('/aptP', function () {
    return view('apitest_P');
});

// react 
Route::get('/react_t', function () {
    return view('react');
});

Route::get('/reactAdmin', function () {
    return view('react_admin');
});

Route::get('/reactCustomer', function () {
    return view('react_customer');
});

Route::get('/reactStudent', function () {
    return view('react_student');
});

// send mail

Route::get('/sendemail', [MailController::class,'index']);
Route::post('/sendemail/send',[MailController::class,'send']);

