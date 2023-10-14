<?php

use Illuminate\Support\Facades\Route;

//frontsite
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Frontsite\AppointmentController;

//backsite
use App\Http\Controllers\Backsite\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::resource('/', LandingController::class);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    //appointment page
    Route::resource('appointment', AppointmentController::class);

    //payment page
    Route::resource('payment', PaymentController::class);

});

Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function(){
    
    // return view('dashboard');

    //dashboard
    Route::resource('dashboard', DashboardController::class);

});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
