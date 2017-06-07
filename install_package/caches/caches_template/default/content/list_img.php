<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="module-out module-out1" style="background: #fff;">
    <?php include template("content","left"); ?>
    <div class="module-box">

        <h4 style="color: #214D7C;">您现在的位置:<a href="index.php">首页</a>-><?php echo $catname;?></h4>
        <ul class="list_img">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26dcaa5a78d41da968a9c0c24e7826a3&action=lists&catid=%24catid&order=listorder+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>'20',));}?>
            <?php $a=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li>
                <a href="<?php echo $v['url'];?>">
                    <img src="<?php echo $v['thumb'];?>" alt="">
                    <p><?php echo $v["title"];?></p>
                </a>
                <?php $a++;?>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
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