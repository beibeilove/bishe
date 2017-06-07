<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>山西省翼城中学<?php if($catname) { ?>-<?php echo $catname;?><?php } elseif ($CATEGORYS[$CAT[parentid]][catname]) { ?><?php echo $CATEGORYS[$CAT['catid']]['catname'];?><?php } ?></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/animate.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/swiper.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
	<script src="<?php echo JS_PATH;?>myjs/jquery1.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/swiper.min.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/index.js"></script>

</head>
<body>
<div class="body">
	<nav>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="1180" height="280">
			<param name="movie" value="http://www.sxyczx.com.cn/760x88123.swf">
			<param name="quality" value="high">
			<embed src="<?php echo CSS_PATH;?>swf/760x88123.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1180" height="280">
		</object>
		<div class="r" style="width: 100%;height: 40px;line-height: 40px;position:relative;"><a href="index.php?m=search" class="search" style="float: left;width: 200px;height: 30px;border: 1px solid #dcdcdc;border-radius:5px;line-height: 30px;text-align: right;padding-right:10px;">| 搜索</a><section class="music">
			<marquee behavior="scroll" direction="left" width="1160" height="40" onmouseover="this.stop()" onmouseout="this.start()"  scrollamount="5">
				<div class="misict">周传雄 - 冬天的秘密</div>
			</marquee>
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</section><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="300" height="24" frameborder="0" scrolling="no" style="float: right"></iframe>')</script></div>
		<div class="msg">
			<ul class="music-list">
				<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1d8b7f9ea2d5d0d76926c9f8997dcdb0&sql=SELECT+%2A+FROM+v9_music+where+catid%3D%2747%27+order+by+listorder+DESC&cache=3600&return=data&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_music where catid=\'47\' order by listorder DESC','moreinfo'=>'1',)).'1d8b7f9ea2d5d0d76926c9f8997dcdb0');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_music where catid='47' order by listorder DESC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>-->
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=12482fc3fff438a76c7dedabf1377abe&action=lists&catid=47&order=listorder+DESC&num=14&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'47','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'14',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li class="editmusic" src="<?php echo $r['music'];?>"><?php echo $r["title"];?></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<div class="control">
					<audio id="audio" autoplay controls loop>
						<source src="http://localhost/yczx/install_package/uploadfile/2017/0605/20170605082741367.mp3">
					</audio>
				</div>
			</ul>

		</div>
		<ul class="yiji">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7defec4133cc10f50934004a32667c33&action=category&catid=0&num=20&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
				<?php if($r["catid"]==9) { ?>
				<a href="index.php"><?php echo $r["catname"];?></a>
				<?php } elseif ($r["child"]!=0) { ?>
				<a><?php echo $r["catname"];?></a>
				<?php } else { ?>
				<a href="<?php echo $r['url'];?>"><?php echo $r["catname"];?></a>
				<?php } ?>
				<ul class="erji">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0d650aa11d0cb06970c1dd839991895a&action=category&catid=%24r%5B%27catid%27%5D&num=20&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r['catid'],'order'=>'listorder ASC','limit'=>'20',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<li><a href="<?php echo $v['url'];?>"><?php echo $v["catname"];?></a></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
	</nav>
	<script>
        $('.music').click(function(){
            $('.msg').slideToggle();
        });
        $('.music-list li').dblclick(function(e){
            e.preventDefault();
            $('audio').load();
            $(".misict").html($(this).html());
            $('audio source').attr("src",$(this).attr("src").split("|")[0]);
            $('.msg').slideUp();
        })
        $('.msg').dblclick(function(){
            $('.msg').slideUp();
        })
	</script>