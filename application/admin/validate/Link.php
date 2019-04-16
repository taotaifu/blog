<?php
namespace app\admin\validate;
use think\Validate;

class Link extends Validate{

	//验证规则
	protected $rule =[
		'link_name'=>'require',
		'link_url'=>'require',
		'link_sort'=>'require|between:1,999',
	];

	protected $message  =   [
		'link_name.require' => '请输入友链名称',
		'link_url.require' => '请输入url地址',
		'link_sort.require' => '请输入排序',
		'link_sort.between' => '排序需在1-999之间',
	];

}