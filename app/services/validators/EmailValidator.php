<?php namespace App\Services\Validators;

class EmailValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'email'  => 'required|email|max:50'
	);

	public static $messages = array();

}