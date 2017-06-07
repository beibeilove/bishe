<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="adver">
    <div class="adver-icon">
        &#xe606;
    </div>
    <marquee behavior="scroll" direction="left" width="1160" height="20" onmouseover="this.stop()" onmouseout="this.start()"  scrollamount="5">
        <div class="adver-box">
            <a href="">翼城中学关于开展第六届英语周活动的通知</a>
            <a href="">翼城中学招聘启事</a>
            <a href="">翼城中学澡堂招标</a>
            <a href="">翼城中学超市招标</a>
        </div>
    </marquee>
</div>
<div class="banner-box">
    <div class="banner swiper-container">
        <div class="swiper-wrapper">
            <a class="swiper-slide" href=""><img src="<?php echo IMG_PATH;?>myimg/20071129726740.jpg" alt=""></a>
            <a class="swiper-slide" href=""><img src="<?php echo IMG_PATH;?>myimg/20071129927108.jpg" alt=""></a>
            <a class="swiper-slide" href=""><img src="<?php echo IMG_PATH;?>myimg/20081141642859.jpg" alt=""></a>
            <a class="swiper-slide" href=""><img src="<?php echo IMG_PATH;?>myimg/200811416148506.jpg" alt=""></a>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!--模块-->
<div class="module-out">
    <?php include template("content","left"); ?>
    <div class="module-box">
        <div class="module">
            <div class="title"><h2>学校概况</h2><a href="index.php?m=content&c=index&a=lists&catid=21">more</a></div>
            <div class="con">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f5b4563dd190f6c916473f934e00778a&sql=SELECT+%2A+FROM+v9_news+where+catid%3D%2721%27+order+by+listorder+DESC&cache=3600&return=data&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_news where catid=\'21\' order by listorder DESC','moreinfo'=>'1',)).'f5b4563dd190f6c916473f934e00778a');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news where catid='21' order by listorder DESC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>" class="aLink">
                            <img src="<?php echo IMG_PATH;?>myimg/22.jpg" alt="">
                            <span>翼城中学</span>
                        </a>
                        <p><?php echo $r["description"];?></p>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div class="module">
            <div class="title"><h2>学校新闻</h2><a href="index.php?m=content&c=index&a=lists&catid=26">more</a></div>
            <div class="con">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=db461cd5e9e8da4a6372bb4c49e30ac0&sql=SELECT+%2A+FROM+v9_news++where+catid%3D26+order+by+id+DESC&cache=3600&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_news  where catid=26 order by id DESC',)).'db461cd5e9e8da4a6372bb4c49e30ac0');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news  where catid=26 order by id DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><?php echo $r["title"];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div class="module">
            <div class="title"><h2>教育新闻</h2><a href="index.php?m=content&c=index&a=lists&catid=27">more</a></div>
            <div class="con">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dffa527e16eee4a1ea6083bc4e8a2481&sql=SELECT+%2A+FROM+v9_news++where+catid%3D27+order+by+id+DESC&cache=3600&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_news  where catid=27 order by id DESC',)).'dffa527e16eee4a1ea6083bc4e8a2481');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news  where catid=27 order by id DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><?php echo $r["title"];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div class="module">
            <div class="title"><h2>德育之窗</h2><a href="index.php?m=content&c=index&a=lists&catid=12">more</a></div>
            <div class="con">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a6c893223a4b740256d427c73a5e3d80&sql=SELECT+%2A+FROM+v9_news++where+catid%3D12+order+by+id+DESC&cache=3600&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_news  where catid=12 order by id DESC',)).'a6c893223a4b740256d427c73a5e3d80');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news  where catid=12 order by id DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><?php echo $r["title"];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>
    <div class="module-box">
        <div class="module">
            <div class="title"><h2>校长致辞</h2><a href="index.php?m=content&c=index&a=lists&catid=25">more</a></div>
            <div class="con">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=77a50e8605c0080073ab45439059c2a1&sql=SELECT+%2A+FROM+v9_news+where+catid%3D%2725%27+order+by+listorder+DESC&cache=3600&return=data&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_news where catid=\'25\' order by listorder DESC','moreinfo'=>'1',)).'77a50e8605c0080073ab45439059c2a1');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news where catid='25' order by listorder DESC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <p><?php echo $r["description"];?></p>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div class="module">
            <div class="title"><h2>教学资源</h2><a href="index.php?m=content&c=index&a=lists&catid=16">more</a></div>
            <div class="con">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d00f1861db9a904fab3c9974e97e37c8&sql=SELECT+%2A+FROM+v9_news++where+catid%3D16+order+by+id+DESC&cache=3600&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_news  where catid=16 order by id DESC',)).'d00f1861db9a904fab3c9974e97e37c8');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news  where catid=16 order by id DESC LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><?php echo $r["title"];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div class="module">
            <div class="title">
                <h2>校友风采</h2><a href="index.php?m=content&c=index&a=lists&catid=17">more</a>
            </div>
            <div class="con">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ec6bcebb8ffbfa2270d3d95a3e1b3972&sql=SELECT+%2A+FROM+v9_category+where+catid%3D17+order+by+listorder+DESC&cache=3600&num=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_category where catid=17 order by listorder DESC',)).'ec6bcebb8ffbfa2270d3d95a3e1b3972');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_category where catid=17 order by listorder DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['image'];?>" alt="" width="300"></a>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="module">
            <div class="title"><h2>下载中心</h2><a href="index.php?m=content&c=index&a=lists&catid=19">more</a></div>
            <div class="con" style="height:200px">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a198c81b272a2378d67be87a8f9aa24e&sql=SELECT+%2A+FROM+v9_download++where+catid%3D19+order+by+id+DESC&cache=3600&num=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM v9_download  where catid=19 order by id DESC',)).'a198c81b272a2378d67be87a8f9aa24e');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_download  where catid=19 order by id DESC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt=""></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        autoplay: 3000,//可选选项，自动滑动
        effect : 'cube',
        pagination : '.swiper-pagination',
    })</script>
<?php include template("content","footer"); ?>