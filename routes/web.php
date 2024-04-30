<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KinerjaController;
use App\Http\Controllers\PengukuranController;
use App\Http\Controllers\AssetMenuController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\KomisioningController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SmartSoil1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.index');
// });

Route::group(['middleware' => ['guest']], function () {
    /**
     * Register Routes
     */

    /**
     * Login Routes
     */
    // Route::get('/', [LoginController::class, 'showLoginForm'])->name('loginform');
    Route::post('loginPost', [LoginController::class, 'login'])->name('login');
});

// Route::get('/', [LoginController::class, 'showLoginForm'])->name('loginform');
// Route::post('loginPost', [LoginController::class, 'login'])->name('login');

Route::get('/', [SmartSoil1::class, 'indexHome'])->name('indexHome');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'Superadmin', 'middleware' => ['auth', 'role:superadmin']], function () {

    Route::get('Dahsboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('Pengukuran', [PengukuranController::class, 'index'])->name('pengukuran');
    Route::get('Kinerja', [KinerjaController::class, 'index'])->name('kinerja');
    Route::get('WorkOrder', [WorkOrderController::class, 'index'])->name('WOIndex');
    Route::get('AssetKeypoint', [AssetMenuController::class, 'index'])->name('AssetMenu');
    Route::get('RTU', [AssetMenuController::class, 'RTU'])->name('rtu');
    Route::get('Rectifier', [AssetMenuController::class, 'rectifier'])->name('rectifier');
    Route::get('Battery', [AssetMenuController::class, 'Battere'])->name('battery');
    Route::get('Server', [AssetMenuController::class, 'server'])->name('server');
    Route::get('Gateway', [AssetMenuController::class, 'gateway'])->name('gateway');
    Route::get('Radio', [AssetMenuController::class, 'radio'])->name('radio');
    Route::get('DataTagging', [AssetMenuController::class, 'tagging'])->name('tagging');
    Route::get('Komisioning', [KomisioningController::class, 'index'])->name('Komisioning');

    //SmartSoil
    Route::get('SmartSoil1',[SmartSoil1::class,'index'])->name('smartsoil1.index');
    Route::get('InputSmartSoil',[SmartSoil1::class,'InputManual'])->name('input.smartsoil1');
    Route::post('StoreDataSmartSoil',[SmartSoil1::class, 'storeData'])->name('store.data');
    
    Route::get('SmartSoil2',[SmartSoil1::class,'index2'])->name('smartsoil2.index');


});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/home2', function () {

    return view('admin.index');
})->name('Home');

Route::get('/about', function () {
    return view('about');
})->name('about');
