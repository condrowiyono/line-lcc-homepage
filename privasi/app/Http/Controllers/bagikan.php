<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Share;

class bagikan extends Controller
{
	public function bagikan() {
	
	$alamat = '//'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$datas = array();
	$datas['twitter'] = Share::load($alamat)->twitter();
    $datas['line'] = Share::load($alamat)->line();
    $datas['fb'] = Share::load($alamat)->facebook();
    $datas['wa'] = Share::load($alamat)->whatsapp();
	return $datas;

}
}
