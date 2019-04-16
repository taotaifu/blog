<?php

namespace app\admin\controller;

use think\Controller;

class Webset extends Controller
{
    public function index(){
		//获取首页所有数据
		$field=db ('webset')->select ();
		//分配到页面
		$this->assign ('field',$field);
		return $this->fetch ();
	}

	//编辑页面
	public function edit()
	{
		if ( \request ()->isAjax ()) {
			$res = (new \app\common\model\Webset())->edit ( input ( 'post.' ) );
			if ( $res[ 'valid' ] ) {
				//说明执行成功
				$this->success ( $res[ 'msg' ] , 'index' );
			} else {
				//说明执行失败
				$this->error ( $res[ 'msg' ] );
			}
		}
	}
}
