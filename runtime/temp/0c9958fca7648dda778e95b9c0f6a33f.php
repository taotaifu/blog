<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/www/wwwroot/blog_taotaifu_cn/public/../application/admin/view/entry/index.html";i:1554449722;s:62:"/www/wwwroot/blog_taotaifu_cn/application/admin/view/base.html";i:1554275153;}*/ ?>
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
<div class="x-body layui-anim layui-anim-up">
    <blockquote class="layui-elem-quote">欢迎管理员：
        <span class="x-red">test</span>！当前时间:<?php echo $showtime=date("Y-m-d H:i:s"); ?></blockquote>
    <fieldset class="layui-elem-field">
        <legend>数据统计</legend>
        <div class="layui-field-box">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-body">
                        <div class="layui-carousel x-admin-carousel x-admin-backlog" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 90px;">
                            <div carousel-item="">
                                <ul class="layui-row layui-col-space10 layui-this">
                                    <li class="layui-col-xs2">
                                        <a href="javascript:;" class="x-admin-backlog-body">
                                            <h3>文章数</h3>
                                            <p>
                                                <cite>70</cite></p>
                                        </a>
                                    </li>
                                    <li class="layui-col-xs2">
                                        <a href="javascript:;" class="x-admin-backlog-body">
                                            <h3>会员数</h3>
                                            <p>
                                                <cite>12</cite></p>
                                        </a>
                                    </li>
                                    <li class="layui-col-xs2">
                                        <a href="javascript:;" class="x-admin-backlog-body">
                                            <h3>评论数</h3>
                                            <p>
                                                <cite>99</cite></p>
                                        </a>
                                    </li>
                                    <li class="layui-col-xs2">
                                        <a href="javascript:;" class="x-admin-backlog-body">
                                            <h3>查看次数</h3>
                                            <p>
                                                <cite>6867</cite></p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="layui-elem-field">
        <legend>系统通知</legend>
        <div class="layui-field-box">
            <table class="layui-table" lay-skin="line">
                <tbody>
                <tr>
                    <td >
                        <a class="x-a" href="/" target="_blank">新版x-admin 2.0上线了</a>
                    </td>
                </tr>
                <tr>
                    <td >
                        <a class="x-a" href="/" target="_blank">交流qq:(729589198)</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </fieldset>
    <fieldset class="layui-elem-field">
        <legend>系统信息</legend>
        <div class="layui-field-box">
            <table class="layui-table">
                <tbody>
                <tr>
                    <th>后台版本</th>
                    <td>X-admin2.0</td></tr>
                <tr>
                    <th>服务器地址</th>
                    <td>blog.taotaifu.cn</td></tr>
                <tr>
                    <th>操作系统</th>
                    <td>WINNT</td></tr>
                <tr>
                    <th>运行环境</th>
                    <td>Nginx/1.8.1(Win64)</td></tr>
                <tr>
                    <th>PHP版本</th>
                    <td>7.2.10</td></tr>
                <tr>
                    <th>PHP运行方式</th>
                    <td>cgi-fcgi</td></tr>
                <tr>
                    <th>MYSQL版本</th>
                    <td>5.7.23</td></tr>
                <tr>
                    <th>ThinkPHP</th>
                    <td>5.0.18</td></tr>
                <tr>
                    <th>上传附件限制</th>
                    <td>2M</td></tr>
                <tr>
                    <th>执行时间限制</th>
                    <td>30s</td></tr>
                <tr>
                    <th>剩余空间</th>
                    <td>86015.2M</td></tr>
                </tbody>
            </table>
        </div>
    </fieldset>
    <fieldset class="layui-elem-field">
        <legend>开发团队</legend>
        <div class="layui-field-box">
            <table class="layui-table">
                <tbody>
                <tr>
                    <th>版权所有</th>
                    <td>Mrs.默先森
                        <a href="http://blog.taotaifu.cn/" class='x-a' target="_blank">访问首页</a></td>
                </tr>
                <tr>
                    <th>开发者</th>
                    <td>陶太富(729589198@qq.com)</td></tr>
                </tbody>
            </table>
        </div>
    </fieldset>
    <blockquote class="layui-elem-quote layui-quote-nm">感谢layui,百度Echarts,jquery,本系统由x-admin提供技术支持。</blockquote>
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