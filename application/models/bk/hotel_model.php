<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hotel_model extends CI_Model
{
	var $table;
	function __construct()
	{
		parent::__construct();
		$this->table = 'thi_hotels';
	}
	function find_data($select='*',$conditions='',$return_type='array',$group_by=NULL,$order_by=NULL,$limit=0,$offset=0)
	{
		$result = array();
		
		$this->db->select($select);
		$this->db->join('thi_cities','thi_cities.id='.$this->table.'.city_id','inner');
		
		if($conditions != '')
		{
			$this->db->where($conditions);
		}
		
		if($limit != 0)
		{
			$this->db->limit($limit, $offset);
		}
		
		if($order_by == 0)
		{
			$this->db->order_by('thi_hotels.id', 'ASC');
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
						$list_arr[$row->id] = $row->city_name;
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
			$query = $this->db->update($this->table,$postData);
			//echo $this->db->last_query();die;
			return $this->db->affected_rows();
			//return $query->row();
		} 
	}
	
	function delete_data($id)
	{
		 $this->db->where('id',$id);
		 $this->db->delete($this->table);
		 return $this->db->affected_rows();
    }
	
	function find_all()
	{
		
		$query = $this->db->query("select thi_hotels.*,thi_cities.city_name,thi_states.state_name from thi_hotels INNER JOIN thi_cities ON thi_cities.id = thi_hotels.city_id
 INNER JOIN thi_states ON thi_states.id = thi_hotels.state_id");	
		//echo $this->db->last_query();die;
		return $query->result();
	}
	
	function find_all_data($select='*',$conditions='',$return_type='array',$group_by=NULL,$order_by=NULL,$limit=0,$offset=0)
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
						$list_arr[$row->id] = $row->city_name;
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
	
	function find_specific($id)
	{
		//echo $id;die;
		$query = $this->db->query("select thi_hotels.*,thi_cities.city_name,thi_states.state_name from thi_hotels INNER JOIN thi_cities ON thi_cities.id = thi_hotels.city_id
 INNER JOIN thi_states ON thi_states.id = thi_hotels.state_id where thi_hotels.id=".$id);	
		//echo $this->db->last_query();die;
		return $query->row();
	}
	
	function username_check($conditions='')
	{
		if($conditions != '')
		{
			$this->db->where($conditions);
		}
		$query = $this->db->get($this->table);
		return $query->num_rows();
		//echo $this->db->last_query();die;
	}
	
}