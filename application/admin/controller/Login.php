<?php

namespace app\admin\controller;

use app\common\model\Admin;
use houdunwang\crypt\Crypt;
use think\Controller;

class Login extends Controller
{
    //加载登录页面
	public function login(){
		//数据加密
		//echo Crypt::encrypt('admin888');//h3vPU8JGuF3VS/uxIpjRSw==
		//数据解密
		//echo Crypt::decrypt('h3vPU8JGuF3VS/uxIpjRSw==');//admin888
		//测试数据库连接
		//$data= db ('admin')->find (1);
		//dump ($data);
		//数据请求方式
		if (request ()->isPost ()){
			//打印测试
			//halt ($_POST);
			$res=(new Admin())->login(input ('post.'));
			//判断登录成功或者失败给出不同的提示
			if ($res['valid']){
               //说明登录成功
				$this->success ($res['msg'],'admin/entry/index');exit;
			}else{
               //说明登录失败
				$this->error ($res['msg']);exit;
			}
		}
		//加载模板
		return $this->fetch ();

	}
}
