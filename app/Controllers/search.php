<?php 

use App\Controllers\ComplaintController;
use App\Utilities\Response;

$complaint = ComplaintController::search($_REQUEST['keyword']);

if($complaint) {
	Response::success($complaint);
} else {
	Response::failed('Complaint not found');
}