<?php 
namespace App\Services\Validators;

class EmailCategoryValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
	);

	public static $messages = array();

}