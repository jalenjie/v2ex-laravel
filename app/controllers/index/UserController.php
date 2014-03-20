<?php namespace Index;
	class UserController extends \BaseController
	{


		function showLogin(){

			if(\Auth::user()->check()){
				return \Redirect::to(\URL::previous());
			}
			return \View::make('index.login')->with('title','V2EX > 登入');
		}

		public function showReg(){

			return \View::make('index.reg')->with('title','V2EX > 注册');

		}


		public function postLogin()
		{
			$user = array(
	            'username' => \Input::get('username'),
	            'password' => \Input::get('password')
	        );

	        if (\Auth::user()->attempt($user)) {
	            return \Redirect::to('/');
	        }

	        return \Redirect::to('login')
	        		->with('login_error','用户名或者密码错误');
		}

		public function postReg(){


			$validator = \User::validatorUser(\Input::all());

			if ($validator) {

				return \Redirect::to('/register')
								->withErrors(\User::getErrors()) ;

			} else {

				$userdata = array(
					'username' 	=> \Input::get('username'),
					'email' 	=> \Input::get('email'),
					'password' 	=> \Hash::make(\Input::get('password'))
				);

				\User::postRegister($userdata);

				if (\Auth::user()->attempt(array('username' => \Input::get('username'), 'password' => \Input::get('password'))))
				{
				    return \Redirect::intended('/');
				}

				return \Redirect::to("/");

				

			}
		}


		public function getLogout()
		{
			\Auth::user()->logout(); 
			return \Redirect::to('login')
					->with('signout_',"你已经完全登出，没有任何个人信息留在这台电脑上。") ;
		}

	}
?>