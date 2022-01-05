<?php 
Route::group(['prefix'=>'admin','namespace'=>'backend'],function(){
	
	Route::get('/dangky','LoginController@getdangky')->name('getdangky');
	Route::post('/dangky','LoginController@postdangky')->name('postdangky');
	Route::get('/login','LoginController@getdangnhap')->name('getdangnhap');
	Route::post('/login','LoginController@postdangnhap')->name('postdangnhap');
	Route::get('/logout','LoginController@logout')->name('logout');
	
	Route::get('/error','LoginController@error')->name('admin.error');

	Route::group(['middleware'=>'auth','as'=>'admin.'],function(){
		Route::get('/','BackendController@index')->name('admin.index');

		Route::get('search','ProductController@getSearch')->name('getSearch');
		Route::get('tk','CategoryController@getTk')->name('getTk');
		Route::get('timkiem','BlogController@getTimkiem')->name('getTimkiem');

		Route::get('view/{id}','OrderController@viewOrder')->name('viewOrder');
		Route::get('xoa/{id}','OrderController@xoa')->name('xoa');

		Route::get('productDetail/{id}','ProductController@viewProduct')->name('viewProduct');
		Route::get('comment','BlogController@comment')->name('comment');;

		Route::resource('category','CategoryController')->except(['show']);
		Route::resource('product','ProductController')->except(['show']);
		Route::resource('color','ColorController')->except(['show']);
		Route::resource('size','SizeController')->except(['show']);
		Route::resource('banner','BannerController')->except(['show']);
		Route::resource('blog','BlogController')->except(['show']);
		Route::resource('customer','CustomerController')->except(['show']);
		Route::resource('order','OrderController')->except(['show']);
		Route::resource('payment','PaymentController')->except(['show']);
		Route::resource('role','RoleController')->except(['show']);
		Route::resource('user','UserController');
		Route::resource('wishlist','WishlistController')->except(['show']);;
	});
		
		
});

 ?>