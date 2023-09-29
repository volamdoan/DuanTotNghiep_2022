<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\OrderDetailController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\client\CouponTestController;
use App\Http\Controllers\Auth\SociaController;
// use App\Http\Controllers\client\ShopController;
// use App\Http\Controllers\client\ProductCateController;
use App\Http\Controllers\client\ProfileController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\ShopController;
use App\Http\Controllers\client\BlogController;
use App\Http\Controllers\client\PageController;
use Illuminate\Support\Facades\Auth;


Auth::routes(['verify' => true]);
//Auth
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // product
    Route::get('/show-product', [ProductController::class, 'index']);
    Route::get('/product', [ProductController::class, 'addProduct']);
    Route::post('/product', [ProductController::class, 'store']);
    Route::get('/product/{id}', [ProductController::class, 'updated']);
    Route::post('/product/{id}', [ProductController::class, 'edit']);
    Route::get('/deletedProduct/{id}', [ProductController::class, 'destroy']);
    //category
    Route::get('/show-category', [CategoryController::class, 'index']);
    Route::get('/category', [CategoryController::class, 'addCategory']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::get('/category/{id}', [CategoryController::class, 'updated']);
    Route::post('/category/{id}', [CategoryController::class, 'edit']);

    Route::get('/deletedCate/{id}', [CategoryController::class, 'destroy']);
    //posts
    Route::get('/show-posts', [PostsController::class, 'index']);
    Route::get('/posts', [PostsController::class, 'addPosts']);
    Route::post('/posts', [PostsController::class, 'store']);
    Route::post('/posts/{id}', [PostsController::class, 'updated']);
    Route::get('/posts/{id}', [PostsController::class, 'edit']);
    Route::get('/deleted/{id}', [PostsController::class, 'destroy']);
    // Brand
    Route::get('/show-brand', [BrandController::class, 'index']);
    Route::get('/brand', [BrandController::class, 'create']);
    Route::post('/brand', [BrandController::class, 'store']);
    Route::get('/edit/brand/{id}', [BrandController::class, 'edit']);
    Route::post('/edit/brand/{id}', [BrandController::class, 'update']);
    Route::get('/deleteBrand/{id}', [BrandController::class, 'destroy']);
    //admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::post('/filter', [AdminController::class, 'filter']);
    Route::post('/dashboard-filter', [AdminController::class, 'dashboard_filter']);
    Route::post('/day-order', [AdminController::class, 'dayorder']);
    //order
    Route::get('/show-order', [OrderController::class, 'index']);
    Route::get('/show-order/{id}', [OrderController::class, 'create']);
    Route::post('/show-order/{id}', [OrderController::class, 'store']);
    Route::get('/deleteOrder/{id}', [OrderController::class, 'destroy']);
    //orderDetail
    Route::get('/show-orderDetail/{id}', [OrderDetailController::class, 'index']);
    // Route::post('/admin/show-orderDetail', [OrderDetailController::class, 'store']);
    Route::get('/deleteOrderDetail/{id}', [OrderDetailController::class, 'destroy']);
    //Coupon
    Route::get('/show-coupon', [CouponController::class, 'index']);
    Route::get('/coupon', [CouponController::class, 'create']);
    Route::post('/coupon', [CouponController::class, 'store']);
    Route::get('/deleteCoupon/{id}', [CouponController::class, 'destroy']);
    //user
    Route::get('/show-user', [UserController::class, 'index']);
    Route::get('/show-user/{id}', [UserController::class, 'showUpdate']);
    Route::post('/show-user/{id}', [UserController::class, 'edit']);
    //banner
    Route::get('/show-banner', [BannerController::class, 'index']);
    Route::get('/banner', [BannerController::class, 'create']);
    Route::post('/banner', [BannerController::class, 'store']);
    Route::get('/banner/{id}', [BannerController::class, 'edit']);
    Route::post('/banner/{id}', [BannerController::class, 'updated']);
    Route::get('/deleteBanner/{id}', [BannerController::class, 'destroy']);
});


