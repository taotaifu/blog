<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/www/wwwroot/blog_taotaifu_cn/public/../application/admin/view/link/store.html";i:1547801113;s:62:"/www/wwwroot/blog_taotaifu_cn/application/admin/view/base.html";i:1554275153;}*/ ?>
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
          <cite>友链列表</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">
    <blockquote class="layui-elem-quote">每个tr 上有两个属性 cate-id='1' 当前分类id fid='0' 父级id ,顶级分类为 0，有子分类的前面加收缩图标<i class="layui-icon x-show" status='true'>&#xe623;</i></blockquote>
    <xblock>
        <a href="<?php echo url('index'); ?>" class="layui-btn layui-btn-danger">友链列表</a>
        <?php if(input('param.link_id')): ?>
        <a href="" class="layui-btn layui-btn-danger">编辑友链</a>
        <?php else: ?>
        <a href="" class="layui-btn layui-btn-danger">添加友链</a>
        <?php endif; ?>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
    </xblock>
    <form class="layui-form" action="" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
                <span class="x-red"></span>友链名称
            </label>
            <div class="layui-input-inline">
                <input type="text" id="" name="link_name" value="<?php echo $oldData['link_name']; ?>"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
                <span class="x-red"></span>url地址
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="link_url" value="<?php echo $oldData['link_url']; ?>"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
                <span class="x-red"></span>排序
            </label>
            <div class="layui-input-inline">
                <input type="number"  name="link_sort" value="<?php echo $oldData['link_sort']; ?>" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">
            </label>
            <input type="hidden" name="link_id" value="<?php echo input('param.link_id'); ?>">
            <button  class="layui-btn" type="submit" >
                确认
            </button>
        </div>
    </form>
</div>
</body>
<script>
    // 单个删除
    function del(article_id){
        layer.confirm('确认要删除吗 ？',function(index){
            //发异步删除数据
            // alert(id);
            location.href="<?php echo url('del'); ?>"+'?article_id='+article_id;
        });
    }
</script>

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