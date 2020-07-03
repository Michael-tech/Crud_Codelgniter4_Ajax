<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\EmployeeModel;

class Employee extends BaseController
{
	public function index()
	{
        $data['title'] = 'Crud Codeingniter Ajax';
        $data['content'] = 'employee/index';

		return view('layouts/body', $data);
	}

	public function table_employee()
	{
		$model = new EmployeeModel();
		$data['employee'] = $model->get_employee();

		echo view('employee/table_employee', $data);
	}

	

}
