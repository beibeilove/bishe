<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="module-out module-out1" style="background: #fff;">
    <?php include template("content","left"); ?>
    <div class="module-box">
        <h4 style="color: #214D7C;">您现在的位置:<a href="index.php">首页</a>-><a href="index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>"><?php echo $CATEGORYS[$CAT['catid']]['catname'];?></a>-><?php if($CATEGORYS[$CAT[catid]][parentid]=0) { ?><a href="index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>"><?php echo $CATEGORYS[$CAT['catid']]['catname'];?></a>-><?php } ?><?php echo $title;?></h4>
        <div class="content">
        <strong><?php echo $title;?></strong><br>
            <div class="mess">
            <span>作者:<?php echo $username;?></span><span>发布时间:<?php echo $updatetime;?></span><br>
            </div>
        </div>
        <?php echo $content;?>
    </div>
</div>
<?php include template("content","footer"); ?>