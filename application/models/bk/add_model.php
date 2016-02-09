<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Add_model extends CI_Model
{
	var $table;
	function __construct()
	{
		parent::__construct();
		$this->table = 'thi_ads';
	}
	function find_data($select='*',$conditions='',$return_type='array',$group_by=NULL,$order_by=NULL,$limit=0,$offset=0)
	{
		$result = array();
		
		$this->db->select($select);
		
		if($conditions != '')
		{
			$this->db->where($conditions);
		}
		
		if($limit != 0)
		{
			$this->db->limit($limit, $offset);
		}
		
		if($order_by != 0)
		{
			$this->db->order_by('id', 'ASC');
		}
		
		$query = $this->db->get($this->table);
		
		switch($return_type)
		{
			case 'array':
			case '':
				if($query->num_rows()> 0) {$result = $query->result();} 
				break;
			case 'row':
				if($query->num_rows()> 0) {$result = $query->row();} 
				break;
			case 'list':
				$list_arr[''] = 'Select';
				if($query->num_rows() > 0){
					foreach ($query->result() as $row)
					{
						$list_arr[$row->id] = $row->id;
					}
					
				}$result = $list_arr;
				break;
			case 'count':
				$result = $query->num_rows();
				break;
		}
		//echo $this->db->last_query();die;
		return $result;
	}
	
	function save_data($postData = array(),$id=0)
	{
		if($id == 0)
		{
			$this->db->insert($this->table,$postData);
			//echo $this->db->last_query();die;
			return $this->db->insert_id();
		}
		else
		{
			$this->db->where('id', $id);
			$this->db->update($this->table,$postData);
			//echo $this->db->last_query();die;
			return $this->db->affected_rows();
		} 
	}
	
	function delete_data($postData = array(),$id=0)
	{
		 $this->db->where('id', $id);
		 $this->db->update($this->table,$postData);
		 //$query = $this->db->query("ALTER TABLE thi_ads DROP COLUMN image,DROP COLUMN expiry_date WHERE id=".$id."");
		 //echo $this->db->last_query();die;
		 return $this->db->affected_rows();
    }
	
	function student_file_upload($img,$tmp)
	   {
		   $image_path = 'uploads/right_panel_add/';
		   //echo $image_path;die;
		   if(move_uploaded_file($tmp,$image_path.$img))
		   return true;
	   }
	
	
	
}