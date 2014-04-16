<?php 
namespace App\Models;

use Eloquent;

class File extends Eloquent {

	protected $table = 'files';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}