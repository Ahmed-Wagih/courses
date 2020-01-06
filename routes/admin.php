<?php 
Route::group(['prefix'=> 'admins'], function (){

	Config::set('auth.defines', 'admin');

	Route::group(['middleware'=>'admin:admin'], function(){
		Route::get('/', function(){
			return view('admin.home');
		});
	});
	
});
 