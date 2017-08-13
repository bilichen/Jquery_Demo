<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <style>
        form{
            text-align: center;
        }
    </style>
</head>
<body>
欢迎 <?php echo $_GET["username"]; ?>!<br>
你的年龄是 <?php echo $_GET["age"]; ?>  岁。

<!--<form method="post" action="" name="form1">-->
<!--    <p>判断积偶数</p>-->
<!--    <p>请输入一个数字:<input type="text" name="num"></p>-->
<!--    <p><input type="submit" value="提交" name="button"></p>-->
<!--</form>-->
<!---->
<!--<span id="result">结果</span>-->
<form action="" method="get">
    名字: <input type="text" name="username">
    年龄: <input type="text" name="age">
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>