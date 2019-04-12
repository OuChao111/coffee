<?php
include('../../public/config.php');
$userName=$_POST['name'];
$password=$_POST['pwd'];
$select="select username from db_user where username='$userName'";
$query=mysqli_query($link,$select);
$rows = mysqli_num_rows($query);
if($rows > 0) {
    echo "<script type='text/javascript'>alert('用户名已存在');location='javascript:history.back()';</script>";
}else{
    $sql="INSERT INTO db_user(username,password)  values('$userName','$password')";//向数据库插入表单传来的值的sql
    mysqli_query($link,$sql);
    echo "<script>alert('添加成功'); window.location.href='user.php';</script>";

}
?>