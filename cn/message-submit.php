<?php
session_start();
include('../public/config.php');
$title=$_POST['title'];
$content=$_POST['content'];
if(empty($_SESSION['username'])){
    echo "<script>alert('您必须先登录才能使用此功能！'); window.location.href='./login.php';</script>";
}else{
    $user=$_SESSION['username'];
    $time=time();
    $link->query("set names utf8");
    $sql = "INSERT INTO db_message(username,title,content,time)  values('$user','$title','$content','$time')";//向数据库插入表单传来的值的sql
    if (mysqli_query($link, $sql)) {
        echo "<script>alert('发送成功'); window.location.href='./message.php';</script>";

    }
}

?>