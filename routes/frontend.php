<?php
Route::get('home','FrontendController@index')->name('home');
Route::get('shop','FrontendController@shop')->name('shop');


Route::get('single/{id}','FrontendController@single')->name('single');


Route::get('wishlist','FrontendController@wishlist')->name('wishlist');
Route::get('register','FrontendController@register')->name('register');
Route::get('checkout','FrontendController@checkout')->name('checkout');
Route::get('loi','FrontendController@loi')->name('loi');
Route::get('category1','FrontendController@category1')->name('category1');
Route::get('category2','FrontendController@category2')->name('category2');
Route::get('category3','FrontendController@category3')->name('category3');
Route::get('category4','FrontendController@category4')->name('category4');
Route::get('blog','FrontendController@blog')->name('blog');

// Route::get('/{slug}','FrontendController@view')->name('view');

Route::get('blogDetail/{id}','FrontendController@blogDetail')->name('blogDetail');
Route::post('comment/{id}','CommentController@post_comment')->name('comment');

Route::get('contact','FrontendController@contact')->name('contact');
Route::post('contact','FrontendController@post_contact')->name('post_contact');

Route::get('search','FrontendController@Search')->name('Search');
Route::get('tktin','FrontendController@tktin')->name('tktin');

Route::get('dang-ky','FrontendController@register')->name('getdang_ky');
Route::post('dang-ky','FrontendController@postdang_ky')->name('postdang_ky');
Route::get('dang-nhap','FrontendController@login')->name('getlogin');
Route::post('dangnhap','FrontendController@postlogin')->name('postlogin');
Route::get('dang_xuat','FrontendController@dang_xuat')->name('dang_xuat');

Route::get('qmk','ForgotPasswordController@quenmk')->name('quenmk');
Route::post('qmk','ForgotPasswordController@sendquenmk')->name('sendquenmk');
Route::get('password','ForgotPasswordController@resetpassword')->name('resetPassword');
Route::post('password','ForgotPasswordController@saveResetpassword');

Route::group(['prefix'=>'cart'],function(){
	Route::get('cart','CartController@index')->name('cart');
	Route::get('add/{id}','CartController@add')->name('add');
	Route::get('remove/{id}','CartController@remove')->name('remove');
	Route::get('update/{id}','CartController@update')->name('update');
	Route::get('clear','CartController@clear')->name('clear');

});
Route::group(['prefix'=>'wishlist'],function(){
	Route::get('wishlist','WishlistController@wishlist')->name('wishlist');
	Route::get('addWishlist/{id}','WishlistController@addWishlist')->name('addWishlist');
	Route::get('removeWish/{id}','WishlistController@removeWish')->name('removeWish');

});
Route::group(['prefix'=>'checkout'],function(){
	Route::get('checkout','CheckoutController@checkout')->name('checkout');
	Route::post('checkout','CheckoutController@post_checkout')->name('post_checkout');
});

Route::group(['prefix'=>'rating'],function(){
	Route::post('/danh-gia/{id}','RatingController@post_danhgia')->name('danhgia');

});

 ?>