<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
栏目控制器
*/
class Cate extends Admin_Controller {
	public function __construct(){
		parent::__construct();

		#$this->output->enable_profiler(TRUE);

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('cate_model','cate');
	}

	# 显示
	function index(){
		$data['cate'] = $this->cate->select();
		$this->load->view('cate/index.html',$data);
	}

	# 编辑显示
	function edit(){
		$id = $this->uri->segment(4);
		$data['cate'] = $this->cate->find($id);
		$this->load->view('cate/edit.html',$data);
	}

	# 保存编辑
	function editSave(){
		$id = $this->input->post('id');
		$data['cname'] = $this->input->post('cname');
		$this->cate->update_data($id,$data);
		success('admin/cate/index','修改成功');
	}

	# 删除
	function del(){
		$id = $this->uri->segment(4);
		$this->cate->del($id);
		success('admin/cate/index','删除成功');
	}


}