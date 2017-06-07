<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="module-out module-out1" style="background: #fff;">
    <?php include template("content","left"); ?>
    <div class="module-box" style="position: relative">

        <h4 style="color: #214D7C;">您现在的位置:<a href="index.php">首页</a>-><?php if($CATEGORYS[$CAT[catid]][parentid]!=0) { ?><a href="index.php?m=content&c=index&a=lists&catid=<?php echo $parentid;?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a>-><?php } ?><?php echo $catname;?></h4>
        <div class="list-group">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b161b809109b4d33da9bbbe5e8a6974f&action=lists&catid=%24catid&order=listorder+DESC&num=14&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 14;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $a=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <a href="<?php echo $v['url'];?>" class="list-group-item"><span class="badge"><?php echo date("Y-m-d H:i:s",$v["updatetime"]);?></span><?php echo $v["title"];?></a>
            <?php $a++;?>

            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <p align="center" style="font-size: 16px;">
            <a href="">首页</a>
            <a href="">上一页</a>
            <a href="">下一页</a>
            页次：1/<span id="page"></span>页 共有<span id="num"><?php echo $a;?></span>条信息 转到
            <input type="number" min="1" max="5" value="1">页
            <input type="button" value="跳转">
        </p>
    </div>
</div>

<?php include template("content","footer"); ?>