//Phần người dùng
Route::get('/', [ClientController::class, 'index']);
Route::get('/productDetail/{id}', [ClientController::class, 'productDetail']);
// Cart
Route::get('/AddCart/{id}/{sl}/{sized}/{color}', [CartController::class, 'AddCart']);
Route::get('/DeleteCart/{id}{sized}{color}', [CartController::class, 'DeletedCart']);
Route::get('/xoahet', [CartController::class, 'Xoahet']);
Route::get('/listCart', [CartController::class, 'listCart']);
Route::get('/DeleteListCart/{id}', [CartController::class, 'DeletedListCart']);
Route::get('/SaveListCart/{id}/{quantily}', [CartController::class, 'SaveListCart']);
Route::get('/checkout_coupon', [CartController::class, 'checkout_coupon_list']);
// Route::get('/AddDetail/{id}/{quantily}/{size}/{color}', [CartController::class, 'AddDetailProduct']);
//profile
Route::get('/profile/edit_profile', [ProfileController::class, 'edit_profile']);
//sửa profile
Route::put('/profile/edit_profile', [ProfileController::class, 'update_profile']);
//password
Route::get('/profile/change-password', [ProfileController::class, 'change_password']);
Route::post('/profile/update-password', [ProfileController::class, 'update_password']);
//checkout
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::post('/checkout', [CheckoutController::class, 'create']);
Route::post('/city/{matp}', [CheckoutController::class, 'vietnam_city']);
Route::post('/district/{maqh}', [CheckoutController::class, 'ward']);
Route::get('/show_name/{matp}', [CheckoutController::class, 'show_name']);
//
Route::post('/checkout_coupon', [CheckoutController::class, 'checkout_coupon']);
Route::get('/unset_coupon', [CheckoutController::class, 'unset_coupon']);
Route::get('/after-check/{id}', [CheckoutController::class, 'afterCheck']);
//giới thiệu
Route::get('/about-us', [ClientController::class, 'about_us']);
//bài viết
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/blog/news/{slug}', [BlogController::class, 'news']);
//footer
Route::get('/chinh-sach-su-dung-website', [PageController::class, 'chinhsachsudungweb']);
Route::get('/phuong-thuc-thanh-toan', [PageController::class, 'phuongthucthanhtoan']);
Route::get('/chinh-sach-doi-tra', [PageController::class, 'chinhsachdoitra']);
Route::get('/chinh-sach-giao-hang', [PageController::class, 'chinhsachgiaohang']);
Route::get('/dieu-khoan-su-dung', [PageController::class, 'dieukhoansudung']);
Route::get('/huong-dan-mua-hang', [PageController::class, 'huongdanmuahang']);
Route::get('/chinh-sach-bao-mat', [PageController::class, 'chinhsachbaomat']);
// Route::post('/checkout_coupon', [CouponTestController::class, 'checkout_coupon']);


//auth profile
Route::prefix('profile')->middleware('auth')->group(function () {
    //profile
    Route::get('/edit_profile', [ProfileController::class, 'edit_profile'])->name('profile.editprofile');
    //sửa profile
    Route::post('update_profile_info', [ProfileController::class, 'update_profile'])->name('profile.update_info');
    Route::post('change-profile-picture', [ProfileController::class, 'update_picture'])->name('profile.update_picture');
    //password
    Route::get('change-password', [ProfileController::class, 'change_password'])->name('profile.editpassword');
    Route::post('change-password', [ProfileController::class, 'update_password'])->name('profile.update_password');
});

//Login bằng Facebook
Route::get('auth/facebook', [SociaController::class, 'FacebookRedirect']);
Route::get('auth/facebook/callback', [SociaController::class, 'loginWithFacebook']);
//Login Bằng Google
Route::get('auth/google', [SociaController::class, 'GoogleRedirect']);
Route::get('auth/google/callback', [SociaController::class, 'loginWithGoogle']);
//contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send', [ContactController::class, 'send'])->name('send.email');
//Shop
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop_saled', [ShopController::class, 'saled']);

Route::get('/sanpham/{id}', [ShopController::class, 'product_cate']);
