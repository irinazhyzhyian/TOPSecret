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

Route::get('/', 'EmployeeController@index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customcoffee-edit/{id}', 'HomeController@edit');
Route::put('/customcoffee-update/{id}', 'HomeController@update' );
Route::get('/customcoffee-delete/{id}', 'HomeController@delete');
Route::any('/dellingradient/{id}', 'HomeController@dellingradient');
Route::any('/customcoffee-ingradient/{id}', 'HomeController@addingradient');

Route::group(['prefix' => 'customcoffee'] , function () {
    Route::get('/constructor/' , 'CustomCoffeeController@index');
    Route::post('/constructor/save/' , 'CustomCoffeeController@store');
    Route::get('/constructor/destroy' , 'CustomCoffeeController@destroy');
});

Route::get('/menu', 'MenuItemsController@index');
Route::get('cart', 'MenuItemsController@cart');
Route::get('add-to-cart/{id}', 'MenuItemsController@addToCart');
Route::patch('update-cart', 'MenuItemsController@update');
Route::delete('remove-from-cart', 'MenuItemsController@remove');
Route::any('/save-ordersinfo', 'OrderInfoController@store');

/*Route::get('/cart', 'BasketController@index');
Route::get('/basketdelete/{id}', 'BasketController@delete');
Route::get('/pluscount/{id}', 'BasketController@pluscount');
Route::get('/minuscount/{id}', 'BasketController@minuscount');
Route::any('/save-ordersinfo', 'OrderInfoController@store');
*/

Route::group(['middleware' => ['auth', 'admin']], function () {
    
    Route::get('/dashboard', 'Admin\DashboardController@range');

    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerupdate' );
    Route::get('/role-delete/{id}', 'Admin\DashboardController@registerdelete');
    
    Route::get('/positions', 'Admin\PositionsController@index');
    Route::post('/save-position', 'Admin\PositionsController@store');
    Route::get('/position-edit/{id}', 'Admin\PositionsController@edit');
    Route::put('/position-update/{id}', 'Admin\PositionsController@update' );
    Route::get('/position-delete/{id}', 'Admin\PositionsController@delete');

    Route::get('/employee', 'Admin\EmployeeController@index');
    Route::post('/save-employee', 'Admin\EmployeeController@store');
    Route::get('/employee-edit/{id}', 'Admin\EmployeeController@edit');
    Route::put('/employee-update/{id}', 'Admin\EmployeeController@update' );
    Route::get('/employee-delete/{id}', 'Admin\EmployeeController@delete');

    Route::get('/products', 'Admin\ProductsController@index');
    Route::post('/save-product', 'Admin\ProductsController@store');
    Route::get('/product-edit/{id}', 'Admin\ProductsController@edit');
    Route::put('/product-update/{id}', 'Admin\ProductsController@update' );
    Route::get('/product-delete/{id}', 'Admin\ProductsController@delete');

    Route::get('/menuitems', 'Admin\MenuItemsController@index');
    Route::post('/save-menuitem', 'Admin\MenuItemsController@store');
    Route::get('/menuitem-edit/{id}', 'Admin\MenuItemsController@edit');
    Route::put('/menuitem-update/{id}', 'Admin\MenuItemsController@update' );
    Route::get('/menuitem-delete/{id}', 'Admin\MenuItemsController@delete');

    Route::get('/ingradients', 'Admin\IngradientsController@index');
    Route::post('/save-ingradient', 'Admin\IngradientsController@store');
    Route::get('/ingradient-edit/{id}', 'Admin\IngradientsController@edit');
    Route::put('/ingradient-update/{id}', 'Admin\IngradientsController@update' );
    Route::get('/ingradient-delete/{id}', 'Admin\IngradientsController@delete');

    Route::get('/ordersinfo', 'Admin\OrdersInfoController@index');
    Route::post('/save-ordersinfo', 'Admin\OrdersInfoController@store');
    Route::get('/ordersinfo-edit/{id}', 'Admin\OrdersInfoController@edit');
    Route::put('/ordersinfo-update/{id}', 'Admin\OrdersInfoController@update' );
    Route::get('/ordersinfo-delete/{id}', 'Admin\OrdersInfoController@delete');

    Route::get('/orders', 'Admin\OrdersController@index');
    Route::post('/save-order', 'Admin\OrdersController@store');
    Route::get('/order-edit/{id}', 'Admin\OrdersController@edit');
    Route::put('/order-update/{id}', 'Admin\OrdersController@update' );
    Route::get('/order-delete/{id}', 'Admin\OrdersController@delete');

    Route::get('/customcoffee', 'Admin\CustomCoffeeController@index');
    Route::get('/customcoffee/{id}', 'Admin\CustomCoffeeController@delete');
});


