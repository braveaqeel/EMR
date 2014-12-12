<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function showAbout()
	{
		return View::make('about');
	}
	public function showServices()
	{
		return View::make('services');
	}

	public function showContacts()
	{
		return View::make('contacts');
	}

	public function showDoctor_home()
	{
		return View::make('doctor_home');
	}

	public function showReceptionist_home()
	{
		return View::make('receptionist_home');
	}

	public function showLabmanager_home()
	{
		return View::make('labmanager_home');
	}

	public function showAccountant_home()
	{
		return View::make('accountant_home');
	}

	public function showAdmin_home()
	{
		return View::make('admin_home');
	}

	public function showUserRegistrationForm(){

		return View::make('register_user');
	}

	public function showIndex()
	{
		return View::make('index');
	}
}
