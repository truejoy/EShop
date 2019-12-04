<?php

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('products', function () {
//     return view('products');
// });



// Route::get('checkout', function () {
//     return view('checkout');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');

Route::resource('/products', 'ProductController');

// Route::get('product-details', function () {
//     return view('product-details');
// });
