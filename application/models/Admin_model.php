<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function check_admin_login_info($admin_email,$admin_pass){
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('admin_email',$admin_email);
		$this->db->where('admin_pass',md5($admin_pass));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function update_password($admin_id,$new_pass){

		return $this->db->set('admin_pass', $new_pass)->where('admin_id', $admin_id)->update('tbl_admin');
	}

}//Admin_model