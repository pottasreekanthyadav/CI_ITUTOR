<?php
class Slider_model extends CI_Model {
 	public function first_slider($sid){
 		$this->db->set('make_first_image',0);
 		$this->db->update('rl_book_slider_tbl');

 		$this->db->set('make_first_image',1);
 		$this->db->where('slider_id',$sid);
 		$update = $this->db->update('rl_book_slider_tbl');
 		return $update;
    } 					

}
?>			