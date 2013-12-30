<?php 
$config = array(
		'article'=>array(
			array(
				'field'=>'title',
				'label'=>'标题',
				'rules'=>'trim|required|min_length[5]|max_length[12]|xss_clean'
				),
			array(
				'field'=>'type',
				'label'=>'类型',
				'rules'=>'required|integer'
				)		
		)
	);


 ?>