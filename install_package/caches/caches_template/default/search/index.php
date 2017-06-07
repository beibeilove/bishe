<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('search', 'header'); ?>
	<div class="clr sr_body">
    	<div class="sr_main">

			<form name="search" type="get">
			  <input type="hidden" name="m" value="search"/>
			  <input type="hidden" name="c" value="index"/>
			  <input type="hidden" name="a" value="init"/>
			  <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
			  <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
            <div class="sr_frm">
            	<div class="sr_frm_box" style="padding-top: 100px">
                	<div class="sr_frmipt"><input type="text" name="q" id="q" class="ipt"><div class="sp" id="aca">▼</div><input type="submit" class="ss_btn" value="搜 索"></div>
                </div>
                <div id="sr_infos" class="wrap sr_infoul">
                </div>
            </div>
		</form>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
<script language="JavaScript">
<!--
$(document).ready(function(){
	$("#q").focus();
}); 
//-->
</script>
		</div>
<?php include template('search', 'footer'); ?>