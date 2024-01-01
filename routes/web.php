<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopWiseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthCustomerController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AjaxController;


Route::get('/register-email-check', [AjaxController::class, 'index']);

Route::get('/', [ShopWiseController::class, 'index'])->name('home');
Route::get('/detail/{id}', [ShopWiseController::class, 'detail'])->name('detail');
Route::get('/category/product/{id}', [ShopWiseController::class, 'category'])->name('category');

Route::post('/cart/add/{id}', [CartController::class, 'index'])->name('cart.add');
Route::get('/cart/show-item', [CartController::class, 'show'])->name('cart.show');
Route::get('/cart/remove-item/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/header/cart/remove-item/{id}', [CartController::class, 'headerCartRemove'])->name('header.cart.item.remove');
Route::post('/cart/update-item/{id}', [CartController::class, 'update'])->name('cart.update');

Route::post('/auth/sign-in', [AuthCustomerController::class, 'login'])->name('customer.login');
Route::post('/auth/sign-up', [AuthCustomerController::class, 'registration'])->name('register');
Route::get('/auth/log-out', [AuthCustomerController::class, 'logout'])->name('customer.logout');
Route::get('/customer/dashboard', [CustomerDashboardController::class, 'dashboard'])->name('customer.dashboard');

Route::get('/wishlist/add', [WishlistController::class, 'index'])->name('wishlist.add');
Route::get('/wishlist/create/{id}', [WishlistController::class, 'create'])->name('wishlist.create');
Route::get('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/new-order', [CheckoutController::class, 'newOrder'])->name('new.order');
Route::get('/complete-order', [CheckoutController::class, 'completeOrder'])->name('order.order');
Route::get('/customer/email/check', [CheckoutController::class, 'check'])->name('customer.email.check');

Route::get('/redirect/google', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/callback/google', [SocialController::class, 'callbackGoogle'])->name('redirect.callback');

Route::post('/search', [SearchController::class, 'index'])->name('search');
Route::get('/product/search', [SearchController::class, 'product'])->name('product.search');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/sub-category/add', [SubCategoryController::class, 'index'])->name('sub-category.add');
    Route::post('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub-category.create');
    Route::get('/sub-category/manage', [SubCategoryController::class, 'manage'])->name('sub-category.manage');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/unit/add', [UnitController::class, 'index'])->name('unit.add');
    Route::post('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::get('/unit/manage', [UnitController::class, 'manage'])->name('unit.manage');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/brand/add', [BrandController::class, 'index'])->name('brand.add');
    Route::post('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/brand/manage', [BrandController::class, 'manage'])->name('brand.manage');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/product/add', [ProductController::class, 'index'])->name('product.add');
    Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/manage', [ProductController::class, 'manage'])->name('product.manage');
    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

    Route::get('/order/manage', [OrderController::class, 'index'])->name('order.manage');
    Route::get('/admin/order/detail{id}', [OrderController::class, 'detail'])->name('admin.order.detail');
    Route::get('/admin/order/invoice/{id}', [OrderController::class, 'invoice'])->name('admin.order.invoice');
    Route::get('/admin/invoice/download/{id}', [OrderController::class, 'download'])->name('admin.invoice.download');
    Route::get('/admin/order/edit/{id}', [OrderController::class, 'edit'])->name('admin.order.edit');
    Route::post('/admin/order/update/{id}', [OrderController::class, 'update'])->name('admin.order.update');
    Route::get('/admin/order/delete/{id}', [OrderController::class, 'delete'])->name('admin.order.delete');

    Route::middleware( ['authorized'])->group(function(){
        Route::get('/user/add', [UserController::class, 'index'])->name('user.add');
        Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });


    Route::get('/customer/manage', [CustomerController::class, 'customerManage'])->name('customer.manage');
    Route::get('/customer/detail/{id}', [CustomerController::class, 'detail'])->name('customer.detail');
});
