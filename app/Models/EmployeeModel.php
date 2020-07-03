<?php namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    
    public function get_employee($id = false){
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['Id' => $id]);
        }
    }

    public function update_employee($data, $id){
        $update_query = $this->db->table($this->table)->update($data, array('Id' =>$id));
        return $update_query;
    }

    public function insert_employee($data){
        $insert_query = $this->db->table($this->table)->insert($data);
        return $insert_query;
    } 

    public function delete_employee($id){
        $delete_query = $this->db->table($this->table)->delete(array('Id' =>$id));
        return $delete_query;
    }



}