<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;

use App\Http\Controllers\Admin\ForgotPasswordController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\MasterAuthorController;
use App\Http\Controllers\Admin\MasterPublisherController;
use App\Http\Controllers\Admin\MasterEditionController;
use App\Http\Controllers\Admin\MasteLanguageController;
use App\Http\Controllers\Admin\MasterReadingAgeGroupController;
use App\Http\Controllers\Admin\MasterCategoryController;
use App\Http\Controllers\Admin\MasteCourierController;
use App\Http\Controllers\Admin\MasterCourierWeightChargeController;
use App\Http\Controllers\Admin\MasterCourierCityChargeController;

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CustomerController;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SingleOrderController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReportController;

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

// Website

Route::get('/customer/registration', 'App\Http\Controllers\CustomerController@registration')->name('customer.registration');
Route::get('/customer/get-cities/{id}', 'App\Http\Controllers\CustomerController@getCities')->name('customer.get-cities');
Route::post('/customer/register', 'App\Http\Controllers\CustomerController@register')->name('customer.register');

Route::get('/customer/login', 'App\Http\Controllers\CustomerController@login')->name('customer.login');
Route::post('/customer/log-in', 'App\Http\Controllers\CustomerController@log_in')->name('customer.log-in');
// Route::get('customer/log-out', 'App\Http\Controllers\CustomerController@logOut')->name('customer.log-out');

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::post('/search', 'App\Http\Controllers\HomeController@search')->name('search');

Route::get('/books', 'App\Http\Controllers\BookController@index')->name('books');

Route::get('/book-details/{id}', 'App\Http\Controllers\BookController@bookDetails')->name('book-details');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', 'App\Http\Controllers\ContactUsController@index')->name('contact-us');
Route::post('/contact-us/send-inquiry', 'App\Http\Controllers\ContactUsController@send_inquiry')->name('contact-us.send-inquiry');
Route::get('/policies', 'App\Http\Controllers\PoliciesController@index')->name('policies');

Route::get('/payment-return', 'App\Http\Controllers\PayHereController@handlePaymentReturn')->name('return-url');

Route::middleware('PreventBackHistory')->group(function () {
    Route::get('customer/log-out', 'App\Http\Controllers\CustomerController@logOut')->name('customer.log-out');

    Route::get('/customer/profile', 'App\Http\Controllers\CustomerController@profile')->name('customer.profile');
    Route::post('/customer/update-profile', 'App\Http\Controllers\CustomerController@update')->name('customer.update-profile');

    Route::get('/customer/orders', 'App\Http\Controllers\CustomerController@orders')->name('customer.orders');

    // Route::get('/customer/favourites', 'App\Http\Controllers\CustomerController@favourites')->name('customer.favourites');

    Route::get('favorite-add/{id}', 'App\Http\Controllers\WishlistController@favoriteAdd')->name('favorite.add');
    Route::delete('favorite-remove/{id}', 'App\Http\Controllers\WishlistController@favoriteRemove')->name('favorite.remove');
    Route::get('wishlist', 'App\Http\Controllers\WishlistController@wishlist')->name('wishlist');

    Route::get('cart', 'App\Http\Controllers\CartController@cart')->name('cart');
    Route::get('add-to-cart/{id?}', 'App\Http\Controllers\CartController@addToCart')->name('add.to.cart');
    Route::patch('update-cart', 'App\Http\Controllers\CartController@update')->name('update.cart');
    Route::delete('remove-from-cart', 'App\Http\Controllers\CartController@remove')->name('remove.from.cart');
    Route::get('checkout', 'App\Http\Controllers\CartController@checkout')->name('checkout');

    Route::get('/checkout/get-delivery-fee/{id}/{weight}/{cityId}/{payhere_order_id}', 'App\Http\Controllers\CartController@getDeliveryFee')->name('checkout.get-delivery-fee');
    Route::post('/customer/place-order', 'App\Http\Controllers\CartController@placeOrder')->name('customer.place-order');

    Route::get('/orders/my_orders', 'App\Http\Controllers\OrderController@index')->name('orders.my_orders');
    Route::get('/orders/order_details/{id}', 'App\Http\Controllers\OrderController@orderDetails')->name('orders.order_details');
});

//-- Admin ---------------------------------------------------------------------------------------------------------------

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'authenticate')->name('authenticate');
});

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//---Protected -----------------------------------------------------------------------------------------------------------------

Route::middleware('auth:sanctum')->group(function () {

    Route::controller(AuthController::class)->group(function () {
        Route::get('/logout', 'logout')->name('admin.logout');
    });

// dashboard
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin', 'all')->name('dashboard');
    });

