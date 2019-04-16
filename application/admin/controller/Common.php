<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    //构建构造方法
	public function __construct ( Request $request = null ) {

		parent::__construct ( $request );
		//进行登录验证
        if (!session ('admin.admin_id')){
        	$this->redirect ('admin/login/login');
		}
	}
}
