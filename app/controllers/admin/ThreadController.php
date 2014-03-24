<?php namespace Admin;

class ThreadController extends \BaseController{

	public function getAll(){

		return \View::make('admin.thread-all');
	}
}
