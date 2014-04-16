<?php 
namespace App\Controllers\Admin;

use App\Models\EmailCategory;
use App\Services\Validators\EmailCategoryValidator;
use Input, Redirect, Str, Auth, Session, BaseController, View;

class EmailsCategoryController extends BaseController {

  public function index()
  {
    return View::make('admin.emails_category.index')
      ->with('categories', EmailCategory::with('editor')
      ->paginate(15));
  }

  public function create()
  {
    return View::make('admin.emails_category.create');
  }

  public function store()
  {
    $validation = new EmailCategoryValidator;

    if ($validation->passes())
    {
      $category = new EmailCategory;
      $category->name   = Input::get('name');
      $category->description    = Input::get('description');
      $category->created_by = Auth::user()->id;
      $category->updated_by = Auth::user()->id;

      $category->save();

      Session::flash('message', 'New Category has been added.');

      return Redirect::route('admin.emails-category.edit', $category->id);
    }

    return Redirect::back()->withInput()->withErrors($validation->errors);
  }

  public function edit($id)
  {
    return View::make('admin.emails_category.edit')->with('category', EmailCategory::find($id));
  }

  public function update($id)
  {
    $validation = new EmailCategoryValidator;

    if ($validation->passes())
    {
      $category = EmailCategory::find($id);
      $category->name   = Input::get('name');
      $category->description    = Input::get('description');
      $category->updated_by = Auth::user()->id;
      $category->save();

      Session::flash('message', 'The Category has been updated.');

      return Redirect::route('admin.emails-category.edit', $category->id);
    }

    return Redirect::back()->withInput()->withErrors($validation->errors);
  }

}
