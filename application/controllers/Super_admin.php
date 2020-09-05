<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Super_admin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id == NULL){
			redirect('Admin','refresh');
		}
		$this->load->model('Superadmin_model');
		$this->load->model('Welcome_model');
	}
	
	public function index(){
		$data = array();
		$data['total_category'] = $this->Superadmin_model->select_all_category();
		$data['total_blog'] = $this->db->select('*')->from('tbl_blog')->get()->result();
		$data['total_slider'] = $this->db->select('*')->from('tbl_slider')->get()->result();
		$data['admin_maincontent'] = $this->load->view('admin/dashbord',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

//================================== Category ====================================//	
	public function add_category(){
		$data=array();
		$data['admin_maincontent']=$this->load->view('admin/add_category','',true);
		$this->load->view('admin/admin_master',$data);
	}
	
	public function save_category(){
		$data=array();
		$data['cat_name']=$this->input->post('cat_name',true);
		$data['publication_status']=$this->input->post('publication_status',true);
		$result = $this->Superadmin_model->save_category_info($data);
		if($result){
			$sdata = array();
			$sdata['message'] = 'Save Category Information Successfully..!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_category');	
		}else{
			$sdata = array();
			$sdata['message'] = 'Failed to save...!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_category');
		}
	}

    public function manage_category(){

		$data = array();
		$data['all_category']=$this->Superadmin_model->select_all_category();
		$data['admin_maincontent']=$this->load->view('admin/category_manager',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function unpublished_category($cat_id){

		$this->Superadmin_model->unpublished_category_info($cat_id);
		redirect('Super_admin/manage_category');

	}

	public function published_category($cat_id){

		$this->Superadmin_model->published_category_info($cat_id);
		redirect('Super_admin/manage_category');

	}

	public function delete_category($cat_id){

        $result = $this->Superadmin_model->delete_category_info_by_id($cat_id);
        if($result){
			$sdata = array();
			$sdata['message'] = 'Category Delated Successfully..!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_category');	
		}else{
			$sdata = array();
			$sdata['message'] = 'Failed to delete..!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_category');
		}
	}


	public function edit_category($cat_id){

		$data=array();
		$data['category_info']=$this->Superadmin_model->select_category_info_by_id($cat_id);
		$data['admin_maincontent']=$this->load->view('admin/edit_category',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_category(){
		
		$data = array();
		$cat_id = $this->input->post('cat_id',true);
		$data['cat_name'] = $this->input->post('cat_name',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$result = $this->Superadmin_model->update_category_info($data,$cat_id);
		if($result){
			$sdata = array();
			$sdata['message'] = 'Update Category Information Successfully..!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_category');	
		}else{
			$sdata = array();
			$sdata['message'] = 'Failed Update Category..!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_category');
		}
		
	}

	//=============================== Category End =========================================//

	//=============================== Blog =========================================//

	public function add_blog(){

		$data = array();
		$data['all_published_category']=$this->Welcome_model->select_published_category();
		$data['admin_maincontent']=$this->load->view('admin/add_blog',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function save_blog(){

		$data = array();
		$data['blog_title'] = $this->input->post('blog_title',true);
		$data['cat_id'] = $this->input->post('cat_id',true);
		$data['blog_long_des'] = $this->input->post('blog_long_des',true);
		$data['publication_status'] = $this->input->post('publication_status',true);
		$data['blog_author_name'] = $this->session->userdata('admin_full_name');

		$config['upload_path'] = './assets/admin/blog_images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;
        //print_r($_FILES);exit();
        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if (empty($_FILES['blog_image']['name'])) {
            return $config['upload_path'];
        }

        if ( ! $this->upload->do_upload('blog_image')){

            $error = $this->upload->display_errors();
            $dt['message'] = $error;
            $this->session->set_userdata($dt);
            redirect('Super_admin/add_blog');

        }else{

            $fdata = $this->upload->data();
            $data['blog_image'] =  $config['upload_path'] . $fdata['file_name'];
        }

		// echo '<pre>';
		// print_r($data);
		// exit();

		$result = $this->Superadmin_model->save_blog_info($data);

		if($result){
			$sdata=array();
			$sdata['message']='Save blog info Successfully !';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_blog');
		}else{
			$sdata=array();
			$sdata['message']='Failed to Save !';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/add_blog');
		}

	}

	public function manage_blog(){

        $total = $this->db->count_all("tbl_blog");
        $perPage = 4;
        $this->pagination(base_url() . 'Super_admin/manage_blog', $perPage, $total);
        $data['all_blog']=$this->Superadmin_model->select_all_blog($perPage, $this->uri->segment(3));
        $data['admin_maincontent']=$this->load->view('admin/blog_manage',$data,true);
	 	$this->load->view('admin/admin_master',$data);

	 }

    public function pagination($base_url, $per_page, $total)
    {
        $this->load->library('pagination');
        $config['base_url'] = $base_url;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev;_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
    }


	public function unpublished_blog($id){

		$this->Superadmin_model->unpublished_blog_info($id);
		redirect('Super_admin/manage_blog');

	}

	public function published_blog($id){

		$this->Superadmin_model->published_blog_info($id);
		redirect('Super_admin/manage_blog');

	}

	public function edit_blog($id){

		$data = array();
		$data['all_published_category']=$this->Welcome_model->select_published_category();
		$data['blog_info'] = $this->Superadmin_model->select_blog_info_by_id($id);
		$data['admin_maincontent'] = $this->load->view('admin/edit_blog',$data,true);
		$this->load->view('admin/admin_master',$data);

	}

	public function update_blog(){

		$data = array();
		$id = $this->input->post('id',true);
		$blog_title = $this->input->post('blog_title',true);
		$cat_id = $this->input->post('cat_id',true);
		$blog_long_des = $this->input->post('blog_long_des',true);
		$publication_status = $this->input->post('publication_status',true);

		$this->db->set('blog_title', $blog_title);
		$this->db->set('cat_id', $cat_id);
		$this->db->set('blog_long_des', $blog_long_des);
		$this->db->set('publication_status', $publication_status);

		if(isset($id) && $id != ''){

			$data = array('id' => $id);
			$prev_info = $this->db->get_where("tbl_blog",$data)->row();
			if(isset($_FILES['blog_image']['name']) && ($_FILES['blog_image']['name'] != '')){
				unlink($prev_info->blog_image);
			}
		}

		if(isset($_FILES['blog_image']['name']) && ($_FILES['blog_image']['name'] != '') ){

			$config['upload_path'] = './assets/admin/blog_images/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['max_size'] = 1024;
	        // $config['max_width'] = 300;
	        // $config['max_height'] = 300;
	        //print_r($_FILES);exit();
	        $this->load->library('upload', $config);
	        $error='';
	        $fdata=array();
	        if (empty($_FILES['blog_image']['name'])) {
	            return $config['upload_path'];
	        }

	        if ( ! $this->upload->do_upload('blog_image')){

	            $error = $this->upload->display_errors();
	            $dt['message'] = $error;
	            $this->session->set_userdata($dt);
	            redirect('Super_admin/add_blog');

	        }else{

	            $fdata = $this->upload->data();
	            $blog_image =  $config['upload_path'] . $fdata['file_name'];
	            $this->db->set('blog_image', $blog_image);
	        }
			
		}//if

		// echo '<pre>';
		// print_r($data);
		// exit();

		$result = $this->Superadmin_model->update_blog_info($id);

		if($result){
			$sdata = array();
			$sdata['message'] = 'Update Blog Information Successfully...!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_blog');
		}else{
			$sdata = array();
			$sdata['message'] = 'Failed to Update...!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_blog');
		}

	}//update_blog


	public function delete_blog($id){

		$result = $this->Superadmin_model->delete_blog_info_by_id($id);
		if($result){
			$sdata = array();
			$sdata['message'] = 'Blog Delete Successfully...!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_blog');
		}else{
			$sdata = array();
			$sdata['message'] = 'Failed to Delete...!!!';
			$this->session->set_userdata($sdata);
			redirect('Super_admin/manage_blog');
		}
	}

//=============================== Blog End=========================================//


}//Super_admin