<?php namespace Admin;
use \BaseController;
use \View;
class HomeController extends BaseController {

	public function index(){
		
		return View::make('admin.home');
	}

}