<?php namespace Index;
use \BaseController;
use \View;

class HomeController extends BaseController {

	public function index(){
		return View::make('index.index')->with('title','v2ex');
	}

}