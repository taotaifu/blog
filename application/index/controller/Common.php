<?php

namespace app\index\controller;

use app\common\model\Tag;
use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct ( Request $request = null ) {

    	parent::__construct ( $request );
    	//读取配置项
		$webset=$this->loadWebSet();
		$this->assign ('_webset',$webset);
		//获取顶级栏目数据
		$cateData=$this->loadCateData();
		$this->assign ('_cateData',$cateData);
		//获取所有栏目数据
		$allCateData=$this->loadAllCateData();
		$this->assign ('_allCateData',$allCateData);
		//获取标签数据
		$tagData=$this->loadTagData();

		$this->assign ('_tagData',$tagData);
		//获取最新文章数据
		$articleData=$this->loadArticleData();
		//halt ($articleData);
		$this->assign ('_articleData',$articleData);
		//获取友情链接数据
		$linkData=$this->loadLinkData();
		$this->assign ('_linkData',$linkData);


    }


	//读取配置项
	private function loadWebSet(){
    	return db ('webset')->column ('webset_value','webset_name');

	}
	//读取栏目项
	private function loadCateData(){
        $data =db ('cate')->where ('cate_pid',0)->order ('cate_sort desc')->limit (6)->select ();

        foreach ($data as $k => $v){
            if (!$v['cate_url']){
                $data[$k]['cate_url'] = url('index/lists/index',['cate_id'=>$v['cate_id']]);
            }
        }
        return $data;

	}

	//读取栏目项
	private function loadAllCateData(){
		return db ('cate')->order ('cate_sort desc')->select ();

	}
	//读取标签项
	private function loadTagData(){
		return db ('tag')->select ();

	}

	//读取最新文章项
	private function loadArticleData(){
		return db ('article')->order ('sendtime desc')->field ('arc_id,arc_title')->select ();

	}
	//读取友情链接项
	private function loadLinkData(){
		return db ('link')->order ('link_sort desc')->select ();

	}

}
