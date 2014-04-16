<?php 
namespace App\Controllers\Admin;

use App\Models\Email;
use App\Models\EmailCategory;
use App\Services\Validators\EmailValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View, Response, URL;

class EmailsCategoryEmailsController extends BaseController {

	public function index($category_id)
	{
		return View::make('admin.emails.index')
			->with('emails', Email::with('editor')
			->where('category_id', $category_id)
			->paginate(15))
			->with('category', EmailCategory::find($category_id));
	}

	public function create($category_id)
	{
		return View::make('admin.emails.create')
			->with('category', EmailCategory::find($category_id));
	}

	public function store($category_id)
	{
		$validation = new EmailValidator;

		if ($validation->passes())
		{
			$email = new Email;
			$email->name   = Input::get('name');
			$email->category_id   = $category_id;
			$email->email    = Input::get('email');
			$email->created_by = Auth::user()->id;
			$email->updated_by = Auth::user()->id;

			$email->save();

			Session::flash('message', 'The email has been added.');

			return Redirect::route('admin.emails-category.emails.edit', array($category_id, $email->id));
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($category_id, $id)
	{
		return View::make('admin.emails.edit')->with('email', Email::find($id))
			->with('category', EmailCategory::find($category_id));
	}

	public function update($category_id, $id)
	{
		$validation = new EmailValidator;

		if ($validation->passes())
		{
			$email = email::find($id);
			$email->name   = Input::get('name');
			$email->email    = Input::get('email');
			$email->updated_by = Auth::user()->id;

			$email->save();

			Session::flash('message', 'The email has been updated.');

			return Redirect::route('admin.emails-category.emails.edit', array($category_id, $email->id));
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($category_id, $id)
	{
		$email = email::find($id);
		$email->delete();

		Session::flash('message', 'The email has been deleted.');

		return Redirect::back();
	}

}
