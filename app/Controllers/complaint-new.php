<?php

use App\Controllers\ComplaintController;

$data = [
	'nama' => $_POST['name'],
	'nokp' => $_POST['ic'],
	'notel' => $_POST['phone'],
	'unit' => $_POST['unit'],
	'tarikhmasa' => data('Y-m-d h:is'),
	'kategory' => $_POST['category_id'],
	'aduan' => $_POST['complaint']
];

$complaint = ComplaintController::store($data);

if($complaint) {
	Response::success($complaint, 'Complaint submitted');
} else {
	Response::failed('Unable to submit complaint');
}