<?php namespace App\Controllers;

class Employee extends BaseController
{
	public function index()
	{
        $data['title'] = 'Crud Codeingniter Ajax';
        $data['content'] = 'employee/index';

		return view('layouts/body', $data);
	}

	

}
