<?php 

function status($code) {
	if($code == 1){
		$stat = "Belum ambil Tindakan";
	}elseif($code == 2){
		$stat = "Dalam Proses";
	}elseif($code == 3){
		$stat = "Dalam tindakan syarikat luar(outsource)";
	}elseif($code == 4){
		$stat = "Dalam Proses Pelupusan";
	}elseif($code == 6){
		$stat = "Selesai(Penggantian)";
	}elseif($code == 7){
		$stat = "Selesai(Pelupusan)";
	}elseif($code == 8){
		$stat = "Selesai(Lain-lain)";
	}else{
		$stat = "Selesai";
	}

	return $stat;
}

function status_class($code) {
	if($code == 1){
		$stat = "danger";
	}elseif(in_array($code, [2,3,4])){
		$stat = "warning";
	}else{
		$stat = "success";
	}

	return $stat;
}