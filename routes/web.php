<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GenrateUniqueCodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\PinHistoryController;




use App\Http\Controllers\admin\CustomerDetailsController;
use App\Http\Controllers\admin\ForgotPasswordController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\deshboard\DeshboardController;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Auth\LoginController;
 
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
//user side index route call by defalut

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
});

Route::prefix('admin')->group(function () {
    Route::get('/genratepin', [GenrateUniqueCodeController::class, 'generateUniqueCode'])->name('genratepin');
    Route::post('/genratepin/data', [GenrateUniqueCodeController::class, 'storepin'])->name('genratepin.data');
    Route::get('/helpswitch', [HomeController::class, 'HelpSwitch'])->name('helpswitch');
    Route::get('status/change/{user_Id}', [HomeController::class,'UserStatus'])->name('status');
    Route::get('/pinhistory', [PinHistoryController::class,'SearchPin'])->name('pinhistory');

});
Route::get('/',[UserController::class,'index'])->name('index');


  
Route::get('/demo', [DemoController::class, 'demo']);
Route::name('auth.')->prefix('auth')->group(function(){
    Route::get('/reset', [PasswordResetController::class, 'reset'])->name('reset');
    Route::POST('/store', [PasswordResetController::class, 'store'])->name('store');

});


    Auth::routes();
Route::prefix('admin')->controller(GenrateUniqueCodeController::class)->group(function () {
    Route::get('/genratepin','generateUniqueCode')->name('genratepin');
    Route::post('/genratepin/data', 'storepin')->name('genratepin.data');
});
Route::prefix('admin')->controller(HomeController::class)->group(function () {
    Route::get('/helpswitch','HelpSwitch')->name('helpswitch');
    Route::get('status/change/{user_Id}','UserStatus')->name('status');
});



// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::name('customer_details.')->prefix('customer_details')->group(function(){
        Route::get('CustomerDetails',[CustomerDetailsController::class,'CustomerDetails'])->name('CustomerDetails');

    });
    Route::name('forgotpassword.')->prefix('forgotpassword')->group(function(){
        Route::get('forgotpassword',[ForgotPasswordController::class,'forgotpassword'])->name('forgotpassword');
        Route::POST('passwordupdate',[ForgotPasswordController::class,'passwordupdate'])->name('passwordupdate');
    
    });
});

/*
|--------------------------------------------------------------------------
|User All Routes Here..
|--------------------------------------------------------------------------
|
*/
Route::name('user.')->prefix('user')->group(function(){
    Route::name('layouts.')->prefix('layouts')->group(function(){
        Route::get('index', [UserController::class, 'index'])->name('index');             
    });
    Route::name('dashboard.')->prefix('dashboard')->group(function(){
        Route::get('/', [DeshboardController::class, 'dashboard'])->name('show');           


});
 


    Route::get('login', [UserController::class, 'login'])->name('login');  
    Route::get('register', [UserController::class, 'register'])->name('register');  
});

