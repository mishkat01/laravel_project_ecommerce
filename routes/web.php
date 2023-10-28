 <?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\BrandController;


 
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

Route::get('/', function () {
    return view('frontend.index');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//*****MY router started**** */

//**admin*** */



Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin']);



Route::middleware(['auth'])->group(function(){
     Route::get('/dashboard',[UserController::class,'UserDashboard'])->name('dashboard');
     Route::get('/user/logout',[UserController::class,'UserDestroy'])->name('user.logout');

});


Route::middleware(['auth','role:admin'])->group(function(){

     //MY brands
Route::controller(BrandController::class)->group(function(){
    Route::get('/all/brand' , 'AllBrand')->name('all.brand');
    Route::get('/add/brand' , 'AddBrand')->name('add.brand');
    Route::post('/store/brand' , 'StoreBrand')->name('store.brand');
    Route::get('/edit/brand/{id}' , 'EditBrand')->name('edit.brand');
    Route::post('/update/brand' , 'UpdateBrand')->name('update.brand');
    Route::get('/delete/brand/{id}' , 'DeleteBrand')->name('delete.brand');
});
});
require __DIR__.'/auth.php';
