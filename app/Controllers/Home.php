<?php namespace App\Controllers;

use \App\Models\PusModel;
use \App\Models\KriteriaModel;

class Home extends BaseController
{
	public function index()
	{

		$Mpus = new PusModel();
		$MKri = new KriteriaModel();
		
		$data = [
			'jml_pus' => $Mpus->countAll(),
			'jml_kri' => $MKri->countAll()
		];

		return view('dashboard', $data);
	}

}