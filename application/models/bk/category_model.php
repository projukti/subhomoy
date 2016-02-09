<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Category_model extends CI_Model
{
	var $table;
	function __construct()
	{
		parent::__construct();
		$this->table = 'trsc_users';
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
			case 'count':
				$result = $query->num_rows();
				break;
		}
		//echo $this->db->last_query();die;
		return $result;
	}
}