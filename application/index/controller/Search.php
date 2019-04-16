<?php
namespace app\index\controller;
use app\index\controller\Common;

class Search extends Common{

     public function index(){
         // 关键词
         $keywords=input('keywords');
         if ($keywords){
             $article['title']=['like','%'.$this.'%'];
             $searchres=db('article')->where($article)->order('id desc')->paginate($listRows=3,$simple=false,$config=[
                 'query'=>array('keywords'=>$keywords),
             ]);
             $this->assign(array(
                 'searchres'=>$searchres,
                 'keywords'=>$keywords));
         }else{
             $this->assign(array(
                 'searchres'=>null,
                 'keywords'=>'暂无数据'));

         }

        return $this->fetch('search');
     }


}