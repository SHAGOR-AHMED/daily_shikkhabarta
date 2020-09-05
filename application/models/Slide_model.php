<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Slide_model extends CI_Model {
	
	public function save_slide_info($data){

		return $this->db->insert('tbl_slider',$data);
	}

	public function select_slide_image(){
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $query = $this->db->get();
        return $result = $query->result();
	}

	public function delete_slide_info_by_id($slide_id){

		$data = array('slide_id' => $slide_id);
		$prev_info = $this->db->get_where("tbl_slider",$data)->row();
		unlink($prev_info->image);
		return $this->db->where('slide_id',$slide_id)->delete('tbl_slider');
	}

	public function select_slide_info_by_id($slide_id){

		$this->db->select('*');
		$this->db->from('tbl_slider');
		$this->db->where('slide_id',$slide_id);
		$query_result=$this->db->get();
		$result=$query_result->row();
		return $result;

	}

	public function update_slide_info($data,$slide_id){

		return $this->db->where('slide_id',$slide_id)->update('tbl_slider',$data);

	}

}