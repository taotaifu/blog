<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/www/wwwroot/blog_taotaifu_cn/public/../application/index/view/about/index.html";i:1554445964;s:62:"/www/wwwroot/blog_taotaifu_cn/application/index/view/base.html";i:1552642535;}*/ ?>
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
               
                <div class="about">
                    <h2>Just about me</h2>
                    <ul>
                        <p>空白，不代表没有，只是因为还未准备好。。。</p>
                        <p>看了很多博主的帖子，我深受鼓舞。想到自己当年大学刚入学，老师要求我们几人一组做一个网站。那个时候我们都是0基础，很多人傻乎乎的不知如何入手。时间是一个月的时间，我几乎是天天泡在图书馆，晚上11点宿舍断电，我就抱着电脑去旁边的咖啡厅通宵。没用20天的时间，我一个人，几乎看扁了所有图书馆有关PS，DW，FLASH等的书籍，粗糙的做出了属于自己的第一个网站。虽然不是那么整齐，也不是那么美观，但是我一个人做到了，老师也很惊讶。大学毕业后各种压力让我不得不放弃当初的梦想。工作碌碌无为，不是没有精神，而是觉得自己只是一个喘气的人，而不是一个为了一个目标而活着的人。几次拿起早就尘封了多年的网站设计类书本，但是迫于生活无奈又放下。多少次纠结。直到今天无意中看到博主的文章，让我心里一震。一辈子也就是几十年的时间吧，如果不能把自己无限的精力投入到有限的青春中，追寻自己的梦，那么活着和喘气又有什么区别。</p>
                    </ul>
                    <h2>About my blog</h2>
                    <ul>
                        <p>域  名：blog.taotaifu.cn 创建于2018年04月02日 <a href="/" class="blog_link" target="_blank">注册域名</a></p>
                        <p>服务器：腾讯云服务器<a href="/" class="blog_link" target="_blank">购买空间</a></p>
                        <p>备案号：京ICP备18055675号-1</p>
                    </ul>
                    <h2>About my hobby</h2>
                    <ul>
                        <p>本人喜欢看书，譬如：东野奎吾《解忧杂货店》刘同《你的孤独 虽败犹荣》青音《愿有勇气去热爱》等；</a></p>
                        <p>不怎么喜欢玩游戏，大部分时间都在看论坛，微博；</p>
                        <p>年轻的一个小伙子，喜欢结交志同道合的朋友，如果你跟我兴趣爱好一样，不妨加我微信（tao729589198），做好朋友吧！</p>
                    </ul>
                    <h2>About my Data</h2>
                    <ul>
                        <div class="about_c">
                            <p>昵称：<span>Mrs.默先森</span></p>
                            <p>姓名：陶太富 </p>
                            <p>生日：1990-11-27</p>
                            <p>邮箱：729589198@qq.com</p>
                            <p>籍贯：湖北省—武汉市</p>
                            <p>现居：北京市—昌平区</p>
                            <p>职业：PHP开发</p>
                        </div>
                    </ul>
                </div>


            <div class="col-lg-3 col-md-3 w_main_right">

            </div>

<!--toTop-->
<div id="shape">
    <div class="shapeColor">
        <div class="shapeFly">
        </div>
    </div>
</div>
<!--snow-->
<!--<div class="snow-container"></div>-->


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