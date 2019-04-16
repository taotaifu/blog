<?php
namespace app\index\controller;
use think\Controller;
use think\Loader;
use think\Request;

class Wechat extends Controller
{
    public $wx_config = [
        //	微信
        'appid' =>  'wxf65c2a857ec38ea1',
        'secret'    =>  '5083e9a73931f2fdb32a9aaf1675304e',
        'wx_token'     =>  'taotaifu',
    ];

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }


    public function validate_token(){
        $res = bind_check_token($this->wx_config['wx_token']);
        if (!$res){
            bind_check_token($this->wx_config['wx_token']);
            echo input('echostr');
            exit();
        }   else{
            Loader::import('weixin.weixin');
            $wx_class = new \Weixin($this->wx_config);
            $wx_class->responseMsg();
            exit();
        }

    }

    public function test_jiqiren(){
        $a = jiqiren_huifu('你好');
        echo $a;
    }

}
