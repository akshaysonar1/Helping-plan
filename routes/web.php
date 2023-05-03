<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GenrateUniqueCodeController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {


Route::prefix('admin')->controller(GenrateUniqueCodeController::class)->group(function () {
    Route::get('/genratepin','generateUniqueCode')->name('genratepin');
    Route::post('/genratepin/data', 'storepin')->name('genratepin.data');
});
Route::prefix('admin')->controller(HomeController::class)->group(function () {
    Route::get('/helpswitch','HelpSwitch')->name('helpswitch');
    Route::get('status/change/{user_Id}','UserStatus')->name('status');
});

});