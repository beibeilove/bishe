<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="statics/css/mycss/main.css">
    <script src="statics/js/myjs/jquery.js"></script>
    <script src="statics/js/myjs/login.js"></script>
    <title>Document</title>
</head>
<body>
<form class="login-box" method="post" action="index.php?m=content&c=comment&a=relogin">
    <div class="user">
        <span>用户名</span>
        <input type="text" name="auser" class="user">
    </div>
    <div class="error"></div>
    <div class="user">
        <span>密&nbsp;码</span>
        <input type="password" name="apass" class="pass">
    </div>
    <div class="error"></div>
    <div class="btns">
        <input type="submit" name="login" class="login" value="登录" disabled="disabled">
        <a href="index.php?a=reg">注册</a>
    </div>
</form>
</body>
</html>