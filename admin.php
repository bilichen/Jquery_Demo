<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>管理界面</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php
    $getNum = $_GET['num'];
    //echo "11".$getNum;
    if($getNum==''){
        $getNum=0;
    }else{
        $getNum = $getNum-1;
        $getNum*=5;
    }
//    echo $getNum;
    //连接数据库，验证用户名和密码是否正确，正确则跳到商品管理界面，错误则显示错误信息
    $link = mysqli_connect('localhost','root','','data') or die(mysqli_error());
    mysqli_query($link,"set names utf8");
    $sql = "select * from stu limit $getNum,5";
    $result = mysqli_query($link,$sql);
    $sql_Count = "select count(*) from stu";
    $result_count = mysqli_query($link,$sql_Count);
    if($count = mysqli_fetch_array($result_count)){
        $num = ceil($count[0]/5);
    }
?>
<a href="add.php" class="add">添加商品</a>
<div style="clear: both"></div>
<div class="container">
    <h2>商 品 后 台 管 理</h2>
    <table>
        <tr>
            <th>编号</th>
            <th>名称</th>
            <th>性别</th>
            <th>年龄</th>
            <th>图片</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'.$row['stu_id'].'</td>';
                echo '<td>'.$row['stu_name'].'</td>';
                echo '<td>'.$row['stu_sex'].'</td>';
                echo '<td>'.$row['stu_age'].'</td>';
                echo '<td><img src='.$row['stu_image'].'></td>';
                echo '<tr>';
            }
        ?>
    </table>

    <div class="fool">
        <ul>
            <?php
                for($i=1;$i<=$num;$i++){
                  echo '<li><a href="?num='.$i.'">'.$i.'</a></li>';

                }
            ?>
<!--            <li class="active"><a href="#">1</a></li>-->
<!--            <li><a href="#">2</a></li>-->
<!--            <li><a href="#">3</a></li>-->

        </ul>
    </div>
</div>
</body>
</html>