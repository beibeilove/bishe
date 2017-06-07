<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?> 
<div id="memberArea">
<?php include template('member', 'left'); ?>
<div class="col-auto">
<div class="col-1 ">
<h6 class="title">查看已发消息</h6>
<div class="content">
 <table width="100%" cellspacing="0" class="table_form">
 
 	 <?php $userid = get_memberinfo_buyusername($infos['send_from_id'],userid)?>
     <?php $user_pic = get_memberavatar($userid,1,45);?>
     <tr>
       <th><div align=center><img src="<?php echo $user_pic;?>" width="50" height="50" onerror="this.src='<?php echo IMG_PATH;?>member/nophoto.gif'"><br><font color=red><?php echo $infos['send_from_id'];?></font></div></th>
       <td><b><?php echo $infos['subject'];?></b> - <?php echo date('Y-m-d H:i:s',$infos['inputtime']);?><br><br><?php echo nl2br($infos['content']);?></td>
     </tr>
     
     <?php $n=1;if(is_array($reply_infos)) foreach($reply_infos AS $reply_info) { ?>  
     <?php $userid = get_memberinfo_buyusername($reply_info['send_from_id'],userid)?>
     <?php $user_pic = get_memberavatar($userid,1,45);?>
     <tr>
       <th><div align=center><img src="<?php echo $user_pic;?>" width="50" height="50"></img><br><?php echo $reply_info['send_from_id'];?></div></th>
       <td><?php echo $reply_info['subject'];?> - <?php echo date('Y-m-d H:i:s',$reply_info['message_time']);?><br><br></br><b><?php echo $reply_info['content'];?></b></td>
     </tr> 
     <?php $n++;}unset($n); ?>
     
     
         </label></td>
     </tr>
   </table>
    </div>
   <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
   </div>
<div class="bk10"></div>
   </div>
</div> 
<?php include template('member', 'footer'); ?>