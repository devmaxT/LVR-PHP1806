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

/**************** RESOURCE ******************/

Route::group([
	'prefix' => 'service',
	'namespace' => 'API',
	'as' => 'api.'
],function(){
	Route::resource('photos','ServiceController');
	// Chi can chay ca index va create -- them truc tiep create tren url
	//Route::resource('posts',)
	// chan token , phai vao VerifyCsrfToken
});


/**************** FRONTEND ******************/

Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
	'namespace' => 'Frontend',
	'as' => 'frontend.'
],function(){
	Route::get('/','ProfileController@index')->name('profile');
	Route::get('/resume','ResumeController@index')->name('resume');
	Route::get('/lang','ProfileController@lang')->name('lang');
});

/************** change language ******************/
Route::get('/switch-lang/{lang}',function($lang){
	//dd($lang);
	// cai language cho toan bo ung dung
	App::setLocale($lang);
	// Luu vao session
	Session::put('locale',$lang);
	// sd thu vien de set lai ngon ngu cho ung dung
	LaravelLocalization::setlocale($lang);
	// Quay ve lai dung trang ma ng dung da o do trc khi bam chuyen ngon ngu
	$url = LaravelLocalization::getLocalizedUrl($lang,\URL::previous());
	return Redirect::to($url);
})->name('switchLang');
/**********************************/

/*method get*/
Route::get('/hello',function(){
	return "Hello Annhii";
});

/*method Post*/
Route::post('/demo-post',function(){
	return 'this is method post';
});
/*method put*/
Route::put('/demo-put',function(){
	return 'this is method put';
});
/*method delete*/
Route::delete('/demo-delete',function(){
	return 'Demo - delete';
});

// 1 request vua la method post hoac get thi lam ntn
// 
//
//
Route::match(['get','post'],'/demo-match',function(){
	return 'get or post';
});

/* request nhan tat ca cac phuong thuc*/
Route::any('/demo-any',function(){
	return 'lol method';
});
/* dieu huong cac route */
/* tuong duong header */
Route::get('/aff',function(){
	//return Route::redirect('/aff','viet-nam');
	return redirect('viet-nam');
});

Route::get('viet-nam',function(){
	return 'Vo dich';
});

//Route::redirect('viet-nam','demo-any',301);
//
//
// view route
Route::get('chung-ket-luot-ve',function(){
	return view('final');
});

// Route param
// Tham so bat buoc
Route::get('/iphone/{name}',function($name){
	return "Iphone - {$name}";
});
// Tham so ko bat buoc
Route::get('/samsung/{name?}/{id}',function($n = null,$id){
	return "Samsung - {$n} - {$id}";
})->where('id','\d+')->name('ss');

Route::get('/Bphone',function(){
	return 'Made in VN';
})->name('bphone');

Route::get('/view-sam-sung',function(){
	return redirect()->route('ss',['name'=>'hanoi','id'=>10]);
});

Route::get('view-name-route',function(){
	$url = route('bphone');
	return "This is name route : {$url}";
});

/*Route::get('admin/user',function(){
	return 'admin/user';
})

Route::get('admin/dashboard',function(){
	return 'admin/dashboard';
})
*/
Route::prefix('admin')->group(function(){
	Route::get('/user',function(){
		return 'admin/user';
	});
	Route::get('/dashboard',function(){
	return 'admin/dashboard';
	});
});

// Cac route lam viec voi Middleware

Route::get('/film/watch/{age}',function($age){
	return "Okee";
})->middleware('my.check.age:annhii');

Route::get('/not-found',function(){
	return "dont watch";
})->name('notFound');

Route::get('/check-number/{number}',function(){
    return "yes";
})->middleware('my.check.SNT');

Route::get('/test-controller/{name}/{id}','TestController@index')->name('test-controller');

Route::get('/test-age/{age}','TestController@checkAgeWatchFilm')->name('test-age');

Route::get('/test-request/{name1}/{age1}','TestController@testRequest')->name('test-request');

Route::get('/demo-view','DemoController@index')->name('demo-view');

Route::get('/annhii','DemoController@annhii')->name('annhii');

Route::get('/nino','DemoController@nino')->name('nino');

Route::group([
	'prefix' => 'db-query',
],function(){
	Route::get('/select','QueryDBController@index')->name('select');
});

Route::get('orm','QueryDBController@orm')->name('orm');



// ADMIN //

Route::group(['prefix'=>'admin','namespace'=> 'Admin','as'=>'admin.'],function(){
	Route::get('/login','LoginController@index')->name('login');
	//Route::get('/login', ['as' => 'admin.login', 'uses' => 'LoginController@index'])->name('login');
	Route::post('/handle-login','LoginController@handleLogin')->name('handle-login');
	Route::get('/logout','LoginController@logout')->name('logout');
});

Route::group([
	'prefix' => LaravelLocalization::setLocale().'/admin',
	'namespace'=> 'Admin',
	'as'=>'admin.' , 
	'middleware'=> ['check.admin.login','web','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
],function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::get('/profile','ProfileController@index')->name('profile');
	Route::get('/add-profile','ProfileController@addView')->name('formAddProfile');
	Route::post('/handle-add-profile','ProfileController@handleAdd')->name('handleAddProfile');
	Route::post('/delete-profile','ProfileController@deleteProfile')->name('deleteProfile');
	Route::get('/edit-profile/{id}','ProfileController@editProfile')->name('editProfile');
	Route::post('/handle-edit-profile/{id}','ProfileController@handleEdit')->name('handleEdit');
	Route::get('/product','ProductController@index')->name('product');
	Route::get('/add-cart/{id}','CartController@add')->name('addCart');
	Route::get('/cart','CartController@index')->name('listCart');
	Route::get('/update-cart','CartController@update')->name('updateCart');
	Route::get('/delete-cart/{id}','CartController@delete')->name('deleteCart');
	Route::get('/delete-all','CartController@deleteAll')->name('deleteAll');
});

