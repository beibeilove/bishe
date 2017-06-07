<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="module-out module-out1" style="background: #fff;">
<?php include template("content","left"); ?>
<article class="module-box" style="width: auto;padding-left: 30px">
    <h4 style="color: #214D7C;">您现在的位置:<a href="index.php">首页</a>-><?php echo $catname;?></h4>
    <div class="showMessage">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d7dc3feffe28ee172ab73c3dded70bae&sql=SELECT+%2A+FROM+v9_form_liuyan&order=dataid+DESC&return=data&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT * FROM v9_form_liuyan) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM v9_form_liuyan LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <ul>
            <li>
                <h2><?php echo $r["username"];?></h2>
            </li>
            <li>
                <p><?php echo $r["con"];?></p>
            </li>
            <li style="overflow: hidden;display: inline-block;">
                <p class="autor" style="display: flex;justify-content: space-between"><span class="lm f_l"><a href="javascript:;"><?php if($r["posname"]==0) { ?>个人博客<?php } elseif ($r["posname"]==1) { ?>公共微博<?php } ?></a></span>
                    <span class="dtime f_l"><?php echo date("Y-m-d H:i:s",$r["datetime"]);?></span></p>
            </li>
        </ul>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="control-group" style="height:500px;width: 800px;color: #666;">
        <script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=13&action=js&siteid=1'></script>
    </div>
</article>

<script>
//    //留言
//    $("#message").click(function(){
//        var val=$("#liu").val();
//        if(val!=""){
//            $.ajax({
//                url:"<?php echo APP_PATH;?>index.php?m=comment&c=index&a=post",
//                data:"liucon="+val,
//                type:"post",
//                success:function(e){
//                    console.log(e);
//                    if(e=="login"){
//                        alert("请登录!");
//                        location.href="http://localhost/yczx/install_package/index.php?m=member&c=index&a=login&forward=http%3A%2F%2Flocalhost%2Fyczx%2Finstall_package%2F&siteid=1";
//                    }else{
//
//                    }
//                }
//            })
//        }else{
//            alert("请留言!");
//        }
//    })
//    //留言评论
//    $(".pingl").click(function(){
//        var ul=$(".showMessage>ul");
//        var input=$(document).createElement("<textarea>");
//        input.append(ul);
//    })
</script>
</div>
<?php include template("content","footer"); ?>
