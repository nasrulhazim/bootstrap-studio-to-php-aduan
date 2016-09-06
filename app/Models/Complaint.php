<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model {
	public $table = 'aduan';
	public $primary = 'idaduan';
	public $fillable = [
		'noaduan','tarikhmasa','nama','nokp','nounit','notel','kategori','masalah','status'
	];
	public $timestamp = false;

	public function category()
	{
		return $this->belongsTo('App\Models\Category','kategori','idkat');
	}
}