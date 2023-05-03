<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\GenrateUniqueCodeController;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\admin\CustomerDetailsController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Auth\LoginController;
 use Auth;

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



Auth::routes();
  
    Route::get('/demo', [DemoController::class, 'demo']);



Route::prefix('admin')->controller(GenrateUniqueCodeController::class)->group(function () {
    Route::get('/genratepin','generateUniqueCode')->name('genratepin');
    Route::post('/genratepin/data', 'storepin')->name('genratepin.data');
});
Route::prefix('admin')->controller(HomeController::class)->group(function () {
    Route::get('/helpswitch','HelpSwitch')->name('helpswitch');
    Route::get('status/change/{user_Id}','UserStatus')->name('status');
});

});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
   
    route::name('customer_details.')->prefix('customer_details')->group(function(){
   
        route::get('CustomerDetails',[CustomerDetailsController::class,'CustomerDetails'])->name('CustomerDetails');


       
    });


});
 

