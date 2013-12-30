<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
文章控制器
*/
class Article extends Admin_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('article_model','art');
	}
	# 发表文章显示
	public function show(){
		$this->load->library('pagination');
		/*
		$config['base_url']   = site_url('admin/article/show');
		$config['total_rows'] = 200;
		$config['per_page']   = 2;
		$config['uri_segment'] = 4;
		$config['num_links'] = 5;

		$this->pagination->initialize($config); 

		echo $this->pagination->create_links();
		*/
		$data['cate'] = $this->art->cateArr();
		$this->load->view('article/show.html',$data);
	}

	# 发表文章动作
	public function send(){
		/*
		$this->form_validation->set_rules('title', '文章标题不能为空', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('type', '类型', 'required|integer');
		$this->form_validation->set_rules('cid', '栏目', 'integer');
		$this->form_validation->set_rules('desn', '摘要', 'trim|required|max_length[100]|xss_clean');
		$this->form_validation->set_rules('body', '内容', 'trim|required|max_length[2000]|xss_clean');
		$status = $this->form_validation->run();
		*/

	  $config['upload_path'] = base_url().'/public/uppic/';
	  $config['allowed_types'] = 'gif|jpg|png|jpeg';
	  $config['max_size'] = '10000';
	  $config['file_name'] = date('YmdHis').mt_rand(1000,9999);
	  $this->load->library('upload', $config);
	 //执行上传
	  $state = $this->upload->do_upload('spic');
	  if(!$state){
	  	error('必须上传图片');exit;
	  }
	  $wrong = $this->upload->display_errors();
	  if($wrong){
	  	error($wrong);exit;
	  }

	  $picData = $this->upload->data();

	  p($picData);exit;


		$status = $this->form_validation->run('article');
		if($status){
			$data = array(
				'title'=>$this->input->post('title'),
				'type'=>$this->input->post('type'),
				'cid'=>$this->input->post('cid'),
				'spic'=>$this->input->post('spic'),
				'desn'=>$this->input->post('desn'),
				'body'=>$this->input->post('body'),
				'pubtime'=>time()
			);

			$this->art->add($data);
			success('admin/article/show','添加成功');
		}else{
			$this->load->helper('form');
			$this->load->view('article/show.html');
		}
	}

}