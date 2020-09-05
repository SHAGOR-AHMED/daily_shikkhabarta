<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Slider extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Slide_model');
	}
	
	public function index(){
		$data = array();
		$data['all_slide']=$this->Slide_model->select_slide_image();
		$data['admin_maincontent']=$this->load->view('admin/slider',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function Add_slider(){
		$data = array();
		$data['admin_maincontent']=$this->load->view('admin/add_slider',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_slider(){

		$data = array();
		$config['upload_path'] = './assets/admin/slide_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;
        //print_r($_FILES);exit();
        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if (empty($_FILES['image']['name'])) {
            return $config['upload_path'];
        }

        if ( ! $this->upload->do_upload('image')){

            $error = $this->upload->display_errors();
            $dt['message'] = $error;
            $this->session->set_userdata($dt);
            redirect('Slider/Add_slider');

        }else{

            $fdata = $this->upload->data();
            $data['image'] =  $config['upload_path'] . $fdata['file_name'];
        }

		// echo '<pre>';
		// print_r($data);
		// exit();

		$result = $this->Slide_model->save_slide_info($data);

		if($result){
			$sdata=array();
			$sdata['message']='Save Slider Successfully !';
			$this->session->set_userdata($sdata);
			redirect('Slider/Add_slider');
		}else{
			$sdata=array();
			$sdata['message']='Failed to Save !';
			$this->session->set_userdata($sdata);
			redirect('Slider/Add_slider');
		}

	}

	public function edit_slider($slide_id){

		$data = array();
		$data['slide_info'] = $this->Slide_model->select_slide_info_by_id($slide_id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_slider',$data,true);
		$this->load->view('admin/admin_master',$data);

	}

	public function update_slider(){

		$data = array();
		$slide_id = $this->input->post('slide_id',true);

		if(isset($slide_id) && $slide_id != ''){

			$data = array('slide_id' => $slide_id);
			$prev_info = $this->db->get_where("tbl_slider",$data)->row();
			if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] != '')){
				unlink($prev_info->image);
			}
		}

		if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] != '') ){

			$config['upload_path'] = './assets/admin/slide_image/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['max_size'] = 1024;
	        // $config['max_width'] = 300;
	        // $config['max_height'] = 300;
	        //print_r($_FILES);exit();
	        $this->load->library('upload', $config);
	        $error='';
	        $fdata=array();
	        if (empty($_FILES['image']['name'])) {
	            return $config['upload_path'];
	        }

	        if ( ! $this->upload->do_upload('image')){

	            $error = $this->upload->display_errors();
	            $dt['message'] = $error;
	            $this->session->set_userdata($dt);
	            redirect('Slider/Add_slider');

	        }else{

	            $fdata = $this->upload->data();
	            $data['image'] =  $config['upload_path'] . $fdata['file_name'];
	        }
			
		}//if

		// echo '<pre>';
		// print_r($data);
		// exit();

		$result = $this->Slide_model->update_slide_info($data,$slide_id);

		if($result){
			$sdata = array();
			$sdata['message'] = 'Update Slide Successfully...!!!';
			$this->session->set_userdata($sdata);
			redirect('Slider/');
		}else{
			$sdata = array();
			$sdata['message'] = 'Failed to Update...!!!';
			$this->session->set_userdata($sdata);
			redirect('Slider/');
		}

	}//update_slider


	public function delete_slider($slide_id){

		$result = $this->Slide_model->delete_slide_info_by_id($slide_id);
		if($result){
			$sdata = array();
			$sdata['message'] = 'Delete Successfully...!!!';
			$this->session->set_userdata($sdata);
			redirect('Slider/');
		}else{
			$sdata = array();
			$sdata['message'] = 'Failed to Delete...!!!';
			$this->session->set_userdata($sdata);
			redirect('Slider/');
		}
	}


}//Slider