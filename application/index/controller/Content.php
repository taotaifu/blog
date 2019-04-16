<?php

namespace app\index\controller;


use think\Db;
use think\Request;

class Content extends Common
{
	public function index(){

		//获取文章数据
		$arc_id=input ('param.arc_id');
		//文章点击次数
		db ('article')->where ('arc_id',$arc_id)->setInc ('arc_click');
		$articleData=db ('article')->field ('arc_id,arc_title,arc_author,arc_content,sendtime')->find ($arc_id);
		$headConf=['title'=>"陶太富博客--{$articleData['arc_title']}"];
		$this->assign ('headConf',$headConf);
		//当前文章标签
		$articleData['tags']=db ('arc_tag')->alias ('at')
			->join ('__TAG__ t','at.tag_id=t.tag_id')
			->where ('at.arc_id',$articleData['arc_id'])->field('t.tag_id,t.tag_name')->limit(3)->select();

        $arc_id = Request::instance()->param('arc_id');
        $detail_info = Db::name("article")->where("arc_id",$arc_id)->find();

		$this->assign ('articleData',$articleData);
		return $this->fetch ();

	}
}
