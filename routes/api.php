<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\Admin\ApiAdminController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\AddCourseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:passport')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['cors', 'json.response']], function () {

    Route::post('/user/login',[ApiAuthController::class,'login'])->name('login.api');
    Route::post('/user/register',[ApiAuthController::class,'register'])->name('register.api');

    Route::post('/admin/login',[ApiAdminController::class,'login']);
    Route::post('/admin/register',[ApiAdminController::class,'register']);
   

});
Route::middleware('auth:api')->group(function () {
 
    Route::post('/user/logout',[ApiAuthController::class,'logout'])->name('logout.api');
    Route::post('/admin/logout',[ApiAdminController::class,'logout']);
});


// Route::middleware('auth:api')->group(function () {
//     Route::get('/admins', [AdminController::class,'index'])->name('admins');
// });


Route::get('/admins', [AdminController::class,'index'])->middleware('api.admin')->name('admins');

Route::get('/admin/checkProfile', [ProfileController::class,'checkProfile']);
