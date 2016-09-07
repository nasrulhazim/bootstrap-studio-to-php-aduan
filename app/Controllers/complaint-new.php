<?php

use App\Controllers\ComplaintController;
use App\Utilities\Response;

$data = [
	'nama' => $_POST['name'],
	'nokp' => $_POST['ic'],
	'notel' => $_POST['phone'],
	'unit' => $_POST['unit'],
	'tarikhmasa' => date('Y-m-d h:i:s'),
	'kategori' => $_POST['category'],
	'aduan' => $_POST['problem']
];

$complaint = ComplaintController::store($data);

if($complaint) {
	Response::success($complaint, 'Complaint submitted');
} else {
	Response::failed('Unable to submit complaint');
}