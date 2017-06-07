<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>download.css" rel="stylesheet" type="text/css" />
<div class="main" style="padding: 0 30px;">
	<!--left_bar-->
	<div class="col-left">
        <h4 style="color: #214D7C;">您现在的位置:<a href="index.php">首页</a>-><?php echo catpos($catid);?><?php echo $title;?></h4>
        <div class="box boxsbg">
        	<div class="contents">
      <table cellspacing="1" cellpadding="0" align="center" class="down_info">
        <caption>
        <h5><?php echo $title;?></h5>
        </caption>
        <tbody><tr>
          <td width="260" rowspan="7" align="center" valign="middle"><?php if($thumb) { ?><img src="<?php echo $thumb;?>" width="250" height="220" /><?php } ?></td>
        </tr>
        <tr>
          <th>更新时间：</th>
          <td><?php echo $updatetime;?></td>
        </tr>
        <tr>
          <th>软件语言：</th>
          <td><?php echo $language;?></td>
        </tr>
        <tr>
          <th>软件平台：</th>
          <td><?php echo $systems;?></td>
        </tr>
        <tr>
          <th>文件大小：</th>
          <td> <?php echo $filesize;?></td>
        </tr>
        <tr>
          <th>评论等级：</th>
          <td class="c_orange"> <?php echo $stars;?></td>
        </tr>
<tr>
          <th>浏览次数：</th>
          <td colspan="2"><span id="hits"></span>（今日：<span id="todaydowns"></span>，本周：<span id="weekdowns"></span>，本月：<span id="monthdowns"></span>）</td>
        </tr>
      </tbody></table>
      <h5 class="tit">软件简介</h5>
      <div class="down_intro"><h4 class="tits"><?php echo $title;?></h4><?php echo $content;?></div>
      <h5 class="tit">下载地址</h5>
      <div class="down_address divl wrap">
        	<ul class="l xz_a wrap blue">
			<?php $n=1;if(is_array($downfile)) foreach($downfile AS $r) { ?>
	        	<li><?php echo $r;?></li>
			<?php $n++;}unset($n); ?>
			<?php $n=1;if(is_array($downfiles)) foreach($downfiles AS $r) { ?>
	        	<li><?php echo $r;?></li>
			<?php $n++;}unset($n); ?>			
        	</ul>
        <div class="ad"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=12"></script></div>
      </div>
	  </div>
	              </div>
      <div class="bk10"></div>
    </div>
    <!--right_bar-->
</div>

<div class="bk10"></div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>