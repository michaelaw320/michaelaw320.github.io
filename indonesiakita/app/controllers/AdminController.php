<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogistic()
	{
		return View::make('michael.lihatlogistik');
	}
	public function showRequest()
	{
		return View::make('michael.request');
	}
	public function showAddLogin()
	{
		return View::make('michael.tambahlogin');
	}
	public function showUpdate()
	{
		return View::make('michael.update');
	}
	public function showUserRole()
	{
		return View::make('michael.userrole');
	}
	public function showTimDarurat()
	{
		return View::make('michael.timdarurat');
	}
	public function showTambahLogistik()
	{
		return View::make('michael.tambahlogistik');
	}
	public function showBagiLogistik()
	{
		return View::make('michael.lihatlogistik2');
	}
}
