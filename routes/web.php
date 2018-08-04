<?php

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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/cart', 'HomeController@cart')->name('viewcart');
Route::resource('/carts', 'CartsController');
Route::post('/carts', 'CartsController@addCart')->name('carts.add');
Route::post('/carts/minus', 'CartsController@minus')->name('carts.minus');
Route::post('/carts/plus', 'CartsController@plus')->name('carts.plus');
Route::post('/carts/clear', 'CartsController@clear')->name('carts.clear');
Route::post('/carts/checkout', 'CartsController@checkout')->name('carts.checkout');
Route::post('products/color/sizes', 'HomeController@color_sizes')->name('carts.color_sizes');

Route::prefix('admin')->group(function () {
    
    // Authentication Routes...
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
   
    Route::group(['middleware' => ['admin.auth']], function () {
        Route::get('/home', 'Admin\ProductsController@index')->name('dashboard');
        // Images Product
        Route::get('/products/images/{id}', 'Admin\ProductsController@showImages')->name('products.showImages');
        Route::delete('/products/images/{id}', 'Admin\ProductsController@destroyImages')->name('products.destroyImages');
        Route::post('/products/images/{id}', 'Admin\ProductsController@storeImages')->name('products.storeImages');

        
        // Product
        Route::resource('/products', 'Admin\ProductsController');
        Route::post('/products/detail/{id}', 'Admin\ProductsController@storeDetail')->name('products.storeDetail');
        Route::delete('/products/detail/{id}', 'Admin\ProductsController@destroyDetail')->name('products.delDetail');
        Route::put('/products/detail/{id}', 'Admin\ProductsController@updateDetail')->name('products.updateDetail');
        Route::get('/products/detail/{id}', 'Admin\ProductsController@showDetail')->name('products.showDetail');
        Route::get('/data', 'Admin\ProductsController@getList')->name('admin.data');
        Route::get('/data_detail/{id}', 'Admin\ProductsController@getListDetail')->name('admin.data_detail');

        // Color
        Route::get('/data/colors', 'Admin\ColorsController@getList')->name('colors.data');
        Route::resource('colors', 'Admin\ColorsController');
       
         // Size
        Route::get('/data/sizes', 'Admin\SizesController@getList')->name('sizes.data');
        Route::resource('sizes', 'Admin\SizesController');

         // Vnedor
        Route::get('/data/vendors', 'Admin\VendorsController@getList')->name('vendors.data');
        Route::resource('vendors', 'Admin\VendorsController');
        Route::post('/edit/vendors/{id}', 'Admin\VendorsController@update')->name('vendors.edit');


        Route::resource('/category', 'Admin\CategoriesController');
        Route::get('/data/categories', 'Admin\CategoriesController@getList')->name('admin.data.categories');
        Route::resource('/tags', 'Admin\CategoriesController');
        Route::post('/products/uploadimage','Admin\ProductsController@uploadImg')->name('products.uploadImg');
        Route::get('products/slug/{name}', 'Admin\ProductsController@convert_slug');

        // Orders
        Route::resource('/orders', 'Admin\OrdersController');
        Route::get('/orders/data_orders', 'Admin\OrdersController@index')->name('orders.data');
        Route::get('/data_orders','Admin\OrdersController@getList');
        Route::get('/data_order_products/{id}','Admin\OrdersController@getListProduct');

        // Analysis
        Route::get('analysis', 'Admin\AnalysisController@index')->name('analysis.index');
        Route::post('analysis', 'Admin\AnalysisController@search')->name('analysis.search');
        Route::get('analysis_products', 'Admin\AnalysisController@analysis_products')->name('analysis.products');
        Route::get('selling products', 'Admin\AnalysisController@selling products')->name('analysis.selling products');

    Route::resource('tags', 'Admin\TagsController');

    });

    
    // Registration Routes...
    Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Admin\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Admin\ResetPasswordController@reset');
    Route::get('view-category', 'Admin\CategoriesController@viewCategory');
    Route::match(['get','post'],'add-category', 'Admin\CategoriesController@addCategory');
    Route::match(['get','post'],'edit-category/{id}', 'Admin\CategoriesController@editCategory');
    Route::match(['get','post'],'delete-category/{id}', 'Admin\CategoriesController@deleteCategory');
   

     
    
});

// Login with google
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('products/{slug}', 'HomeController@product_detail')->name('product.detail');
Route::get('products/quickview/{slug}', 'HomeController@quickview')->name('product.quickview');
 

