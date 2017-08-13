<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>php连接mysql数据库，并获取表数据</title>

    <style type="text/css">
        table,tr,th,td{
            border: 1px solid black;
        }
        table{
            width: 950px;
            margin: auto;
        }
    </style>
</head>
<body>

<?php
//php连接mysql数据库，并获取表数据
    $link = mysqli_connect('localhost','root','',"data") or die("连接mysql失败");
    //mysqli_query($link,'use data') or die("选择数据库失败");
   //mysqli_select_db($link,"data") or die("选择数据库失败11");
    mysqli_query($link,'set names utf8');
    $sql="SELECT * FROM stu";
    $result=mysqli_query($link,$sql);
?>
<table>
    <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
    </tr>
<!--    --><?php
//    while($row=(mysqli_fetch_array($result))){//转换成素引或关联数组（自识别）
//        echo '<tr>';
//        echo '<td>'.$row['stu_id'].'</td>';
//        echo '<td>'.$row['stu_name'].'</td>';
//        echo '<td>'.$row['stu_sex'].'</td>';
//        echo '<td>'.$row['stu_age'].'</td>';
//        echo '</tr>';
//    }
//
//    ?>
    <?php
    while($row=(mysqli_fetch_object($result))){//通过转化成对象，然后获取属性（字段名）
        echo '<tr>';
        echo '<td>'.$row->stu_id.'</td>';
        echo '<td>'.$row->stu_name.'</td>';
        echo '<td>'.$row->stu_sex.'</td>';
        echo '<td>'.$row->stu_age.'</td>';
        echo '</tr>';
    }

    ?>

</table>

</body>
</html>

