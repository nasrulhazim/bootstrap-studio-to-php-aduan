<?php 

namespace App\Utilities;

class Response {

	public static function json($status = true, $data = null, $message = '')
	{
		header('Content-Type: application/json');
		echo json_encode(['data' => $data,'status' => $status,'message' => $message]);
	}

	public static function success($data, $message = 'Request Success')
	{
		self::json(true, $data, $message);
		exit(200);
	}

	public static function failed($message = 'Request Failed')
	{
		self::json(false, null, $message);
		exit(404);
	}
	
}