<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_model extends CI_Model {
	
	public function select_published_category(){

        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_published_blog(){

    	$this->db->select('*');
    	$this->db->from('tbl_blog');
    	$this->db->where('publication_status',1);
    	$query_result = $this->db->get();
    	$result = $query_result->result();
    	return $result;
    }

    public function select_blog_by_id($blog_id){

    	$this->db->select('*');
    	$this->db->from('tbl_blog');
    	$this->db->where('id',$blog_id);
    	$query_result = $this->db->get();
    	$result = $query_result->row();
    	return $result;
    }


   public function select_published_blog_by_category($cat_id){

        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->where('cat_id',$cat_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
   }

   public function select_recent_blog(){

        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by('id','desc');
        $this->db->limit(10);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

   }

   public function update_hit_count($hit_count,$id){

        $this->db->set('hit_count',$hit_count);
        $this->db->where('id',$id);
        $this->db->update('tbl_blog');

    }

   public function popular_blog(){

        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by('hit_count','desc');
        $this->db->limit(10);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

   }

   public function save_user_info($data){

        $this->db->insert('tbl_user',$data);
   }

   public function check_user_login_info($user_email,$password){

    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('user_email',$user_email);
    $this->db->where('password',md5($password));
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;

   }

   public function save_comment_info($data){

        $this->db->insert('tbl_comments',$data);
   }

   public function select_comments_by_blog_id($id){

        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('id',$id);
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

   }

}//Welcome_model