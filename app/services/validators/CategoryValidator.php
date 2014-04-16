<?php 
namespace App\Services\Validators;

class CategoryValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
	);

	public static $messages = array();

}