<?php

namespace app\common\model;

use think\Model;

class Webset extends Model
{
	//主键
	protected $pk='webset_id';
	//设置当前模型对应的完整数据表名称
	protected $table='blog_webset';


	//添加站点配置
	public function edit($data){

		//验证
		$res=$this->validate([
           'webset_value'=>'require'
		   ],
			[
				'webset_value.require'=>'请输入站点配置值'

			])->save ($data,[$this->pk=>$data['webset_id']]);

		if ($res){
			//执行成功
			return ['valid'=>1,'msg'=>'操作成功'];
		}else{
			//说明执行失败
			return ['valid'=>0,'msg'=>$this->getError ()];
		}

	}

}
