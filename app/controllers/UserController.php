<?php
	/**
	* 
	*/
	class UserController extends BaseController
	{
		
		function login(){

				$input = Input::all();
				var_dump($input);
			 return View::make('user.login');
		}

	}
?>