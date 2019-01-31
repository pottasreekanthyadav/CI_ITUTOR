<?php
defined('BASEPATH') or die('Please set up the configuration');

Class Itm_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
 }
 public function get_status($table,$wer)
	{
		$this->db->where($wer);
		$rs=$this->db->get($table);
		$count=$rs->num_rows();
		if($count>0)
		{
			return $rs->row();
		}
		else
		{
			return null;
		}
	}
	public function get_business_list($table,$wer)
	{
		$this->db->select('owner_name,business_name,mobile,address,DATE_FORMAT(added_on, "%d-%m-%Y %H:%i %p") as added_on');
		$this->db->where($wer);
		$rs=$this->db->get($table);
		$count=$rs->num_rows();
		if($count>0)
		{
			return $rs->result();
		}
		else
		{
			return null;
		}
	}
}
?>