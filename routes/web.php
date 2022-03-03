<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\ForgotPasswordController;

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\BrandController;
use App\Http\Controllers\Admin\Category\SubCategoryController;

use App\Http\Controllers\Admin\Category\CouponController;
use App\Http\Controllers\Admin\Subscriptions\NewsLetterController;


use App\Http\Controllers\Admin\AdminProductController;

Auth::routes(['verify'=>true]);

// Route::get('/email/verify', function () {
//         return view('auth.verify-email');
//     })->middleware('auth')->name('verification.notice');

Route::get('/', function () {return view('pages.index');})->name('imprint'
);
Route::get('/store', function () {return view('pages.product');})->name('pages.product');
//auth & user
Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/password-change', [HomeController::class,'changePassword'])->name('password.change');
Route::post('/password-update', [HomeController::class,'updatePassword'])->name('password.update');
Route::get('/user/logout',[HomeController::class,'Logout'])->name('user.logout');

//admin=======
Route::get('admin/home', [AdminController::class,'index']);
Route::get('admin', [LoginController::class,'showLoginForm'])->name('admin.login');
Route::post('admin', [LoginController::class,'login']);
        // Password Reset Routes...
Route::get('admin/password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('admin.password.request');
Route::post('admin-password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('admin.password.email');
Route::get('admin/reset/password/{token}', [ResetPasswordController::class,'showResetForm'])->name('admin.password.reset');
Route::post('admin/update/reset', [ResetPasswordController::class,'reset'])->name('admin.reset.update');
Route::get('/admin/Change/Password',[AdminController::class,'ChangePassword'])->name('admin.password.change');
Route::post('/admin/password/update',[AdminController::class,'Update_pass'])->name('admin.password.update'); 
Route::get('admin/logout', [AdminController::class,'logout'])->name('admin.logout');



// Admin Section
// Categories

Route::get('admin/categories',[CategoryController::class,'category'])->name('admin.categories');
Route::post('admin/store/category',[CategoryController::class,'storecategory'])->name('store.category');
Route::get('delete/category/{id}',[CategoryController::class,'Deletecategory']);
Route::get('edit/category/{id}',[CategoryController::class,'Editcategory']);
Route::post('update/category/{id}',[CategoryController::class,'Updatecategory']);



// Brand Routes
Route::get('admin/brands',[BrandController::class,'brand'])->name('brands');

Route::get('delete/brand/{id}',[BrandController::class,'DeleteBrand']);
Route::post('admin/store/brand',[BrandController::class,'storebrand'])->name('store.brand');
Route::get('edit/brand/{id}',[BrandController::class,'EditBrand']);
Route::post('update/brand/{id}',[BrandController::class,'UpdateBrand']);


// SubCategories

Route::get('admin/sub/category',[SubCategoryController::class,'subcategories'])->name('sub.categories');
Route::post('admin/store/subcategory',[SubCategoryController::class,'storesubcat'])->name('store.subcategory');
Route::get('delete/subcategory/{id}',[SubCategoryController::class,'DeleteSubcat']);
Route::get('edit/subcategory/{id}',[SubCategoryController::class,'EditSubcat']);
Route::post('update/subcategory/{id}',[SubCategoryController::class,'UpdateSubcat']);

// Coupon

Route::get('admin/sub/coupon',[CouponController::class,'coupon'])->name('admin.coupon');
Route::post('admin/store/coupon',[SubCategoryController::class,'StoreCoupon'])->name('store.coupon');
Route::get('delete/coupon/{id}',[SubCategoryController::class,'DeleteCoupon']);
Route::get('edit/coupon/{id}',[SubCategoryController::class,'EditCoupon']);
Route::post('update/coupon/{id}',[SubCategoryController::class,'UpdateCoupon']);

// Coupon

Route::get('admin/newletter',[NewsLetterController::class,'Newsletter'])->name('admin.newsletter');
Route::post('admin/delete/newsletter',[NewsLetterController::class,'DeleteSub']);
Route::post('sub/newsletter',[FrontController::class,'StoreNewsLetter'])->name('store.newsletter');


// Product Page
Route::get('admin/product/all', [AdminProductController::class,'index'])->name('all.product');
Route::get('admin/product/add', [AdminProductController::class,'create'])->name('add.product');
Route::post('admin/product/store', [AdminProductController::class,'store'])->name('store.product');

Route::get('inactive/product/{id}', [AdminProductController::class,'inactive']);
Route::get('active/product/{id}', [AdminProductController::class,'active']);
Route::get('delete/product/{id}', [AdminProductController::class,'DeleteProduct']);

Route::get('view/product/{id}', [AdminProductController::class,'ViewProduct']);
Route::get('edit/product/{id}', [AdminProductController::class,'EditProduct']);

Route::post('update/product/withoutphoto/{id}', [AdminProductController::class,'UpdateProductWithoutPhoto']);
Route::post('update/product/photo/{id}', [AdminProductController::class,'UpdateProductPhoto']);

//Wishlist

Route::get('add/wishlist/{id}',[WishListController::class,'addWishList']);
// Add To Cart

Route::get('add/to/cart/{id}',[CartController::class,'AddCart']);
Route::post('cart/product/add/{id}',[ProductController::class,'AddCart']);
Route::get('products/detail/{id}/{product_name}',[ProductController::class,'ProductView']);
Route::get('check',[CartController::class,'Check']);

// Cart Controller Stuff



Route::get('product/cart',[CartController::class,'ShowCart'])->name('show.cart');
Route::get('remove/cart/{rowid}',[CartController::class,'RemoveCart']);
Route::post('update/cart/item',[CartController::class,'UpdateCart'])->name('update.cartitem');
Route::get('product/quickview/{id}',[CartController::class,'QuickView']);
Route::post('product/insert/cart',[CartController::class,'InsertCart'])->name('insert.into.cart');
Route::get('product/checkout',[CartController::class,'CheckOut'])->name('user.checkout');





// Ajax

Route::get('get/subcategory/{category_id}',[AdminProductController::class,'GetSubcat']);


// Product details Page 
 Route::get('Store', [ProductController::class,'StoreView'])->name('storeview');
 Route::get('product/1/', [ProductController::class,'ProductView'])->name('productview');
Route::get('allcategory/{id}', [ProductController::class,'CategoryView']);
Route::get('PageRedirect',[ProductController::class,'ContactView'])->name('pageredirect');
Route::get('help/contactus',[ProductController::class,'ContactUsView'])->name('contactusview');
Route::get('About-Us',[ProductController::class,'AboutUsView'])->name('aboutview');
Route::get('order/checkout',[ProductController::class,'CheckOutView'])->name('checkoutview');
Route::get('order/confirmed/thankyou',[ProductController::class,'GreetingsView'])->name('greetingsview');
Route::get('orders/history',[ProductController::class,'OrdersView'])->name('ordersview');



// /Payment Setup




Route::get('securepaymensaddsat/encryptedtoken',[CartController::class,'PaymentPage'])->name('payment.step');
Route::post('securepayment/enccryptedtoken',[PaymentController::class,'Payment'])->name('payment.process');
Route::post('securepayment/stripe/charge',[PaymentController::class,'StripeCharge'])->name('stripe.charge');




