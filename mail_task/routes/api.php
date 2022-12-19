<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customer/list',[PagesController::class,'APIList']);
Route::get('/admin/list',[PagesController::class,'APIListadmin']);
Route::get('/student/list',[PagesController::class,'APIListStudent']);

Route::post('/customer/list',[PagesController::class,'APIgetRegister']); 