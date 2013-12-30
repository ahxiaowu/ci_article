<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model{

	function add($data){
		$this->db->insert('article',$data);
	}

	function cateArr(){
		$data = $this->db->get('cate')->result_array();
		return $data;
	}


}