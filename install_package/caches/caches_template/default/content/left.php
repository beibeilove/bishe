<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="module-box">
    <div class="module">
        <div class="title"><h2>学校公告</h2><a href="index.php?m=content&c=index&a=lists&catid=43">more</a></div>
        <div class="con">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8169dded15e2dc1408e53da8dbff1184&sql=SELECT+%2A+FROM+v9_news++where+catid%3D43+order+by+id+DESC&cache=3600&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_news  where catid=43 order by id DESC',)).'8169dded15e2dc1408e53da8dbff1184');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news  where catid=43 order by id DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r["title"];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <div class="module">
        <div class="title">
            <h2>学校工作</h2><a href="index.php?m=content&c=index&a=lists&catid=14">more</a>
        </div>
        <div class="con">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a538952ea07c30209833c0f46284ae9d&action=category&catid=14&num=20&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','order'=>'listorder ASC','limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['image'];?>" alt=""></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
    <div class="module">
        <div class="title">
            <h2>校园风光</h2><a href="index.php?m=content&c=index&a=lists&catid=13">more</a>
        </div>
        <div class="con">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1b37d498c29f748e5f5bdf2feaf33d6e&sql=SELECT+%2A+FROM+v9_category+where+catid%3D13+order+by+listorder+DESC&cache=3600&num=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_category where catid=13 order by listorder DESC',)).'1b37d498c29f748e5f5bdf2feaf33d6e');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category where catid=13 order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['image'];?>" alt="" width="300"></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
    <div class="module">
        <div class="title">
            <h2>校园活动</h2><a href="index.php?m=content&c=index&a=lists&catid=44">more</a>
        </div>
        <div class="con">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a75ec97ce063769c25ef698da756c8a9&sql=SELECT+%2A+FROM+v9_category+where+catid%3D44+order+by+listorder+DESC&cache=3600&num=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_category where catid=44 order by listorder DESC',)).'a75ec97ce063769c25ef698da756c8a9');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category where catid=44 order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['image'];?>" alt="" width="300"></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>