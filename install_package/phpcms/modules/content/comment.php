<?php
defined('IN_PHPCMS') or exit('No permission resources.');
//模型缓存路径
define('CACHE_MODEL_PATH',CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);
pc_base::load_app_func('util','content');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form','',0);
pc_base::load_sys_class('format','',0);
class comment extends admin {
    private $db;
    public function __construct() {
        $this->db=new mysqli("localhost","root","","phpcmsv9");
        $this->db->query("set names UTF8");

    }
    function addMessage(){
        $liucon=$_POST["liucon"];
        if($_SESSION["auser"]){
            $luser=$_SESSION["auser"];
            $this->db->query("INSERT INTO 'liu' ({'liucon','luser'}) VALUES ({'{$liucon}','{$luser}'})");
            echo "logined";
        }else{
            echo "login";
        }
    }
    function showMessage(){
        include "../public/db.class.php";
        $db=new db("liu");
        $data=$db->select();
        $this->smarty->assign("message",$data);
    }
    function login(){
        include $this->admin_tpl('login');
    }
    function checkLogin(){
        $user=$_POST["user"];
        $pass=md5($_POST["pass"]);
        $sql="SELECT * FROM 'v9_member'";
        $result=$this->db->query($sql);
        $data=array();
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
        foreach($data as $v){
            if($v["auser"]==$auser&&$v["apass"]==$apass){
                $_SESSION["auser"]=$_POST["auser"];
                echo "ok";
                exit;
            }
        }

        echo "no";
    }
    function relogin(){
        $_SESSION["indexLogin"]="yes";
        $_SESSION["auser"]=$_POST["auser"];
        echo "<script>window.history.go(-2);</script>";
    }
}