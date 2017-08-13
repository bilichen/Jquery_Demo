<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>管理界面</title>
    <style type="text/css">
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    //连接数据库，验证用户名和密码是否正确，正确则跳到商品管理界面，错误则显示错误信息
    $link = mysqli_connect('localhost','root','','data') or die(mysqli_error());
    $sql = "select * from stu";
    $result = mysqli_query($link,$sql);
?>
<h2>商 品 后 台 管 理</h2>
<table>
    <tr>
        <th>编号</th>
        <th>名称</th>
        <th>性名</th>
        <th>年龄</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';

            echo '<tr>';
        }
    ?>


</table>

</body>
</html>