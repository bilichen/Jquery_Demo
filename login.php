<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>login</title>
    <style type="text/css">
        span{
            background-color: red;
        }
    </style>
</head>
<body>
<?php
    //获取用户名和密码
    if(isset($_GET['button'])){
        $username = $_GET['username'];
        $pwd = $_GET['pwd'];
       // echo $username;
        //echo $pwd;
        //连接数据库，验证用户名和密码是否正确，正确则跳到商品管理界面，错误则显示错误信息
        $link = mysqli_connect('localhost','root','','data') or die(mysqli_error());
         $sql = "select * from user where username='$username' and pwd='$pwd'";
        $result = mysqli_query($link,$sql);
        if($row=(mysqli_fetch_array($result))){
            echo "有记录，用户名密码正确，可以跳转";
        }else{
            echo "<span>没记录，用户名密码错误</span>";
        }
    };


?>
<form action="" method="get">
    <label>用户名：<input type="text" name="username"/></label>
    <label>密码：<input type="password" name="pwd"/></label>
    <input type="submit" name="button" value="提交"/>
</form>

</body>
</html>