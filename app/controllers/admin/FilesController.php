<?php 
namespace App\Controllers\Admin;

use App\Models\File;
use App\Services\Validators\FileValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class FilesController extends BaseController {

	public function index()
	{
		return View::make('admin.files.index')
			->with('files', File::with('editor')
			->paginate(15));
	}

	public function create()
	{
		return View::make('admin.files.create');
	}

	public function store()
	{
		$validation = new FileValidator;

		if ($validation->passes())
		{
			$file = new File;
			$file->name   = Input::get('name');
			$file->created_by = Auth::user()->id;
			$file->updated_by = Auth::user()->id;

			if (Input::hasFile('pdf'))
			{
				$upload_file = Input::file('pdf');
				$upload_file->move('uploads/site/file', $upload_file->getClientOriginalName());
				$file->file    = $upload_file->getClientOriginalName();
			}

			$file->save();

			Session::flash('message', 'New file has been added.');

			return Redirect::route('admin.files.edit', $file->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function edit($id)
	{
		return View::make('admin.files.edit')->with('file', File::find($id));
	}

	public function update($id)
	{
		$validation = new FileValidator;

		if ($validation->passes())
		{
			$file = File::find($id);
			$file->name   = Input::get('name');
			$file->updated_by = Auth::user()->id;

			if (Input::hasFile('pdf'))
			{
				$upload_file = Input::file('pdf');
				$upload_file->move('uploads/site/file', $upload_file->getClientOriginalName());
				$file->file    = $upload_file->getClientOriginalName();
			}

			$file->save();

			Session::flash('message', 'The file has been updated.');

			return Redirect::route('admin.files.edit', $file->id);
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	public function destroy($id)
	{
		$file = File::find($id);
		$file->delete();

		Session::flash('message', 'The file has been deleted.');

		return Redirect::back();
	}

}
