 <?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;


 
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


     //MY Category
     Route::controller(CategoryController::class)->group(function(){
        Route::get('/all/category' , 'AllCategory')->name('all.category');
        Route::get('/add/category' , 'AddCategory')->name('add.category');
        Route::post('/store/category' , 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}' , 'EditCategory')->name('edit.category');
        Route::post('/update/category' , 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}' , 'DeleteCategory')->name('delete.category');
    });

      //MY subCategory
      Route::controller(SubCategoryController::class)->group(function(){
        Route::get('/all/subcategory' , 'AllSubCategory')->name('all.subcategory');
        Route::get('/add/subcategory' , 'AddSubCategory')->name('add.subcategory');
        Route::post('/store/subcategory' , 'StoreSubCategory')->name('store.subcategory');
        Route::get('/edit/subcategory/{id}' , 'EditSubCategory')->name('edit.subcategory');
        Route::post('/update/subcategory' , 'UpdateSubCategory')->name('update.subcategory');
        Route::get('/delete/subcategory/{id}' , 'DeleteSubCategory')->name('delete.subcategory');
        //ajax reqest
        Route::get('/subcategory/ajax/{category_id}' , 'GetSubCategory');

    });

          //MY Product
          Route::controller(ProductController::class)->group(function(){
            Route::get('/all/product' , 'AllProduct')->name('all.product');
            Route::get('/add/product' , 'AddProduct')->name('add.product');
            Route::post('/store/product' , 'StoreProduct')->name('store.product');
            Route::get('/edit/product/{id}' , 'EditProduct')->name('edit.product');
            Route::post('/store/product' , 'StoreProduct')->name('store.product');
            
            Route::post('/update/update.product' , 'UpdateProduct')->name('update.product');
            Route::get('/delete/product/{id}' , 'DeleteProduct')->name('delete.product');
        });

});//end admin

//Frontend product details all route
Route::get('/product/details/{id}/{slug}',[IndexController::class,'ProductDetails']);


//product view model with ajax

Route::get('/product/view/model/{id}',[IndexController::class,'ProductViewAjax']);

//add to cart store
Route::post('/cart/data/store/{id}',[CartController::class,'AddToCart']);

//get data from  cart 
Route::get('product/mini/cart',[CartController::class,'AddMiniCart']);

//remove  cart 
Route::get('/minicart/product/remove/{rowId}',[CartController::class,'RemoveMiniCart']);

//product details cart 
Route::post('/dcart/data/store/{id}',[CartController::class,'AddMiniCartDetails']);



Route::middleware(['auth','role:user'])->group(function() {

   

   
   
 
   
    // Cart All Route 
   Route::controller(CartController::class)->group(function(){
       Route::get('/mycart' , 'MyCart')->name('myCart');
       Route::get('/get-cart-product' , 'GetCartProduct');
       Route::get('/cart-remove/{rowId}' , 'CartRemove');
       Route::get('/cart-dec/{rowId}' , 'CartDec');
       Route::get('/cart-inc/{rowId}' , 'CartInc');
     
       
   
   }); 
   
   
   
   
   }); // end group User middleware



require __DIR__.'/auth.php';
