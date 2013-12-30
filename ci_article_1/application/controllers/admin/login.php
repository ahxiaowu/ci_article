<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
后台登陆页面
*/
class Login extends Admin_Controller {
	# 默认方法
	public function index(){
		/*
		//加载验证码辅助函数
		$this->load->helper('captcha');
		$codeStr = str_shuffle('abcdefghijklmnopqrstuvwxyz');
		//配置项
		$vals = array(
			'word'=>substr($codeStr,0,4),
		    'img_path' => FCPATH.'public/codeimg/',
		    'img_url' => base_url('public/codeimg').'/',
		    'img_width' => 100,
		    'img_height' => 30,
		    'expiration' => 1
	    );
		$cap = create_captcha($vals);
		$data['cap'] = $cap['image'];
		$this->load->view('login/index.html',$data);
		*/
		$this->load->view('login/index.html');
	}

	function code(){
		$this->load->helper('captcha');
		$codeStr = str_shuffle('abcdefghijklmnopqrstuvwxyz');
		$vals = array(
			'word'=>substr($codeStr,0,4),
		    'img_path' => FCPATH.'public/codeimg/',
		    'img_url' => base_url('public/codeimg').'/',
		    'img_width' => 100,
		    'img_height' => 30,
		    'expiration' => 1
	    );
		$cap = create_captcha($vals);
	}

	function showcode(){
		$this->load->library('validationcode',array('width'=>80,'height'=>20,'codeNum'=>4));
		$this->validationcode->showImage();   //输出到页面中供 注册或登录使用
		#$_SESSION["code"]=$this->validationcode->getCheckCode();  //将验证码保存到服务器中
	}


}