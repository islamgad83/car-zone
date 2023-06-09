<?php

use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\Frontend\HomeBlogController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AdminUserController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\ShippingAreaController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\BotManController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\WishlistController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\CashController;
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
//Route::get('/', function () {
//    return view('welcome');
//});
// Admin All Route -------------------------------------------------------------------------
Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function()
{
    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminProfileController::class, 'adminProfileEdit'])->name('admin.profile.edit');
    Route::post('/admin/profile/store', [AdminProfileController::class, 'adminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminProfileController::class, 'adminChangePassword'])->name('admin.changePassword');
    Route::post('/admin/update/password', [AdminProfileController::class, 'adminUpdatePassword'])->name('admin.updatePassword');
    Route::get('/admin/dashboard', [AdminProfileController::class, 'dashboardData']);

//=======================================================================================================================================
    // Admin All Brand Route =======================
    Route::prefix('brand')->group(function (){
        Route::get('/view', [BrandController::class, 'brandView'])->name('all.brand');
        Route::post('/store', [BrandController::class, 'brandStore'])->name('brand.store');
        Route::get('/edit/{id}', [BrandController::class, 'brandEdit'])->name('brand.edit');
        Route::post('/update/{id}',[BrandController::class, 'brandUpdate']);
        Route::get('/delete/{id}', [BrandController::class, 'brandDelete'])->name('brand.delete');

    });

// Admin All Category Route =======================
    Route::prefix( 'category')->group(function (){
        Route::get('/view', [CategoryController::class, 'categoryView'])->name('all.category');
        Route::post('/store', [CategoryController::class, 'categoryStore'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
        Route::post('/update/{id}',[CategoryController::class, 'categoryUpdate'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');

//    All SubCategory Routes
        Route::get('/sub/view', [SubCategoryController::class, 'subCategoryView'])->name('all.subcategory');
        Route::post('/sub/store', [SubCategoryController::class, 'subCategoryStore'])->name('subcategory.store');
        Route::get('/sub/edit/{id}', [SubCategoryController::class, 'subCategoryEdit'])->name('subcategory.edit');
        Route::post('/update', [SubCategoryController::class, 'subCategoryUpdate'])->name('subcategory.update');
        Route::get('/sub/delete/{id}', [SubCategoryController::class, 'subCategoryDelete'])->name('subcategory.delete');

//    All Sub - SubCategory Routes
        Route::get('/sub/sub/view', [SubCategoryController::class, 'subSubCategoryView'])->name('all.subSubcategory');
        Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'getSubCategory']);
        Route::get('/sub-subcategory/ajax/{subcategory_id}', [SubCategoryController::class, 'getSubSubCategory']);

        Route::post('/sub/sub/store', [SubCategoryController::class, 'subSubCategoryStore'])->name('subSubcategory.store');
        Route::get('/sub/sub/edit/{id}', [SubCategoryController::class, 'subSubCategoryEdit'])->name('subSubcategory.edit');
        Route::post('/sub/update', [SubCategoryController::class, 'subSubCategoryUpdate'])->name('subSubcategory.update');
        Route::get('/sub/sub/delete/{id}', [SubCategoryController::class, 'subSubCategoryDelete'])->name('subSubcategory.delete');
    });

// Admin All Products Route =======================
    Route::prefix('product')->group(function (){
        Route::get('/add', [ProductController::class, 'addProduct'])->name('add_products');
        Route::get('/manage', [ProductController::class, 'manageProduct'])->name('manage.product');
        Route::post('/store', [ProductController::class, 'productStore'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
        Route::post('/update',[ProductController::class, 'productUpdate'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
        Route::post('/image/update', [ProductController::class, 'multiImageUpdate'])->name('update-product-image');
        Route::post('/thambnail/update', [ProductController::class, 'thambnailImageUpdate'])->name('update-product-thambnail');
        Route::get('/multiimg/delete/{id}', [ProductController::class, 'multiImageDelete'])->name('product.multiimg.delete');

        Route::get('/inactive/{id}', [ProductController::class, 'productInactive'])->name('product.inactive');
        Route::get('/active/{id}', [ProductController::class, 'productActive'])->name('product.active');
    });

// Admin All Brand Route =======================
    Route::prefix('slider')->group(function (){
        Route::get('/view', [SliderController::class, 'sliderView'])->name('manage.slider');
        Route::post('/store', [SliderController::class, 'sliderStore'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'sliderEdit'])->name('slider.edit');
        Route::post('/update',[SliderController::class, 'sliderUpdate'])->name('slider.update');
        Route::get('/delete/{id}', [SliderController::class, 'sliderDelete'])->name('slider.delete');
        Route::get('/inactive/{id}', [SliderController::class, 'sliderInactive'])->name('slider.inactive');
        Route::get('/active/{id}', [SliderController::class, 'sliderActive'])->name('slider.active');
    });

    // Admin Coupons All Routes
    Route::prefix('coupons')->group(function(){
        Route::get('/view', [CouponController::class, 'couponView'])->name('manage-coupon');
        Route::post('/store', [CouponController::class, 'couponStore'])->name('coupon.store');
        Route::get('/edit/{id}', [CouponController::class, 'couponEdit'])->name('coupon.edit');
        Route::post('/update/{id}', [CouponController::class, 'couponUpdate'])->name('coupon.update');
        Route::get('/delete/{id}', [CouponController::class, 'couponDelete'])->name('coupon.delete');
    });


// Admin Shipping All Routes
    Route::prefix('shipping')->group(function(){
        Route::get('/division/view', [ShippingAreaController::class, 'divisionView'])->name('manage-division');
        Route::post('/division/store', [ShippingAreaController::class, 'divisionStore'])->name('division.store');
        Route::get('/division/edit/{id}', [ShippingAreaController::class, 'divisionEdit'])->name('division.edit');
        Route::post('/division/update/{id}', [ShippingAreaController::class, 'divisionUpdate'])->name('division.update');
        Route::get('/division/delete/{id}', [ShippingAreaController::class, 'divisionDelete'])->name('division.delete');

    });

// Ship District
    Route::get('/district/view', [ShippingAreaController::class, 'DistrictView'])->name('manage-district');
    Route::post('/district/store', [ShippingAreaController::class, 'districtStore'])->name('district.store');
    Route::get('/district/edit/{id}', [ShippingAreaController::class, 'districtEdit'])->name('district.edit');
    Route::post('/district/update/{id}', [ShippingAreaController::class, 'districtUpdate'])->name('district.update');
    Route::get('/district/delete/{id}', [ShippingAreaController::class, 'districtDelete'])->name('district.delete');



// Ship State
    Route::get('/state/view', [ShippingAreaController::class, 'stateView'])->name('manage-state');
    Route::post('/state/store', [ShippingAreaController::class, 'stateStore'])->name('state.store');
    Route::get('/state/edit/{id}', [ShippingAreaController::class, 'stateEdit'])->name('state.edit');
    Route::post('/state/update/{id}', [ShippingAreaController::class, 'stateUpdate'])->name('state.update');
    Route::get('/state/delete/{id}', [ShippingAreaController::class, 'stateDelete'])->name('state.delete');

    // Admin Order All Routes

    Route::prefix('orders')->group(function(){
        Route::get('/pending/orders', [OrderController::class, 'pendingOrders'])->name('pending-orders');
        Route::get('/pending/orders/details/{order_id}', [OrderController::class, 'pendingOrdersDetails'])->name('pending.order.details');
        Route::get('/confirmed/orders', [OrderController::class, 'confirmedOrders'])->name('confirmed-orders');
        Route::get('/processing/orders', [OrderController::class, 'processingOrders'])->name('processing-orders');
        Route::get('/picked/orders', [OrderController::class, 'pickedOrders'])->name('picked-orders');
        Route::get('/shipped/orders', [OrderController::class, 'shippedOrders'])->name('shipped-orders');
        Route::get('/delivered/orders', [OrderController::class, 'deliveredOrders'])->name('delivered-orders');
        Route::get('/cancel/orders', [OrderController::class, 'cancelOrders'])->name('cancel-orders');
        // Update Status
        Route::get('/pending/confirm/{order_id}', [OrderController::class, 'pendingToConfirm'])->name('pending-confirm');
        Route::get('/confirm/processing/{order_id}', [OrderController::class, 'confirmToProcessing'])->name('confirm.processing');
        Route::get('/processing/picked/{order_id}', [OrderController::class, 'processingToPicked'])->name('processing.picked');
        Route::get('/picked/shipped/{order_id}', [OrderController::class, 'pickedToShipped'])->name('picked.shipped');
        Route::get('/shipped/delivered/{order_id}', [OrderController::class, 'shippedToDelivered'])->name('shipped.delivered');
        Route::get('/invoice/download/{order_id}', [OrderController::class, 'adminInvoiceDownload'])->name('invoice.download');
    });

    // Admin Reports Routes
    Route::prefix('reports')->group(function(){
        Route::get('/view', [ReportController::class, 'reportView'])->name('all-reports');
        Route::post('/search/by/date', [ReportController::class, 'reportByDate'])->name('search-by-date');
        Route::post('/search/by/month', [ReportController::class, 'reportByMonth'])->name('search-by-month');
        Route::post('/search/by/year', [ReportController::class, 'reportByYear'])->name('search-by-year');
    });

    // Admin Get All User Routes
    Route::prefix('alluser')->group(function(){

        Route::get('/view', [AdminProfileController::class, 'allUsers'])->name('all-users');
        Route::get('/delete/{id}', [AdminProfileController::class, 'deleteUser'])->name('user.deletebyid');

    });

// Admin Reports Routes

    Route::prefix('blog')->group(function(){
        Route::get('/category', [BlogController::class, 'blogCategory'])->name('blog.category');
        Route::post('/store', [BlogController::class, 'blogCategoryStore'])->name('blogcategory.store');
        Route::get('/category/edit/{id}', [BlogController::class, 'blogCategoryEdit'])->name('blog.category.edit');
        Route::post('/update', [BlogController::class, 'blogCategoryUpdate'])->name('blogcategory.update');

        // Admin View Blog Post Routes
        Route::get('/list/post', [BlogController::class, 'listBlogPost'])->name('list.post');
        Route::get('/add/post', [BlogController::class, 'addBlogPost'])->name('add.post');
        Route::post('/post/store', [BlogController::class, 'blogPostStore'])->name('post-store');
    });

    // Admin Site Setting Routes
    Route::prefix('setting')->group(function(){
        Route::get('/site', [SiteSettingController::class, 'siteSetting'])->name('site.setting');
        Route::post('/site/update', [SiteSettingController::class, 'siteSettingUpdate'])->name('update.sitesetting');
        Route::get('/seo', [SiteSettingController::class, 'seoSetting'])->name('seo.setting');
        Route::post('/seo/update', [SiteSettingController::class, 'seoSettingUpdate'])->name('update.seosetting');
    });

    // Admin Return Order Routes
    Route::prefix('return')->group(function(){
        Route::get('/admin/request', [ReturnController::class, 'returnRequest'])->name('return.request');
        Route::get('/admin/return/approve/{order_id}', [ReturnController::class, 'returnRequestApprove'])->name('return.approve');
//        Route::get('/admin/all/request', [ReturnController::class, 'returnAllRequest'])->name('all.request');
    });


// Admin Manage Review Routes
    Route::prefix('review')->group(function(){
        Route::get('/pending', [ReviewController::class, 'pendingReview'])->name('pending.review');
        Route::get('/admin/approve/{id}', [ReviewController::class, 'reviewApprove'])->name('review.approve');
        Route::get('/admin/all/request', [ReturnController::class, 'returnAllRequest'])->name('all.request');
        Route::get('/publish', [ReviewController::class, 'publishReview'])->name('publish.review');
        Route::get('/delete/{id}', [ReviewController::class, 'deleteReview'])->name('delete.review');
    });
// Admin Manage Stock Routes
    Route::prefix('stock')->group(function(){
        Route::get('/product', [ProductController::class, 'productStock'])->name('product.stock');
    });

    // Admin User Role Routes
    Route::prefix('adminuserrole')->group(function(){
        Route::get('/all', [AdminUserController::class, 'allAdminRole'])->name('all.admin.user');
        Route::get('/add', [AdminUserController::class, 'addAdminRole'])->name('add.admin');
        Route::post('/store', [AdminUserController::class, 'storeAdminRole'])->name('admin.user.store');
        Route::get('/edit/{id}', [AdminUserController::class, 'editAdminRole'])->name('edit.admin.user');
        Route::post('/update', [AdminUserController::class, 'updateAdminRole'])->name('admin.user.update');
        Route::get('/delete/{id}', [AdminUserController::class, 'deleteAdminRole'])->name('delete.admin.user');
    });

    Route::get('/calender', [AdminUserController::class, 'getCalender'])->name('calender');
    Route::get('/mailbox', [AdminUserController::class, 'getMail'])->name('mailbox');

});
// end Middleware admin --------------------------------------------------------------------------------------------------------------




// User All Route---------------------------------------------------------------------------------------
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('profile');
})->name('dashboard');


//// Frontend All Routes /////
Route::middleware(['auth:web'])->group(function()
{
    Route::get('/user/profile', [IndexController::class, 'userProfile'])->name('user.profile');
    Route::post('/user/store', [IndexController::class, 'userUpdateProfile'])->name('user.updateProfile');
    Route::get('/user/change/password', [IndexController::class, 'userChangePassword'])->name('user.changePassword');
    Route::post('/user/update/password', [IndexController::class, 'userUpdatePassword'])->name('user.updatePassword');

}); // end Middleware User
//All User Auth
Route::group(['prefix'=>'user','middleware' => ['user','auth'],'namespace'=>'User'],function(){
    // Wishlist page
    Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->name('wishlist');
    Route::get('/get-wishlist-product', [WishlistController::class, 'getWishlistProduct']);
    Route::get('/wishlist-remove/{id}', [WishlistController::class, 'removeWishlistProduct']);

    Route::post('/cash/order', [CashController::class, 'cashOrder'])->name('cash.order');
    Route::post('/stripe/order', [StripeController::class, 'stripeOrder'])->name('stripe.order');


    Route::get('/my/orders', [AllUserController::class, 'myOrders'])->name('my.orders');
    Route::get('/order_details/{order_id}', [AllUserController::class, 'orderDetails']);
    Route::get('/invoice_download/{order_id}', [AllUserController::class, 'invoiceDownload']);
    Route::post('/return/order/{order_id}', [AllUserController::class, 'returnOrder'])->name('return.order');
    Route::get('/return/order/list', [AllUserController::class, 'returnOrderList'])->name('return.order.list');
    Route::get('/cancel/orders', [AllUserController::class, 'cancelOrders'])->name('cancel.orders');
    /// Order Tracking Route
    Route::post('/order/tracking-view', [AllUserController::class, 'orderTracking'])->name('order.tracking-view');
    Route::get('/order/tracking', [AllUserController::class, 'orderTrackingPage'])->name('order.tracking');
});


Route::get('/', [IndexController::class, 'index'])->name('user.index');
Route::get('/shop', [IndexController::class, 'shop'])->name('user.shop');
Route::get('/daily-deals', [IndexController::class, 'dailyDeals'])->name('user.daily_deals');
Route::get('/product/view/modal/{id}', [IndexController::class, 'productViewAjax']);

/// Product Search Route
Route::post('/search', [IndexController::class, 'productSearch'])->name('product.search');
// Advance Search Routes
Route::post('search-product', [IndexController::class, 'SearchProduct']);

//// Frontend All Routes /////
/// Multi Language All Routes ////
Route::get('/language/arabic', [LanguageController::class, 'arabic'])->name('arabic.language');
Route::get('/language/english', [LanguageController::class, 'english'])->name('english.language');
Route::get('/user/logout', [IndexController::class, 'userLogout'])->name('user.logout');
// Frontend Product Details Page url
Route::get('/product/details/{id}/{slug}', [IndexController::class, 'productDetails']);
// Frontend Product Tags Page
Route::get('/product/tag/{tag}', [IndexController::class, 'tagWiseProduct']);
// Frontend SubCategory wise Data
Route::get('/subcategory/product/{subcat_id}/{slug}', [IndexController::class, 'subCatWiseProduct']);
// Frontend Sub-SubCategory wise Data
Route::get('/subsubcategory/product/{subsubcat_id}/{slug}', [IndexController::class, 'subSubCatWiseProduct']);
// Product View Modal with Ajax
Route::get('/contact-us', [IndexController::class, 'contactUs'])->name('contactUs');

// Add to Wishlist
Route::post('/add-to-wishlist/{product_id}', [WishlistController::class, 'addToWishlist']);
Route::get('/wishlist/load-wishlist-data', [WishlistController::class, 'wishlistCount']);

// Checkout Routes
Route::get('/checkout', [CartController::class, 'checkoutCreate'])->name('checkout');
Route::get('/district-get/ajax/{division_id}', [CheckoutController::class, 'districtGetAjax']);
Route::get('/state-get/ajax/{district_id}', [CheckoutController::class, 'stateGetAjax']);
Route::post('/checkout/store', [CheckoutController::class, 'checkoutStore'])->name('checkout.store');

//  Frontend Blog Show Routes
Route::get('/blog', [HomeBlogController::class, 'addBlogPost'])->name('home.blog');
Route::get('/post/details/{id}', [HomeBlogController::class, 'detailsBlogPost'])->name('post.details');
Route::get('/blog/category/post/{category_id}', [HomeBlogController::class, 'homeBlogCatPost']);
Route::get('/about', [HomeBlogController::class, 'about'])->name('about');
// Frontend Product Review Routes
Route::post('/review/store', [ReviewController::class, 'reviewStore'])->name('review.store');

Route::get('/compare', [CompareController::class, 'compare'])->name('compare');
Route::Post('/add-to-compare/{product_id}', [CompareController::class, 'addToCompare']);
Route::get('/compare-remove/{id}', [CompareController::class, 'removeCompareProduct'])->name('compare-remove');


// Add to Cart Store Data
Route::post('/cart/data/store/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/cart/data/store/{id}', [CartController::class, 'addToCartDetails'])->name('addToCartDetails');
Route::post('/cart/data-store/{id}', [CartController::class, 'addToCartFormQuickView'])->name('addToCartFormQuickView');
// Get Data from mini cart
Route::get('/product/mini/cart/', [CartController::class, 'addMiniCart']);
// Remove mini cart
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'removeMiniCart']);
// My Cart Page All Routes
Route::get('/mycart', [CartController::class, 'myCart'])->name('mycart');
Route::get('/user/get-cart-product', [CartPageController::class, 'getCartProduct']);
Route::get('/user/cart-remove/{rowId}', [CartPageController::class, 'removeCartProduct']);
Route::get('/cart-increment/{rowId}', [CartPageController::class, 'cartIncrement']);
Route::get('/cart-decrement/{rowId}', [CartPageController::class, 'cartDecrement']);
// Frontend Coupon Option
Route::post('/coupon-apply', [CartController::class, 'couponApply']);
Route::get('/coupon-calculation', [CartController::class, 'couponCalculation']);
Route::get('/coupon-remove', [CartController::class, 'couponRemove']);

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/language', 'App\Http\Controllers\HomeController@language');


/** Facebook OAuth routes */
Route::get('login/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

/** Facebook OAuth routes */
Route::get('login/google', [FacebookController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [FacebookController::class, 'handleGoogleCallback']);

//Route::get('/chatify', [BotManController::class, 'chatify'])->name('chatify');


Route::get('/botman', [BotManController::class, 'handle']);
Route::post('/botman', [BotManController::class, 'handle']);
