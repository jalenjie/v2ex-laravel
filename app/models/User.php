<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected static $rules = array(
				'username' => 'required|alpha_num|max:16|unique:users,username',
				'email'    => 'required|email|unique:users,email', 
				'password' => 'required|alpha_num|min:3' 
			);
	protected static $messages = array(
				'required'  => ' :attribute 不能为空',
				'max'       => ' :attribute 最大字符不能超过16',
				'unique'    => ' :attribute 已经存在',
				'alpha_num' => ' :attribute 只能是字母和数字的组合',
				'email'     => ' :attribute 格式不正确',
				'min'       => ' :attribute 至少3个字符',
			);

	protected static $errors ;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}


	//必填信息是否正确;
	public static function validatorUser($inputAll)
	{
			
			$validator = \Validator::make($inputAll, self::$rules,self::$messages);

			if($validator->fails()){
				
				Input::flash();

				self::setErrors($validator->messages());

				return true;

			}


			return false;
	}

	protected static function setErrors($errors)
	{
		self::$errors = $errors;

	}

	public static function getErrors()
	{
		return self::$errors;
	}

	public static function postRegister($userdata)
	{

		return self::insertGetId($userdata);

	}


}