<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'SPMI ~ Home';
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
