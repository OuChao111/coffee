<?php
    $server="localhost";//主机
    $db_username="root";//你的数据库用户名
    $db_password="";//你的数据库密码
    $db_sql="db";//你的数据库
    $link = mysqli_connect($server,$db_username,$db_password,$db_sql);//链接数据库
    $link->query("set names utf8");
    if(!$link){
        die("can't connect");//如果链接失败,输出错误信息
    }

?>