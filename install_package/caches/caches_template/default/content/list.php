<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="module-out module-out1" style="background: #fff;">
    <?php include template("content","left"); ?>
    <div class="module-box">

        <h4 style="color: #214D7C;">您现在的位置:<a href="index.php">首页</a>-><?php if($CATEGORYS[$CAT[catid]][parentid]!=0) { ?><a href="index.php?m=content&c=index&a=lists&catid=<?php echo $parentid;?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a>-><?php } ?><?php echo $catname;?></h4>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1564c175f41e01fb2f50675f8cb6b80a&action=lists&catid=%24catid&order=listorder+ASC&num=14&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'14',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <?php echo $v["content"];?>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>

<?php include template("content","footer"); ?>