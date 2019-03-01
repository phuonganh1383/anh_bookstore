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

Route::get('/', function () {
    return view('welcome');
});


	Route::get('/dangky', function(){
      return view('dangky'); 
	});
   Route::post('/dangky', 'userController@dangky');

	Route::get('/dangnhap', function(){
      return view('dangnhap'); 
	});
   Route::post('/dangnhap', 'LoginController@login');



Route::group(['middleware'=> 'AdminLogin'],function(){
		Route::get('/index', function(){
	      return view('admin.header'); 
		});

		Route::group(['prefix' => '/listbook'],function(){
		Route::get('/', 'bookController@index');

		Route::get('/them', 'bookController@getthembook');
		Route::post('/them', 'bookController@postthembook');

		Route::get('/sua/{id}', 'bookController@getsuabook');
		Route::post('/sua/{id}', 'bookController@postsuabook');


		Route::get('/xoa/{id}', 'bookController@postxoabook');

		// Route::get('/{id}', 'bookController@addmybook');
		Route::post('/addmybook', 'bookController@addmybook');

	});	


	    Route::get('/listmybook', 'favoriteController@getmybook');

		// Route::get('/addmybook/{id}/{uname}', 'favoriteController@addmybook');



	Route::group(['prefix' => '/listuser'],function(){
		Route::get('/', 'userController@index');

		});	

	Route::get('logout', 'LoginController@logout');
	

		// Route::get('/them', 'bookController@getthembook');
		// Route::post('/them', 'bookController@postthembook');

		// Route::get('/sua/{id}', 'bookController@getsuabook');
		// Route::post('/sua/{id}', 'bookController@postsuabook');

		// Route::get('/xoa/{id}', 'bookController@postxoabook');	
	});	