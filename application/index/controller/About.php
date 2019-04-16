<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\Category;

class About extends Controller
{
	public function index()
	{
        $headConf=['title'=>'陶太富博客--关于我'];
        $this->assign ('headConf',$headConf);
        $cate_id=1;
        $tag_id=input ('param.tag_id');
        if ($cate_id){
            //当前分类所有子级的分类
            $cids=(new Category())->getSon (db ('cate')->select (),$cate_id);
            $cids[]=$cate_id;
            $headData=[
                'title'=>'分类',
                'name'=>db ('cate')->where ('cate_id',$cate_id)->value ('cate_name'),
                'total'=>db ('article')->whereIn ('cate_id',$cids)->count (),
            ];

            //获取文章数据
            $articleData=db ('article')->alias ('a')
                ->join ('__CATE__ c','a.cate_id=c.cate_id')->where ('a.is_recycle',2)->whereIn ('a.cate_id',$cids)->select ();


        }

        if ($tag_id){
            $headData=[
                'title'=>'标签',
                'name'=>db ('tag')->where ('tag_id',$tag_id)->value ('tag_name'),
                'total'=>db ('arc_tag')->where('tag_id',$tag_id)->count (),
            ];
            //获取文章数据
            $articleData=db ('article')->alias ('a')
                ->join ('__ARC_TAG__ at','a.arc_id=at.arc_id')
                ->join ('__CATE__ c','a.cate_id=c.cate_id')
                ->where ('a.is_recycle',2)->where('at.tag_id',$tag_id)->select ();


        }

        foreach ($articleData as $k=>$v){
            $articleData[$k]['tags']=db ('arc_tag')->alias ('at')
                ->join ('__TAG__ t','at.tag_id=t.tag_id')
                ->where ('at.arc_id',$v['arc_id'])->field ('t.tag_id,t.tag_name')
                ->select();

        }
        $this->assign ('headData',$headData);
        $this->assign ('articleData',$articleData);

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
		return $this->fetch();
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
