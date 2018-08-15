<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_course extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function retrieve_all($table_name)
	{
		return $this->db->get($table_name)->result();
	}

	public function retrieve_row($table_name, $id)
	{
		$this->db->where('id', $id);
		return $this->db->get($table_name)->row();
	}

	public function retrieve_all_By_Id($table_name, $id, $new)
	{
		$this->db->where($new, $id);
		return $this->db->get($table_name)->result();
	}

	public function retrieve_all_By_Id_Limit($limit, $start, $table_name, $id, $new)
	{
		$query = $this->db->get_where($table_name, array($new => $id), $limit, $start);

		if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
 		else 
 		{
 			return false;
 		}
        
	}

	public function insert($table_name, $data)
	{
		return $this->db->insert($table_name, $data);
	}

	public function insert_return_id($table_name, $data)
	{
		$this->db->insert($table_name, $data);
			$insert_id = $this->db->insert_id();
				return $insert_id;
	}

	public function update($table_name, $data, $id)
	{
		$this->db->where('id', $id);
		return $this->db->update($table_name, $data);
	}

	public function remove($table_name, $id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table_name);
	}

	public function remove_cat_id($table_name, $id, $new)
	{
		$this->db->where($new, $id);
		return $this->db->delete($table_name);
	}	


}