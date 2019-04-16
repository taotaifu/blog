<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"/www/wwwroot/blog_taotaifu_cn/public/../application/admin/view/article/store.html";i:1554200765;s:62:"/www/wwwroot/blog_taotaifu_cn/application/admin/view/base.html";i:1554275153;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin2.0</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/static/admin/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/admin/css/font.css">
    <link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/animate.css/3.7.0/animate.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
    <!--<meta name="csrf-token" content="{{csrf_token()}}">-->
</head>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="/static/admin/index.html">X-admin v2.0</a></div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>
    <ul class="layui-nav left fast-add" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">+新增</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a onclick="x_admin_show('资讯','http://www.baidu.com')"><i class="iconfont">&#xe6a2;</i>资讯</a></dd>
                <dd><a onclick="x_admin_show('图片','http://www.baidu.com')"><i class="iconfont">&#xe6a8;</i>图片</a></dd>
                <dd><a onclick="x_admin_show('用户','http://www.baidu.com')"><i class="iconfont">&#xe6b8;</i>用户</a></dd>
            </dl>
        </li>
    </ul>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="<?php echo url('admin/entry/pass'); ?>">修改密码</a></dd>
                <dd><a onclick="x_admin_show('切换帐号','http://www.baidu.com')">切换帐号</a></dd>
                <dd><a href="/static/admin/login.html">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index"><a href="/">前台首页</a></li>
    </ul>