// master data
    Route::controller(MasterPublisherController::class)->group(function () {
        Route::get('/admin/master-master_publisher', 'pageTypeTable')->name('page.admin.master.master_publisher');
        Route::get('/admin/master-master_publisher-create', 'pageTypeCreate')->name('page.admin.master.master_publisher.create');
        Route::get('/admin/master-master_publisher-edit/{id}', 'pageTypeEdit')->name('page.admin.master.master_publisher.edit');
        Route::post('/admin/master-master_publisher-create', 'typeCreate')->name('admin.master.master_publisher.create');
        Route::post('/admin/master-master_publisher-edit/{id}', 'typeUpdate')->name('admin.master.master_publisher.update');
        Route::post('/admin/master-master_publisher-delete/{id}', 'typeDelete')->name('admin.master.master_publisher.delete');
        Route::post('/admin/master-master_publisher-status/{id}/{status}', 'typeStatus')->name('admin.master-master_publisher.status');
    });

    Route::controller(MasterAuthorController::class)->group(function () {
        Route::get('/admin/master-master_author', 'pageTypeTable')->name('page.admin.master.master_author');
        Route::get('/admin/master-master_author-create', 'pageTypeCreate')->name('page.admin.master.master_author.create');
        Route::get('/admin/master-master_author-edit/{id}', 'pageTypeEdit')->name('page.admin.master.master_author.edit');
        Route::post('/admin/master-master_author-create', 'typeCreate')->name('admin.master.master_author.create');
        Route::post('/admin/master-master_author-edit/{id}', 'typeUpdate')->name('admin.master.master_author.update');
        Route::post('/admin/master-master_author-delete/{id}', 'typeDelete')->name('admin.master.master_author.delete');
        Route::post('/admin/master-master_author-status/{id}/{status}', 'typeStatus')->name('admin.master-master_author.status');
    });

    Route::controller(MasteLanguageController::class)->group(function () {
        Route::get('/admin/master-master_language', 'pageTypeTable')->name('page.admin.master.master_language');
        Route::get('/admin/master-master_language-create', 'pageTypeCreate')->name('page.admin.master.master_language.create');
        Route::get('/admin/master-master_language-edit/{id}', 'pageTypeEdit')->name('page.admin.master.master_language.edit');
        Route::post('/admin/master-master_language-create', 'typeCreate')->name('admin.master.master_language.create');
        Route::post('/admin/master-master_language-edit/{id}', 'typeUpdate')->name('admin.master.master_language.update');
        Route::post('/admin/master-master_language-delete/{id}', 'typeDelete')->name('admin.master.master_language.delete');
        Route::post('/admin/master-master_language-status/{id}/{status}', 'typeStatus')->name('admin.master-master_language.status');
    });

    Route::controller(MasterReadingAgeGroupController::class)->group(function () {
        Route::get('/admin/master-master_reading_age_group', 'pageTypeTable')->name('page.admin.master.master_reading_age_group');
        Route::get('/admin/master-master_reading_age_group-create', 'pageTypeCreate')->name('page.admin.master.master_reading_age_group.create');
        Route::get('/admin/master-master_reading_age_group-edit/{id}', 'pageTypeEdit')->name('page.admin.master.master_reading_age_group.edit');
        Route::post('/admin/master-master_reading_age_group-create', 'typeCreate')->name('admin.master.master_reading_age_group.create');
        Route::post('/admin/master-master_reading_age_group-edit/{id}', 'typeUpdate')->name('admin.master.master_reading_age_group.update');
        Route::post('/admin/master-master_reading_age_group-delete/{id}', 'typeDelete')->name('admin.master.master_reading_age_group.delete');
        Route::post('/admin/master-master_reading_age_group-status/{id}/{status}', 'typeStatus')->name('admin.master-master_reading_age_group.status');
    });

    Route::controller(MasterCategoryController::class)->group(function () {
        Route::get('/admin/master-master_category', 'pageTypeTable')->name('page.admin.master.master_category');
        Route::get('/admin/master-master_category-create', 'pageTypeCreate')->name('page.admin.master.master_category.create');
        Route::get('/admin/master-master_category-edit/{id}', 'pageTypeEdit')->name('page.admin.master.master_category.edit');
        Route::post('/admin/master-master_category-create', 'typeCreate')->name('admin.master.master_category.create');
        Route::post('/admin/master-master_category-edit/{id}', 'typeUpdate')->name('admin.master.master_category.update');
        Route::post('/admin/master-master_category-delete/{id}', 'typeDelete')->name('admin.master.master_category.delete');
        Route::post('/admin/master-master_category-status/{id}/{status}', 'typeStatus')->name('admin.master-master_category.status');
    });

    Route::controller(MasterEditionController::class)->group(function () {
        Route::get('/admin/master-master_edition', 'pageTypeTable')->name('page.admin.master.master_edition');
        Route::get('/admin/master-master_edition-create', 'pageTypeCreate')->name('page.admin.master.master_edition.create');
        Route::get('/admin/master-master_edition-edit/{id}', 'pageTypeEdit')->name('page.admin.master.master_edition.edit');
        Route::post('/admin/master-master_edition-create', 'typeCreate')->name('admin.master.master_edition.create');
        Route::post('/admin/master-master_edition-edit/{id}', 'typeUpdate')->name('admin.master.master_edition.update');
        Route::post('/admin/master-master_edition-delete/{id}', 'typeDelete')->name('admin.master.master_edition.delete');
        Route::post('/admin/master-master_edition-status/{id}/{status}', 'typeStatus')->name('admin.master-master_edition.status');
    });


    Route::controller(MasteCourierController::class)->group(function () {
        Route::get('/admin/master-master_courier', 'pageTypeTable')->name('page.admin.master.master_courier');
        Route::get('/admin/master-master_courier-create', 'pageTypeCreate')->name('page.admin.master.master_courier.create');
        Route::get('/admin/master-master_courier-edit/{id}', 'pageTypeEdit')->name('page.admin.master.master_courier.edit');
        Route::post('/admin/master-master_courier-create', 'typeCreate')->name('admin.master.master_courier.create');
        Route::post('/admin/master-master_courier-edit/{id}', 'typeUpdate')->name('admin.master.master_courier.update');
        Route::post('/admin/master-master_courier-delete/{id}', 'typeDelete')->name('admin.master.master_courier.delete');
        Route::post('/admin/master-master_courier-status/{id}/{status}', 'typeStatus')->name('admin.master-master_courier.status');
    });


    Route::controller(MasterCourierWeightChargeController::class)->group(function () {
        Route::get('/admin/master-courier_weight_charge', 'pageTypeTable')->name('page.admin.master.courier_weight_charge');
        Route::get('/admin/master-courier_weight_charge-create', 'pageTypeCreate')->name('page.admin.master.courier_weight_charge.create');
        Route::get('/admin/master-courier_weight_charge-edit/{id}', 'pageTypeEdit')->name('page.admin.master.courier_weight_charge.edit');
        Route::post('/admin/master-courier_weight_charge-create', 'typeCreate')->name('admin.master.courier_weight_charge.create');
        Route::post('/admin/master-courier_weight_charge-edit/{id}', 'typeUpdate')->name('admin.master.courier_weight_charge.update');
        Route::post('/admin/master-courier_weight_charge-delete/{id}', 'typeDelete')->name('admin.master.courier_weight_charge.delete');
        Route::post('/admin/master-courier_weight_charge-status/{id}/{status}', 'typeStatus')->name('admin.master.courier_weight_charge.status');
    });


    Route::controller(MasterCourierCityChargeController::class)->group(function () {
        Route::get('/admin/master-courier_city_charge', 'pageTypeTable')->name('page.admin.master.courier_city_charge');
        Route::get('/admin/master-courier_city_charge-create', 'pageTypeCreate')->name('page.admin.master.courier_city_charge.create');
        Route::get('/admin/master-courier_city_charge-get-cities/{id}', 'getCities')->name('page.admin.master.courier_city_charge.get-cities');
        Route::get('/admin/master-courier_city_charge-edit/{id}', 'pageTypeEdit')->name('page.admin.master.courier_city_charge.edit');
        Route::post('/admin/master-courier_city_charge-create', 'typeCreate')->name('admin.master.courier_city_charge.create');
        Route::post('/admin/master-courier_city_charge-edit/{id}', 'typeUpdate')->name('admin.master.courier_city_charge.update');
        Route::post('/admin/master-courier_city_charge-delete/{id}', 'typeDelete')->name('admin.master.courier_city_charge.delete');
        Route::post('/admin/master-courier_city_charge-status/{id}/{status}', 'typeStatus')->name('admin.master.courier_city_charge.status');
    });


    // books
    Route::controller(BookController::class)->group(function () {
        Route::get('/admin/books', 'index')->name('admin.books');

        Route::get('/admin/add-book', 'add')->name('admin.add-book');
        Route::post('/admin/create-book', 'create')->name('admin.create-book');

        Route::get('/admin/edit-book/{id}', 'edit')->name('admin.edit-book');
        Route::post('/admin/update-book', 'update')->name('admin.update-book');

        Route::post('/admin/delete-book/{id}', 'delete')->name('admin.delete-book');

        Route::post('/admin/change-book-status/{id}/{status}', 'status')->name('admin.change-book-status');
    });


    // customers
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/admin/customers', 'index')->name('page.admin.customers');
        // Route::get('/admin/customer-edit/{id}', 'pageUserEdit')->name('page.admin.users.edit');
        // Route::get('/admin/customer-create', 'pageUserCreate')->name('page.admin.users.create');
        // Route::get('/admin/profile/{id}', 'pageProfile')->name('page.admin.profile');

        // Route::post('/admin/user-create', 'userCreate')->name('admin.users.create');
        // Route::post('/admin/user-edit/{id}', 'userUpdate')->name('admin.users.update');
        // Route::post('/admin/user-delete/{id}', 'userDelete')->name('admin.users.delete');
    });


    // orders
    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/new_orders', 'new_orders')->name('page.admin.orders.new');
        Route::post('/admin/new_orders-delete/{id}', 'New_orderDelete')->name('admin.master.new_orders.delete');
        Route::post('/admin/new_orders-status/{id}/{status}', 'New_orderStatus')->name('admin.new_orders.status');
        Route::get('/admin/processing_orders', 'processing_orders')->name('page.admin.orders.processing');
        Route::post('/admin/processing_orders-delete/{id}', 'Processing_orderDelete')->name('admin.master.processing_orders.delete');
        Route::post('/admin/processing_orders-status/{id}/{status}', 'Processing_orderStatus')->name('admin.processing_orders.status');
        Route::get('/admin/distpached_orders', 'distpached_orders')->name('page.admin.orders.distpached');
        Route::post('/admin/distpached_orders-delete/{id}', 'Distpached_orderDelete')->name('admin.master.distpached_orders.delete');
        Route::post('/admin/distpached_orders-status/{id}/{status}', 'Distpached_orderStatus')->name('admin.distpached_orders.status');
        Route::get('/admin/completed_orders', 'completed_orders')->name('page.admin.orders.completed');
        Route::post('/admin/completed_orders-delete/{id}', 'Completed_orderDelete')->name('admin.master.completed_orders.delete');
    });

    Route::controller(SingleOrderController::class)->group(function () {
        Route::get('/admin/single_order/{id}', 'new_orders')->name('page.admin.orders.single');
    });


    // users
    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/users', 'pageUsers')->name('page.admin.users');
        Route::get('/admin/user-edit/{id}', 'pageUserEdit')->name('page.admin.users.edit');
        Route::get('/admin/user-create', 'pageUserCreate')->name('page.admin.users.create');
        Route::get('/admin/profile/{id}', 'pageProfile')->name('page.admin.profile');

        Route::post('/admin/user-create', 'userCreate')->name('admin.users.create');
        Route::post('/admin/user-edit/{id}', 'userUpdate')->name('admin.users.update');
        Route::post('/admin/user-delete/{id}', 'userDelete')->name('admin.users.delete');
    });

    Route::controller(BannerController::class)->group(function () {
        Route::get('/admin/banners', 'pageBanners')->name('page.admin.banners');
        Route::get('/admin/banner-edit/{id}', 'pageBannerEdit')->name('page.admin.banners.edit');
        Route::get('/admin/banner-create', 'pageBannerCreate')->name('page.admin.banners.create');

        Route::post('/admin/banner-create', 'bannerCreate')->name('admin.banners.create');
        Route::post('/admin/banner-edit/{id}', 'bannerUpdate')->name('admin.banners.update');
        Route::post('/admin/banner-delete/{id}', 'bannerDelete')->name('admin.banners.delete');
    });
    Route::controller(ReportController::class)->group(function () {
        Route::get('/admin/reports', 'reportsUI')->name('page.admin.reports');
    });

    // faq
    Route::controller(CustomerController::class)->group(function () {
        // Route::get('/admin/customers', 'index')->name('page.admin.customers');
        // Route::get('/admin/customer-edit/{id}', 'pageUserEdit')->name('page.admin.users.edit');
        // Route::get('/admin/customer-create', 'pageUserCreate')->name('page.admin.users.create');
        // Route::get('/admin/profile/{id}', 'pageProfile')->name('page.admin.profile');

        // Route::post('/admin/user-create', 'userCreate')->name('admin.users.create');
        // Route::post('/admin/user-edit/{id}', 'userUpdate')->name('admin.users.update');
        // Route::post('/admin/user-delete/{id}', 'userDelete')->name('admin.users.delete');
    });

});
