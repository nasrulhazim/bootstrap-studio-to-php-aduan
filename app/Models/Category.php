<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	public $table = 'kategori';
	public $primary = 'idkat';

	public function complaints()
	{
		return $this->hasMany('App\Models\Complaint','kategori','idkat');
	}
}