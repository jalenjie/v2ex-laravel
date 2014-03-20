<?php namespace Admin;

	class AuthController extends \BaseController{

		public function getLogin(){

			if(\Auth::admin()->check()){
				return \Redirect::to("admin");
			}
			return \View::make("admin.login");
		}

		public function postLogin(){

			$admin_name = \Input::get('username') ;
			$password   = \Input::get('password') ;
			$attempt_arr = array(
							'admin_name' => $admin_name,
							'password'   => $password
				);
			if(\Auth::admin()->attempt($attempt_arr)){

			    return \Response::json(array( 
					    					'login_status' => 'success',
		                              		'redirect_url' => \URL::previous()
                              				)
			    	);
			}else{

		        return \Response::json(array(
		                              		'login_status' => 'invalid',
		                             		)
		        					);
			}
		}


		public function getLogout(){
			\Auth::admin()->logout();
			return \Redirect::to('admin/login');
		}


	}