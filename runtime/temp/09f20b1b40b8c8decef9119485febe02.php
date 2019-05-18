<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\PHPWAMP\wwwroot\blog_taotaifu_cn\public/../application/index\view\index\index.html";i:1558178790;s:68:"D:\PHPWAMP\wwwroot\blog_taotaifu_cn\application\index\view\base.html";i:1558178789;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $headConf['title']; ?></title>
</head>
<link href="/static/index/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/static/index/css/common.css" />
<link href="/static/index/logo.jpg" rel="shortcut icon" />
<script src="/static/index/plugin/jquery.min.js"></script>
<script src="/static/index/plugin/bootstrap/js/bootstrap.min.js"></script>
<body>
<!--头部-->
<div class="w_header">
    <div class="container">
        <div class="w_header_top">
			<span class="w_header_nav">
					<ul>
						<!--class="active" 用js给-->
						<!--<li style="width: 220px"><a href="#"><img style="height: 55px;width: 220px; position: absolute; top:0px;left: 222px"src="/static/index/logo.jpg" alt="网站Logo"></a></li>-->
						<li if{ condition="!input('param.')}class="active"{/if}><a href="/index.html">首页</a></li>
                        <?php if(is_array($_cateData) || $_cateData instanceof \think\Collection || $_cateData instanceof \think\Paginator): if( count($_cateData)==0 ) : echo "" ;else: foreach($_cateData as $key=>$vo): ?>
						<li if{ condition="input('param.cate_id')==$vo['cate_id']"} class="active"{/if}><a href="<?php echo $vo['cate_url']; ?>"><?php echo $vo['cate_name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li if{ condition="!input('param.')}class="active"{/if}><a href="<?php echo url('About/index'); ?>">关于我</a></li>-->
					</ul>
				</span>
            <div class="w_search">
                <div class="w_searchbox search">
                    <form action="<?php echo url('Search/index'); ?>"  name="form" id="form" method="get">
                    <input type="text" name="keywords" class="keywords" id="textfield" placeholder="请输入搜索词" maxlength="80" />
                    <button>搜索</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--头部结束-->
<!--中间内容-->
<div class="w_container">
    <div class="container">
        <div class="row w_main_row">
            <!--中间左侧开始-->
            <div class="col-lg-9 col-md-9 w_main_left">
               
<div class="panel panel-default">

  <div id="w_carousel" class="carousel slide w_carousel" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
   <li data-target="#w_carousel" data-slide-to="0" class="active"></li>
   <li data-target="#w_carousel" data-slide-to="1"></li>
   <li data-target="#w_carousel" data-slide-to="2"></li>
   <li data-target="#w_carousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   <div class="item active">
    <img src="/static/index/img/slider/slide1.jpg" alt="...">
    <div class="carousel-caption">
     <h3>First slide label</h3>
     <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
    </div>
   </div>
   <div class="item">
    <img src="/static/index/img/slider/slide2.jpg" alt="...">
    <div class="carousel-caption">...</div>
   </div>
   <div class="item">
    <img src="/static/index/img/slider/slide3.jpg" alt="...">
    <div class="carousel-caption">...</div>
   </div>
   <div class="item">
    <img src="/static/index/img/slider/slide4.jpg" alt="...">
    <div class="carousel-caption">...</div>
   </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#w_carousel" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left"></span>
   <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#w_carousel" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right"></span>
   <span class="sr-only">Next</span>
  </a>
 </div>

</div>

<div class="panel panel-default contenttop">
 <a href="javascript:;">
  <strong>站点公告</strong>
  <hr>
  <p class="">朋友您好，欢迎来到我的博客，欢迎积极评论！</p>
 </a>
</div>

<div class="panel panel-default">
 <div class="panel-heading">
  <h3 class="panel-title">最新发布</h3>
 </div>

 <div class="panel-body">

  <!--文章列表开始-->
  <div class="contentList">
   <?php if(is_array($articleData) || $articleData instanceof \think\Collection || $articleData instanceof \think\Paginator): if( count($articleData)==0 ) : echo "" ;else: foreach($articleData as $key=>$vo): ?>
   <div class="panel panel-default">
    <div class="panel-body">
     <div class="contentleft">
      <h4><a class="title" href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>"><?php echo $vo['arc_title']; ?></a></h4>
      <p class="overView"><?php echo $vo['arc_digest']; ?></p>
      <p>
       <a class="count">分类：<i class="glyphicon glyphicon-folder-open"></i><?php echo $vo['cate_name']; ?></a>
      </p>
      <p>
       <span class="count"><i class="glyphicon glyphicon-user"></i>
       <a href="#"><?php echo $vo['arc_author']; ?></a></span>
       <span class="count"><i class="glyphicon glyphicon-eye-open"></i>阅读:<?php echo $vo['arc_click']; ?></span>
       <span class="count">
        <i class="glyphicon glyphicon-tags"></i>
        标签:
        <?php if(is_array($vo['tags']) || $vo['tags'] instanceof \think\Collection || $vo['tags'] instanceof \think\Paginator): if( count($vo['tags'])==0 ) : echo "" ;else: foreach($vo['tags'] as $key=>$v): ?>
         <span ><?php echo $v; ?></span>
         <?php endforeach; endif; else: echo "" ;endif; ?>
       </span>
       <span class="count"><i class="glyphicon glyphicon-time"></i><?php echo date('Y-m-d',$vo['sendtime']); ?></span>
      </p>
     </div>
     <div class="contentImage">
      <div class="row">
       <a href="#" class="thumbnail w_thumbnail">
        <img src="<?php echo $vo['arc_thumb']; ?>" alt="...">
       </a>
      </div>
     </div>
    </div>
   </div>
   <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <div id="page" class="page" style="margin-left: 15px">
   <?php echo $page; ?>
  </div>
  <!--文章列表结束-->
 </div>
</div>

            </div>
            <!--中间左侧结束-->
            <!--中间右侧开始-->
            <div class="col-lg-3 col-md-3 w_main_right">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">热门标签</h3>
                    </div>
                    <div class="panel-body">
                        <div class="labelList">
                            <?php if(is_array($_tagData) || $_tagData instanceof \think\Collection || $_tagData instanceof \think\Paginator): if( count($_tagData)==0 ) : echo "" ;else: foreach($_tagData as $key=>$vo): ?>
                            <a class="label label-default x-red" href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>"><?php echo $vo['tag_name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">分类栏目</h3>
                    </div>
                    <div class="panel-body">
                        <div class="labelList">
                            <?php if(is_array($_allCateData) || $_allCateData instanceof \think\Collection || $_allCateData instanceof \think\Paginator): if( count($_allCateData)==0 ) : echo "" ;else: foreach($_allCateData as $key=>$vo): ?>
                            <a class="label label-default" href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>"><?php echo $vo['cate_name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">最新发布</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled sidebar">
                            <?php if(is_array($_articleData) || $_articleData instanceof \think\Collection || $_articleData instanceof \think\Paginator): if( count($_articleData)==0 ) : echo "" ;else: foreach($_articleData as $key=>$vo): ?>
                            <li>
                                <a href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>"><?php echo $vo['arc_title']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">友情链接</h3>
                    </div>
                    <div class="panel-body">
                        <div class="newContent">
                            <ul class="list-unstyled sidebar shiplink">
                                <?php if(is_array($_linkData) || $_linkData instanceof \think\Collection || $_linkData instanceof \think\Paginator): if( count($_linkData)==0 ) : echo "" ;else: foreach($_linkData as $key=>$vo): ?>
                                <li>
                                    <a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default whitebg wenzi">
                    <div class="panel-heading">
                        <h3 class="panel-title htitle">最新评论</h3>
                    </div>
                    <ul>
                        <?php if(is_array($_articleData) || $_articleData instanceof \think\Collection || $_articleData instanceof \think\Paginator): if( count($_articleData)==0 ) : echo "" ;else: foreach($_articleData as $key=>$vo): ?>
                        <li style="margin-top: 10px"><a target="_blank" href="/blog/3.html"><?php echo $vo['arc_title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <!--右侧结束-->
        </div>
    </div>
</div>
<!--中间内容结束-->
<!--底部开始-->
<div class="w_foot">
    <div class="w_foot_copyright">Copyright© 2017 <a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow" style="color:green">京ICP备18055675号-1</a>&nbsp;&nbsp;网址：<a href="http://blog.taotaifu.cn">blog.taotaifu.cn</a> 陶太富 版权所有 <?php echo $_webset['email']; ?> <span>|</span>
        <span id="cnzz_stat_icon_1261722476"><a href="https://www.cnzz.com/stat/website.php?web_id=1261722476" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="https://icon.cnzz.com/img/pic.gif"></a></span>
        <script src=" https://s11.cnzz.com/z_stat.php?id=1261722476&amp;show=pic" type="text/javascript"></script>
        <script src="https://c.cnzz.com/core.php?web_id=1261722476&amp;show=pic&amp;t=z" charset="utf-8" type="text/javascript"></script>
        <a target="_blank" href="https://tongji.baidu.com/web/welcome/ico?s=a4535105572471f305ae4fac98e7be00">百度统计</a>
    </div>
</div>
<!--toTop-->
<div id="shape">
    <div class="shapeColor">
        <div class="shapeFly">
        </div>
    </div>
</div>
<!--底部结束-->
</body>
<script type="text/javascript">
    var $backToTopEle = $('<a href="javascript:void(0)" class="Hui-iconfont toTop" title="返回顶部" alt="返回顶部" style="display:none">^</a>').appendTo($("body")).click(function() {
        $("html, body").animate({ scrollTop: 0 }, 120);
    });
    var backToTopFun = function() {
        var st = $(document).scrollTop(),
            winh = $(window).height();
        (st > 0) ? $backToTopEle.show(): $backToTopEle.hide();
        /*IE6下的定位*/
        if(!window.XMLHttpRequest) {
            $backToTopEle.css("top", st + winh - 166);
        }
    };

    $(function() {
        $(window).on("scroll", backToTopFun);
        backToTopFun();
    });
</script>
</html>