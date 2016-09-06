<?php 

namespace App\Controllers;

use App\Controllers\Controller;

use App\Models\Complaint;

class ComplaintController extends Controller {

	public static function store($data)
	{
		$data['noaduan'] = generate_complaint_no();
		$complaint = Complaint::create($data);

		return $complaint;
	}

	public static function search($complaint_id)
	{
		$complaint = Complaint::where('noaduan',$complaint_id)->with('category')->first();

		if($complaint) {
			$complaint = $complaint->toArray();
			$complaint['status'] = status($complaint['status']);
			$complaint['class'] = status_class($complaint['status']);
		}

		return $complaint;
	}

}