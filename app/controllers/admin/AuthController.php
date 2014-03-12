<?php namespace Admin;
use \BaseController;
use \View;
use \Redirect;
use \Auth;
use \Input;
use \DB;
use \Hash;
use \Response;
use \URL;
	class AuthController extends BaseController{

		public function getLogin(){

			if(Auth::check()){
				return Redirect::to("admin");
			}
			return View::make("admin.login");
		}

		public function postLogin(){

			$admin_name = Input::get('username') ;
			$password   = Input::get('password') ;

			$count = DB::table('admin')
						->where('admin_name',$admin_name)
						->count();
			if ($count > 0) {

				$admin_user = DB::table('admin')
							->select('admin_name','password')
							->where('admin_name',$admin_name)
							->first();
				//散列验证
				if ( $admin_name == $admin_user->admin_name &&  Hash::check($password, $admin_user->password ))
				{
				    // 密码匹配...
				    return Response::json(
				    				array( 
				    					'login_status' => 'success',
                                  		'redirect_url' => URL::previous()
                                  )
				    	);
				}else{
			        return Response::json(array(
			                              'login_status' => 'invalid',
			                             ));
				}
			}else{
			        return Response::json(array(
			                              'login_status' => 'invalid',
			                             ));
			}
		}


	}