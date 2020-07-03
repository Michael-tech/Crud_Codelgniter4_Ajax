<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\EmployeeModel;
use CodeIgniter\HTTP\Request;

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

	public function form_employee()
	{
		echo view('employee/form_employee');
	}
	public function create_employee()
	{
		$model = new EmployeeModel();
		$data =array(
			'first_name' =>$this->request->getPost('first_name'),
			'last_name' =>$this->request->getPost('last_name'),
			'email' =>$this->request->getPost('email'),

		); 
		$model->insert_employee($data);
	}

	public function edit_form_employee()
	{
		$id =$this->request->getPost('id');
		$model = new EmployeeModel();
		$data = $model->get_employee($id)->getRow();
		echo json_encode($data);
	}
	public function edit_employee()
	{
		$model = new EmployeeModel();
		$id =$this->request->getPost('Id');
		$data =array(
			'first_name' =>$this->request->getPost('first_name'),
			'last_name' =>$this->request->getPost('last_name'),
			'email' =>$this->request->getPost('email'),

		); 
		$model->update_employee($data, $id);
	}

	public function delete_employee()
	{
		$model = new EmployeeModel();
		$id =$this->request->getPost('id');
		
		$model->delete_employee($id);
		echo "Deleted..";
	}




	

}
