<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
前台默认控制器
*/
class Admin extends Admin_Controller {
	# 默认方法
	public function index(){
		$this->load->view('admin/main.html');
	}

	public function top(){
		$this->load->view('admin/top.html');
	}

	public function center(){
		$this->load->view('admin/center.html');
	}

	public function down(){
		$this->load->view('admin/down.html');
	}

	public function left(){
		$this->load->view('admin/left.html');
	}	
	public function right(){
		$this->load->view('admin/right.html');
	}				
}