<?php
session_start();
include('../public/config.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select username,password from db_user where username = '$username' and password = '$password' and value = '1'";
$result = mysqli_query($link,$sql);
$num = mysqli_num_rows($result);
if($num)
{

    $_SESSION['username'] = $username;
    echo "<script>alert('成功登录'); window.location.href='index.php';</script>";
}
else
{
    echo "<script>alert('用户名或密码不正确！');window.location.href='login.php';</script>";
}
?>