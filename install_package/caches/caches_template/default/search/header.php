<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>山西省翼城中学<?php if($catname) { ?>-<?php echo $catname;?><?php } elseif ($CATEGORYS[$CAT[parentid]][catname]) { ?><?php echo $CATEGORYS[$CAT['catid']]['catname'];?><?php } ?></title>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/animate.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/swiper.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
<script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
<script src="<?php echo JS_PATH;?>myjs/swiper.min.js"></script>
<script src="<?php echo JS_PATH;?>myjs/index.js"></script>
<link href="<?php echo CSS_PATH;?>search.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
</head>
<body>
<div class="body">
    <nav>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="1180" height="280">
            <param name="movie" value="http://www.sxyczx.com.cn/760x88123.swf">
            <param name="quality" value="high">
            <embed src="statics/css/swf/760x88123.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1180" height="280">
        </object>
        <div class="r" style="width: 100%;height: 40px;line-height: 40px"><a href="index.php?m=search" class="search" style="float: left;width: 200px;height: 30px;border: 1px solid #dcdcdc;border-radius:5px;line-height: 30px;text-align: right;padding-right:10px;">| 搜索</a><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="300" height="24" frameborder="0" scrolling="no" style="float: right"></iframe>')</script></div>
        <ul class="yiji">
            <li>
                <a href="index.php">首页</a>
                <ul class="erji">
                </ul>
            </li>
            <li>
                <a>学校概况</a>
                <ul class="erji">
                    <li><a href="index.php?m=content&c=index&a=lists&catid=21">学校简介</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=22">组织机构</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=23">整体规划</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=24">校园活动</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=25">领导致辞</a></li>
                </ul>
            </li>
            <li>
                <a>新闻中心</a>
                <ul class="erji">
                    <li><a href="index.php?m=content&c=index&a=lists&catid=26">学校新闻</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=27">教育新闻</a></li>
                </ul>
            </li>
            <li>
                <a href="index.php?m=content&c=index&a=lists&catid=12">德育之窗</a>
                <ul class="erji">
                </ul>
            </li>
            <li>
                <a href="index.php?m=content&c=index&a=lists&catid=13">校园风光</a>
                <ul class="erji">
                </ul>
            </li>
            <li>
                <a>学生工作</a>
                <ul class="erji">
                    <li><a href="index.php?m=content&c=index&a=lists&catid=28">国旗下的讲话</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=29">学生会</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=30">心情小屋</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=31">文学社</a></li>
                </ul>
            </li>
            <li>
                <a>图书馆</a>
                <ul class="erji">
                    <li><a href="index.php?m=content&c=index&a=lists&catid=32">最新书目</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=33">新书介绍</a></li>
                    <li><a href="index.php?m=content&c=index&a=lists&catid=34">推荐书目</a></li>
                </ul>
            </li>
            <li>
                <a href="index.php?m=content&c=index&a=lists&catid=16">教学资源</a>
                <ul class="erji">
                </ul>
            </li>
            <li>
                <a href="index.php?m=content&c=index&a=lists&catid=17">校友风采</a>
                <ul class="erji">
                </ul>
            </li>
            <li>
                <a href="index.php?m=content&c=index&a=lists&catid=18">留言簿</a>
                <ul class="erji">
                </ul>
            </li>
            <li>
                <a href="index.php?m=content&c=index&a=lists&catid=19">下载中心</a>
                <ul class="erji">
                </ul>
            </li>
            <li>
                <a href="index.php?m=content&c=index&a=lists&catid=20">联系我们</a>
                <ul class="erji">
                </ul>
            </li>
        </ul>
    </nav>