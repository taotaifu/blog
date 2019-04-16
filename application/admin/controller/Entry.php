<?php

namespace app\admin\controller;

use app\common\model\Admin;

class Entry extends Common
{
    //后台页面
	public function index(){

		//加载后台主页页面模板
		return $this->fetch ();
	}

	//修改密码

	public function pass(){

		if (request ()->isPost ()){
			$res=(new Admin())->pass(input ('post.'));
			//清除session中的登录信息
			session (null);
			//判断
			if ($res['valid']){
                  //执行成功
				$this->success ($res['msg'],'admin/entry/index');
			}else{
				//执行失败
               $this->error ($res['msg']);exit;
			}
		}
		//加载修改密码
		return $this->fetch ();
	}
}
