<?php
Auth::routes();
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth:web']],function()
{
	Route::get('/','DashboardController@index')->name('dashboard');

	Route::resource('doctor','DoctorController');
	Route::get('/doctor','DoctorController@index')->name('admin.doctor');
	
	 Route::resource('appointment','AppointmentController');
	 Route::get('/appointment','AppointmentController@index')->name('admin.appointment');

	
});

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');

//name eg hello xa aba paxi <a href="{{hello}}">hello </a> ma janxa


