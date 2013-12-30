<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cate_model extends CI_Model{
	public function add($data){
		$this->db->insert('cate',$data);
	}

	function select(){
		$data = $this->db->get('cate')->result_array();
		return $data;
	}

	function find($id){
		$data = $this->db->where(array('id'=>$id))->get('cate')->row_array();
		return $data;
	}
	function update_data($id,$data){
		$this->db->update('cate',$data,array('id'=>$id));
	}

	function del($id){
		$this->db->delete('cate',array('id'=>$id));
	}
}