</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>栏目管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo url('admin/category/index'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>栏目列表</cite>

                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>标签管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo url('admin/tag/index'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>标签列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>文章管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo url('admin/article/index'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文章列表</cite>
                        </a>
                        <a href="<?php echo url('admin/article/reqycle'); ?>">
                            <i class="iconfont">&#xe6a8;</i>
                            <cite>回收站</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>友链管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo url('admin/link/index'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>友链首页</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe726;</i>
                    <cite>站点管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo url('admin/webset/index'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>网站配置</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b4;</i>
                    <cite>轮播图管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="unicode.html">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>轮播图列表</cite>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
        <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>我的桌面</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show" style="overflow-y:scroll">
                <div class="layui-form">
                    
<body>
<div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a>
          <cite>文章列表</cite></a>

      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">
    <blockquote class="layui-elem-quote">每个tr 上有两个属性 cate-id='1' 当前分类id fid='0' 父级id ,顶级分类为 0，有子分类的前面加收缩图标<i class="layui-icon x-show" status='true'>&#xe623;</i></blockquote>
    <xblock>
        <a href="<?php echo url('index'); ?>" class="layui-btn layui-btn-danger">文章列表</a>
        <a href="<?php echo url('store'); ?>" class="layui-btn layui-btn-danger">添加文章</a>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
    </xblock>
    <form class="layui-form" action="" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
                <span class="x-red"></span>文章标题
            </label>
            <div class="layui-input-inline">
                <input type="text" id="" name="arc_title"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
                <span class="x-red"></span>文章作者
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="arc_author"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
                <span class="x-red"></span>文章排序
            </label>
            <div class="layui-input-inline">
                <input type="number"  name="arc_sort" value="100" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
                所属分类
            </label>
            <div class="layui-input-inline">
                <select type="text"   name="cate_id" autocomplete="off" class="layui-input">
                    <option value="0">请选择分类</option>
                    <?php if(is_array($cateData) || $cateData instanceof \think\Collection || $cateData instanceof \think\Paginator): if( count($cateData)==0 ) : echo "" ;else: foreach($cateData as $key=>$vo): ?>
                    <option value="<?php echo $vo['cate_id']; ?>"><?php echo $vo['_cate_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><span class="x-red"></span>标签</label>
            <div class="layui-input-block">
                <?php if(is_array($tagData) || $tagData instanceof \think\Collection || $tagData instanceof \think\Paginator): if( count($tagData)==0 ) : echo "" ;else: foreach($tagData as $key=>$vo): ?>
                <input type="checkbox" name="tag[]" value="<?php echo $vo['tag_id']; ?>" lay-skin="primary" title="<?php echo $vo['tag_name']; ?>" checked=""><div class="layui-unselect layui-form-checkbox layui-form-checked"><span><?php echo $vo['tag_name']; ?></span><i class="layui-icon"></i></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="layui-form-item form-group">
            <label for="" class="layui-form-label">
                <span class="x-red"></span>缩略图
            </label>
                <div class="layui-upload" style="margin-left:110px;">
                    <input type="text" id="arc_thumb" name="arc_thumb" value="" style="height: 34px;width: 300px">
                    <button type="button" class="layui-btn" name="arc_thumb" id="test1">上传图片</button>
                    <div class="layui-upload-list">
                        <img style="width: 200px" class="layui-upload-img" id="demo1" src="<?php echo isset($data['icon'])?$data['icon']:''; ?>">
                        <p id="demoText"></p>
                    </div>
                </div>
                <script>
                    layui.use(['upload','form','laydate'], function() { //upload 文件上传
                        var form = layui.form
                            ,layer = layui.layer
                            ,layedit = layui.layedit
                            ,laydate = layui.laydate;
                        var $ = layui.jquery
                            ,upload = layui.upload; //文件上传

             
                        laydate.render({
                            elem: '#date1'
                        });
             
                        //普通图片上传
                        var uploadInst = upload.render({
                            elem: '#test1'
                            , url: '<?php echo url("Article/upload"); ?>'
                            , before: function (obj) {
                                //预读本地文件示例，不支持ie8
                                obj.preview(function (index, file, result) {
                                    $('#demo1').attr('src', result); //图片链接（base64）
                                });
                            }
                            , done: function (res) {
                                //如果上传失败
                                if (res.code == 0) {
                                    return layer.msg('上传失败');
                                }
                                // alert(res.savename);
                                $("#arc_thumb").val(res.savename);
                                //上传成功
                            }
                            , error: function () {
                                //演示失败状态，并实现重传
                                var demoText = $('#demoText');
                                demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                                demoText.find('.demo-reload').on('click', function () {
                                    uploadInst.upload();
                                });
                            }
                        });
             
                        //监听提交
                        form.on('submit(demo1)', function(data){
                            layer.alert(JSON.stringify(data.field), {
                                title: '最终的提交信息'
                            })
                            return false;
                        });
             
                    });
                      
                </script>
            <!-- </div> -->
        </div>

    <div class="layui-form-item layui-form-text">
            <label for="" class="layui-form-label">
                文章摘要
            </label>
            <div class="layui-input-block">
                <textarea type="text" placeholder="请输入内容"  name="arc_digest" class="layui-textarea"></textarea>
            </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label for="" class="layui-form-label">
            文章内容
        </label>
        <div class="layui-input-block">
             <textarea id="demo" name="arc_content" style="display: none;size: 50%"></textarea>
            <script>
            layui.use('layedit', function(){
              var layedit = layui.layedit;
              layedit.set({
                  uploadImage: {
                     url: '<?php echo url("Article/editUpload"); ?>' //接口url
                    ,type: 'post' //默认post
                  }
                });
              layedit.build('demo'); //建立编辑器
            });
            </script>
        </div>
    </div>
     <div class="layui-form-item">
            <label for="" class="layui-form-label">
            </label>
            <button  class="layui-btn" type="submit" >
                确认
            </button>
      </div>
    </form>
</div>

</body>


                </div>
            </div>
        </div>
        <div class="xScroll" data-animation="fadeInUp">
        </div>
    </div>
</div>
<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright" style="margin-left: 350px">Copyright© 2017 <a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow" style="color:green">京ICP备18055675号-1</a>&nbsp;&nbsp;网址：<a href="http://blog.taotaifu.cn" style="color: white">blog.taotaifu.cn</a> &nbsp;&nbsp;陶太富@版权所有 729589198@qq.com <span>|</span>
        <span id="cnzz_stat_icon_1261722476"><a href="https://www.cnzz.com/stat/website.php?web_id=1261722476" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="https://icon.cnzz.com/img/pic.gif"></a></span>
        <script src=" https://s11.cnzz.com/z_stat.php?id=1261722476&amp;show=pic" type="text/javascript"></script>
        <script src="https://c.cnzz.com/core.php?web_id=1261722476&amp;show=pic&amp;t=z" charset="utf-8" type="text/javascript"></script>
        <a target="_blank" href="https://tongji.baidu.com/web/welcome/ico?s=a4535105572471f305ae4fac98e7be00" style="color: white">百度统计</a>
    </div>
</div>
<!-- 底部结束 -->
<script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>