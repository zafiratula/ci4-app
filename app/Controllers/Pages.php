<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('pages/home');
	}

	public function about()
	{
		return view('pages/about');
	}

	public function contact()
	{
		$data = [
			'alamat' => [
				[
					'tipe' => 'rumah',
					'alamat' => 'Cibiru Asi 2 Blo.D2 No.17',
					'kota' => 'Bandung'

				]
			]
		];
		return view('pages/contact', $data);
	}
}
