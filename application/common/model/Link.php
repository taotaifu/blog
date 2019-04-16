<?php

namespace app\common\model;

use think\Model;

class Link extends Model
{
	//主键
	protected $pk='link_id';
	//设置当前模型对应的完整数据表名称
	protected $table='blog_link';


	//获取友链首页数据
	public function getAll(){

		return $this->order('link_sort desc,link_id desc')->paginate(2);

	}

	//添加友链
	public function store($data){

		//验证
		$result=$this->validate(true)->save ($data,$data['link_id']);
		if ($result){
			//执行成功
			return ['valid'=>1,'msg'=>'操作成功'];
		}else{
			//说明执行失败
			return ['valid'=>0,'msg'=>$this->getError ()];
		}

	}

}
