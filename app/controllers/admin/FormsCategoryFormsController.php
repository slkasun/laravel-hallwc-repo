<?php 
namespace App\Controllers\Admin;

use App\Models\Form;
use App\Models\FormCategory;
use App\Services\Validators\FormValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View, Response, URL;

class FormsCategoryFormsController extends BaseController {

	public function index($category_id)
	{
		return View::make('admin.forms.index')
			->with('forms', Form::with('editor')
			->where('category_id', $category_id)
			->orderBy('order', 'asc')
			->paginate(15))
			->with('category', FormCategory::find($category_id));
	}

	public function create($category_id)
	{
		return View::make('admin.forms.create')
			->with('category', FormCategory::find($category_id));
	}

	public function store($category_id)
	{
		$validation = new FormValidator;

		if ($validation->passes())
		{
			$form = new Form;
			$form->name   = Input::get('name');
			$form->category_id   = $category_id;
			$form->description    = Input::get('description');
			$form->order    = Input::get('order');
			$form->created_by = Auth::user()->id;
			$form->updated_by = Auth::user()->id;

			if (Input::hasFile('pdf'))
			{
				$file = Input::file('pdf');
				$file->move('uploads/site/form', $file->getClientOriginalName());
				$form->pdf    = $file->getClientOriginalName();
			}

			$form->save();

			Session::flash('message', 'The form has been added.');

			return Redirect::route('admin.forms-category.forms.edit', array($category_id, $form->id));
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($category_id, $id)
	{
		return View::make('admin.forms.edit')->with('form', Form::find($id))
			->with('category', FormCategory::find($category_id));
	}

	public function update($category_id, $id)
	{
		$validation = new FormValidator;

		if ($validation->passes())
		{
			$form = Form::find($id);
			$form->name   = Input::get('name');
			$form->description    = Input::get('description');
			$form->order    = Input::get('order');
			$form->updated_by = Auth::user()->id;

			if (Input::hasFile('pdf'))
			{
				$file = Input::file('pdf');
				$file->move('uploads/site/form', $file->getClientOriginalName());
				$form->pdf    = $file->getClientOriginalName();
			}

			$form->save();

			Session::flash('message', 'The form has been updated.');

			return Redirect::route('admin.forms-category.forms.edit', array($category_id, $form->id));
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($category_id, $id)
	{
		$form = Form::find($id);
		$form->delete();

		Session::flash('message', 'The form has been deleted.');

		return Redirect::back();
	}

}
