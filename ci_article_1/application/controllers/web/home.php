<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
前台默认控制器
*/
class Home extends Home_Controller {
	public function index(){
		$this->load->view('home/index');
	}

	# 分类页
	public function category(){
		echo site_url().'/web/home/category';
		#$this->load->view('home/category');
	}

	#文章阅读页显示
	public function article(){
		echo '文章阅读页显示';
	}
}