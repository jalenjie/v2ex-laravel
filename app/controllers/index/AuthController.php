<?php

	class AuthController extends BaseController{

		public function getLogin(){

			return View::make('user.signin')->with('title','V2EX > 登入');

		}


		public function getReg(){

			return View::make('user.signup')->with('title','V2EX > 注册');

		}


		public function postLogin()
		{
			$user = array(
	            'username' => Input::get('username'),
	            'password' => Input::get('password')
	        );

	        if (Auth::attempt($user)) {
	            return Redirect::to('index');
	        }

	        return Redirect::to('auth/login')
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
				return Redirect::to('/auth/reg')
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

					return Redirect::to("/auth/reg")
							->with('register_error',"用户名或者邮箱已经存在");

				}

				DB::table('users')->insertGetId(
				    $userdata
				);

				return Redirect::to("member/{$userdata['username']}");

				

			}
		}


		public function getLogout()
		{
			Auth::logout(); 
			return Redirect::to('auth/login')
					->with('signout_',"你已经完全登出，没有任何个人信息留在这台电脑上。") ;
		}
	}