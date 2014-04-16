<?php 
namespace App\Models;

use Eloquent;

class EmailCategory extends Eloquent {

	protected $table = 'emails_category';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

    public function emails()
    {
        return $this->hasMany('App\Models\Email', 'category_id');
    }

}