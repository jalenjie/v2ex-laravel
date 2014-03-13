<?php namespace Index;
use \BaseController;
use \Input;
use \View;
use \Redirect;
use \Auth;
use \DB;
use \URL;
use \Validator;
use \Hash;
	class UserController extends BaseController
	{
		
		function showLogin(){

			if(Auth::user()->check()){
				return Redirect::to(URL::previous());
			}
			return View::make('index.login')->with('title','V2EX > 登入');
		}

		public function showReg(){

			return View::make('index.reg')->with('title','V2EX > 注册');

		}


		public function postLogin()
		{
			$user = array(
	            'username' => Input::get('username'),
	            'password' => Input::get('password')
	        );

	        if (Auth::user()->attempt($user)) {
	            return Redirect::to('/');
	        }

	        return Redirect::to('login')
	        		->with('login_error','用户名或者密码错误');
		}

		public function postReg(){

			$rules = array(
				'username' => 'required|alpha_num',
				'email'    => 'required|email', 
				'password' => 'required|alpha_num|min:3' 
			);

			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()) {
				return Redirect::to('/register')
					->withErrors($validator) ;
			} else {

				$userdata = array(
					'username' 	=> Input::get('username'),
					'email' 	=> Input::get('email'),
					'password' 	=> Hash::make(Input::get('password'))
				);


				$user = DB::table('users')
							->where('username',$userdata['username'])
							->orWhere('email',$userdata['email'])
							->count();
				if($user > 0){

					return Redirect::to("/register")
							->with('register_error',"用户名或者邮箱已经存在");

				}

				DB::table('users')->insertGetId(
				    $userdata
				);

				return Redirect::to("/");

				

			}
		}


		public function getLogout()
		{
			Auth::user()->logout(); 
			return Redirect::to('login')
					->with('signout_',"你已经完全登出，没有任何个人信息留在这台电脑上。") ;
		}

	}
?>