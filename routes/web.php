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

Route::get('/', 'Frontend\pagesController@index')->name('index');
Route::get('/contact', 'Frontend\pagesController@contact')->name('contact');
Route::get('/offer', 'Frontend\pagesController@todayoffer')->name('offer');


/*
| Product Routes
| All the route for our product for frontend
*/

Route::group(['prefix'=>'products'], function(){

		// Category Route
	Route::get('/category', 'Frontend\CategoriesController@category')->name('categories.index');
	Route::get('/category/{id}', 'Frontend\CategoriesController@show')->name('categories.show');

	Route::get('/', 'Frontend\ProductsController@index')->name('products');
	Route::get('/{slug}', 'Frontend\ProductsController@show')->name('products.show');
	Route::get('/new/search', 'Frontend\PagesController@search')->name('search');


}); 


//User Routes
Route::group(['prefix' => 'user'], function(){
	Route::get('/token/{token}', 'Frontend\VerificationController@verify')->name('user.verification');
	Route::get('/dashboard', 'Frontend\UsersController@dashboard')->name('user.dashboard');
	Route::get('/profile', 'Frontend\UsersController@profile')->name('user.profile');
	Route::post('/profile/update', 'Frontend\UsersController@profileUpdate')->name('user.profile.update');
});


// Cart Routes
Route::group(['prefix' => 'carts'], function(){
  	Route::get('/', 'Frontend\CartsController@index')->name('carts');
  	Route::post('/store', 'Frontend\CartsController@store')->name('carts.store');
  	Route::post('/update/{id}', 'Frontend\CartsController@update')->name('carts.update');
  	Route::post('/delete/{id}', 'Frontend\CartsController@destroy')->name('carts.delete');
});

// Checkout Routes
Route::group(['prefix' => 'checkout'], function(){
	Route::get('/', 'Frontend\CheckoutsController@index')->name('checkouts');
	Route::post('/store', 'Frontend\CheckoutsController@store')->name('checkouts.store');
});


// Backend route
Route::group(['prefix'=>'backend'], function(){
	Route::get('/', 'Backend\PagesController@index')->name('backend.index');

  	// Admin Login Routes
  	Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
  	Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
  	Route::post('/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

  	// Password Email Send
  	Route::get('/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  	Route::post('/password/resetPost', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

  	// Password Reset
  	Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
  	Route::post('/password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');

	// product route
	Route::group(['prefix'=>'/products'], function(){
		Route::get('/', 'Backend\ProductsController@index')->name('backend.products');
		Route::get('/create', 'Backend\ProductsController@create')->name('backend.product.create');
		Route::get('/edit/{id}', 'Backend\ProductsController@edit')->name('backend.product.edit');
		Route::post('/store', 'Backend\ProductsController@store')->name('backend.product.store');
		Route::post('/edit/{id}', 'Backend\ProductsController@update')->name('backend.product.update');
		Route::post('/delete/{id}', 'Backend\ProductsController@delete')->name('backend.product.delete');
	});

    // Orders Routes
  	Route::group(['prefix' => '/orders'], function(){
    	Route::get('/', 'Backend\OrdersController@index')->name('backend.orders');
    	Route::get('/view/{id}', 'Backend\OrdersController@show')->name('backend.order.show');
    	Route::post('/delete/{id}', 'Backend\OrdersController@delete')->name('backend.order.delete');

    	Route::post('/completed/{id}', 'Backend\OrdersController@completed')->name('backend.order.completed');

    	Route::post('/paid/{id}', 'Backend\OrdersController@paid')->name('backend.order.paid');

    	Route::post('/charge-update/{id}', 'Backend\OrdersController@chargeUpdate')->name('backend.order.charge');

    	Route::get('/invoice/{id}', 'Backend\OrdersController@generateInvoice')->name('backend.order.invoice');

  	});
	
	// Category route
	Route::group(['prefix'=>'/categories'], function(){
		Route::get('/', 'Backend\CategoriesController@index')->name('backend.categories');
		Route::get('/create', 'Backend\CategoriesController@create')->name('backend.category.create');
		Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('backend.category.edit');
		Route::post('/store', 'Backend\CategoriesController@store')->name('backend.category.store');
		Route::post('/edit/{id}', 'Backend\CategoriesController@update')->name('backend.category.update');
		Route::post('/delete/{id}', 'Backend\CategoriesController@delete')->name('backend.category.delete');
	});	

		// Brand route
	Route::group(['prefix'=>'/brands'], function(){
		Route::get('/', 'Backend\brandsController@index')->name('backend.brands');
		Route::get('/create', 'Backend\brandsController@create')->name('backend.brand.create');
		Route::get('/edit/{id}', 'Backend\brandsController@edit')->name('backend.brand.edit');
		Route::post('/store', 'Backend\brandsController@store')->name('backend.brand.store');
		Route::post('/edit/{id}', 'Backend\brandsController@update')->name('backend.brand.update');
		Route::post('/delete/{id}', 'Backend\brandsController@delete')->name('backend.brand.delete');
	});


	// Division Routes
	Route::group(['prefix' => '/divisions'], function(){
	    Route::get('/', 'Backend\DivisionsController@index')->name('backend.divisions');
	    Route::get('/create', 'Backend\DivisionsController@create')->name('backend.division.create');
	    Route::get('/edit/{id}', 'Backend\DivisionsController@edit')->name('backend.division.edit');

	    Route::post('/store', 'Backend\DivisionsController@store')->name('backend.division.store');

	    Route::post('/division/edit/{id}', 'Backend\DivisionsController@update')->name('backend.division.update');
	    Route::post('/division/delete/{id}', 'Backend\DivisionsController@delete')->name('backend.division.delete');
	});

	// District Routes
	Route::group(['prefix' => '/districts'], function(){
	    Route::get('/', 'Backend\DistrictsController@index')->name('backend.districts');
	    Route::get('/create', 'Backend\DistrictsController@create')->name('backend.district.create');
	    Route::get('/edit/{id}', 'Backend\DistrictsController@edit')->name('backend.district.edit');

	    Route::post('/store', 'Backend\DistrictsController@store')->name('backend.district.store');

	    Route::post('/district/edit/{id}', 'Backend\DistrictsController@update')->name('backend.district.update');
	    Route::post('/district/delete/{id}', 'Backend\DistrictsController@delete')->name('backend.district.delete');
	});

	// Slider Routes
  	Route::group(['prefix' => '/sliders'], function(){
    	Route::get('/', 'Backend\SlidersController@index')->name('backend.sliders');
    	Route::post('/store', 'Backend\SlidersController@store')->name('backend.slider.store');
    	Route::post('/slider/edit/{id}', 'Backend\SlidersController@update')->name('backend.slider.update');
    	Route::post('/slider/delete/{id}', 'Backend\SlidersController@delete')->name('backend.slider.delete');
 	});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
