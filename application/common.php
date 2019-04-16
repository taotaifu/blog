<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function bind_check_token($token =''){
    $signature = input('signature');
    $timestamp = input('timestamp');
    $nonce = input('nonce');
    $tmpArr=array($token,$timestamp,$nonce);
    sort($tmpArr,SORT_STRING);
    $tmpStr=implode($tmpArr);
    $tmpStr=sha1($tmpStr);
    if ($tmpStr == $signature){
        return true;
    } else{
        return false;
    }
}
function fn_curl_post($uri,$data){
    // 参数数组
    $ch = curl_init ();
    // print_r($ch);
    curl_setopt ( $ch, CURLOPT_URL, $uri );
    curl_setopt ( $ch, CURLOPT_POST, 1 );
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
    $return = curl_exec ( $ch );
    curl_close ( $ch );
    return $return;
}
function jiqiren_huifu($text = ''){
    $url = "http://openapi.tuling123.com/openapi/api/v2";
    $post = [
        "reqType"   =>  0,
        "perception"    =>   [
            "inputText"=> [
                "text"=> $text
            ],
        ],
        "userInfo"=> [
            "apiKey"=> "4c96e656c39f4812ba31fee73c9512ce",
            "userId"=> "4d2c76ad2638cbeb"
        ]
    ];
    $res = fn_curl_post($url,json_encode($post));
    $res = json_decode($res,TRUE);
    $text = '';
    if (!empty($res['results']['0'])){
        if (is_array($res['results'])){
            foreach ($res['results'] as $v) {
                $text .= $v['values']['text'];
            }
        } else{
            $text = $res['results']['values']['text'];
        }
        return $text;
    } else{
        return '';
    }
}