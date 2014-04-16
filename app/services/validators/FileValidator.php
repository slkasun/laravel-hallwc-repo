<?php namespace App\Services\Validators;

class FileValidator extends Validator {

	public static $rules = array(
		'name' => 'required|max:255',
		'pdf'  => 'required_without:id|mimes:pdf,jpeg,bmp,png,gif|max:2048',
	);

	public static $messages = array(
    	'pdf.required_without' => 'The :attribute field is required.',
	);

}