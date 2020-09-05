<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		// $admin_id = $this->session->userdata('admin_id');
		// if($admin_id == NULL){
		// 	redirect('Admin','refresh');
		// }
		$this->load->model('Admin_model');
	}
	 
	public function index(){
		
		$this->load->view('admin/login');
	}
	
	public function admin_login_check(){
		
		$admin_email = $this->input->post('admin_email',true);
		$admin_pass = $this->input->post('admin_pass',true);
		$result = $this->Admin_model->check_admin_login_info($admin_email,$admin_pass);
		// echo '<pre>';
		// print_r($result);
		// exit(); 
		
		$sdata = array();
		if($result){
			$sdata['admin_id'] = $result->admin_id; 
			$sdata['admin_full_name'] = $result->admin_full_name;
			$this->session->set_userdata($sdata);
			redirect('Super_admin');
		}else{
			$sdata['message']='User ID or Password is Invalid..!!';
			$this->session->set_userdata($sdata);
			redirect('Admin/index');
		}
	}

	public function logout(){
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_full_name');
		$sdata = array();
		$sdata['message'] = 'You are successfully Logout...!!!';
		$this->session->set_userdata($sdata);
		
		redirect('welcome/index');
	}

	public function ChangePassword($AdminID){

		$data = array();
		$data['adminID'] = $AdminID;
		$data['admin_maincontent'] = $this->load->view('admin/change_password',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_password(){

    	$admin_id = $this->input->post('admin_id');
    	$old_pass = md5($this->input->post('old_password'));
    	$new_pass = md5($this->input->post('new_password'));
    	$con_pass = md5($this->input->post('confirm_password'));

    	$pre_info = $this->db->select('*')->from('tbl_admin')->where('admin_id', $admin_id)->get()->row();
    	$pre_pass = $pre_info->admin_pass;

  		if($pre_pass == $old_pass){

  			if($new_pass == $con_pass){

  				$result = $this->Admin_model->update_password($admin_id,$new_pass);

  				if($result){

  					$this->session->unset_userdata('admin_id');
					$this->session->unset_userdata('admin_full_name');

					$sdata['message'] = "Password Updated Successfully ! Login Again";
					$this->session->set_userdata($sdata);
					redirect('Admin/');

				}else{

					$sdata['message'] = "Failed to Update Password";
					$this->session->set_userdata($sdata);
					redirect('Admin/ChangePassword/'.$admin_id);

				}//if

  			}else{

				$sdata['message'] = "New Password and Confirm Password doesn't Match.!!!";
				$this->session->set_userdata($sdata);
				redirect('Admin/ChangePassword/'.$admin_id);

  			}//if

  		}else{

			$sdata['message'] = 'Old Password does not Match.!!!';
			$this->session->set_userdata($sdata);
			redirect('Admin/ChangePassword/'.$admin_id);

  		}//if

    }//update_password


}//Admin