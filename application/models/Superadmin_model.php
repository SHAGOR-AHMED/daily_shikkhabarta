<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Superadmin_model extends CI_Model {
	
	public function save_category_info($data){

		return $this->db->insert('tbl_category',$data);
	}

	public function select_all_category(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query = $this->db->get();
        return $result = $query->result();
	}

	public function delete_category_info_by_id($cat_id){

		return $this->db->where('cat_id',$cat_id)->delete('tbl_category');
	}

	public function unpublished_category_info($cat_id){

		$this->db->set('publication_status',0);
		$this->db->where('cat_id',$cat_id);
		$this->db->update('tbl_category');

	}

	public function published_category_info($cat_id){

		$this->db->set('publication_status',1);
		$this->db->where('cat_id',$cat_id);
		$this->db->update('tbl_category');

	}

	public function select_category_info_by_id($cat_id){

		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('cat_id',$cat_id);
		$query_result=$this->db->get();
		$result=$query_result->row();
		return $result;

	}

	public function update_category_info($data,$cat_id){

		return $this->db->where('cat_id',$cat_id)->update('tbl_category',$data);

	}

	//===================Category End ============================//
	//===================Blog ============================//

		public function save_blog_info($data){

			return $this->db->insert('tbl_blog',$data);

		}

		public function select_all_blog($perPage, $offset){

			if ($offset == null) {
            	$offset = 0;
        	}

			$this->db->select('tbl_blog.*');
			$this->db->select('tbl_category.cat_name');
			$this->db->from('tbl_blog');
			$this->db->join('tbl_category','tbl_category.cat_id = tbl_blog.cat_id');
			$this->db->limit($perPage, $offset);
			$query_result = $this->db->get();
			$result = $query_result->result();
			return $result;
		}

		public function unpublished_blog_info($id){

			$this->db->set('publication_status',0);
			$this->db->where('id',$id);
			$this->db->update('tbl_blog');
		}

		public function published_blog_info($id){

			$this->db->set('publication_status',1);
			$this->db->where('id',$id);
			$this->db->update('tbl_blog');

		}

		public function select_blog_info_by_id($id){

			$this->db->select('*');
			$this->db->from('tbl_blog');
			$this->db->where('id',$id);
			$query_result = $this->db->get();
			$result = $query_result->row();
			return $result;
		}

		public function update_blog_info($id){

			return $this->db->where('id',$id)->update('tbl_blog');
		}


		public function delete_blog_info_by_id($id){

			$data = array('id' => $id);
			$prev_info = $this->db->get_where("tbl_blog",$data)->row();
			unlink($prev_info->blog_image);
			return $this->db->where('id',$id)->delete('tbl_blog');
		}

	//===================Blog End============================//
	//===================Comments============================//

		public function get_all_comments(){

			$this->db->select('*');
			$this->db->from('tbl_comments');
			$query_result = $this->db->get();
			$result = $query_result->result();
			return $result;
		}

	//===================Comments End============================//


}
