<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Welcome_model');
		$this->load->model('Slide_model');
	}

	public function index(){
		$data['banner'] = TRUE;
		$data['title'] = "DAILY SHIKKHABARTA";
		$data['published_blog'] = $this->db->select('*')->from('tbl_blog')->where('publication_status',1)->order_by('id','DESC')->limit(4)->get()->result();
       	$data['all_published_category'] = $this->Welcome_model->select_published_category();
       	$data['all_slider'] = $this->Slide_model->select_slide_image();
       	$data['all_popular_blog'] = $this->Welcome_model->popular_blog();
        $data['recent_blog']=$this->Welcome_model->select_recent_blog();
		$data['content'] = $this->load->view('frontend/page/body', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function About(){
		$data['banner'] = TRUE;
		$data['title'] = "DAILY SHIKKHABARTA | About Us";
       	$data['all_published_category'] = $this->Welcome_model->select_published_category();
       	$data['all_popular_blog'] = $this->Welcome_model->popular_blog();
        $data['recent_blog']=$this->Welcome_model->select_recent_blog();
		$data['content'] = $this->load->view('frontend/page/about', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function BlogByID($cat_id = ''){
		$data['banner'] = FALSE;
		$FindcatName = $this->db->select('tbl_category.cat_name')->from('tbl_category')->where('cat_id',$cat_id)->get()->row();
		$catName = $FindcatName->cat_name;
		$data['title'] = "Blog | ".$catName;
		$data['blog_byCatID'] = $this->Welcome_model->select_published_blog_by_category($cat_id);
		$data['all_published_category']=$this->Welcome_model->select_published_category();
		$data['all_popular_blog'] = $this->Welcome_model->popular_blog();
        $data['recent_blog']=$this->Welcome_model->select_recent_blog();
		$data['content'] = $this->load->view('frontend/page/blog_by_id', $data, true);
		$this->load->view('frontend/index',$data);
	}

	public function BlogDetails($blog_id = ''){
		$data['banner'] = FALSE;
		$data['selected_blog'] = $this->Welcome_model->select_blog_by_id($blog_id);
		$title = $data['selected_blog']->blog_title;
		$data['title'] = $title;
		$data['all_published_category']=$this->Welcome_model->select_published_category();
		$data['all_popular_blog'] = $this->Welcome_model->popular_blog();
        $data['recent_blog']=$this->Welcome_model->select_recent_blog();
		$data['content'] = $this->load->view('frontend/page/blog_details', $data, true);
		$this->load->view('frontend/index',$data);
	}

}//welcome

?>