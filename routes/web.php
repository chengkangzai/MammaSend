<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::loginUsingId(1);


Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();

Route::group(['as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('/permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('/roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('/users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Addresses
    Route::delete('/addresses/destroy', 'AddressController@massDestroy')->name('addresses.massDestroy');
    Route::resource('addresses', 'AddressController');

    // Rides
    Route::delete('/rides/destroy', 'RideController@massDestroy')->name('rides.massDestroy');
    Route::resource('rides', 'RideController');

    // Payments
    Route::delete('/payments/destroy', 'PaymentsController@massDestroy')->name('payments.massDestroy');
    Route::resource('payments', 'PaymentsController');

    // Faq Categories
    Route::delete('/faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Questions
    Route::delete('/faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');

    Route::delete('/children/destroy', 'ChildrenController@massDestroy')->name('children.massDestroy');
    Route::resource('children', 'ChildrenController');

    Route::get('/wizard/customer', 'CustomerWizardController@showAddPickupAddressForm');
    Route::post('/wizard/customer/pickup', 'CustomerWizardController@storePickupAddressForm');
    Route::post('/wizard/customer/dropoff', 'CustomerWizardController@storeDropoffAddressForm');
    Route::post('/wizard/customer/child', 'CustomerWizardController@storeChildForm');

//    Route::get('/my-token', function () {
//        echo Auth::user()->api_token;
//    });
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('/password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('/password', 'ChangePasswordController@update')->name('password.update');
        Route::post('/profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('/profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');

    }
});
