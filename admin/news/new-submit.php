<?php
ob_start();
include('../../public/config.php');
$title=$_POST['title'];
$time=$_POST['time'];
$imgurl=$_POST['imgurl'];
$description=$_POST['description'];
$content=$_POST['content'];
$sql="insert into db_news(title,time,imgurl,description,content) values('".$title."','".$time."','".$imgurl."','".$description."','".$content."')";
mysqli_query($link,$sql);
echo "<script>alert('添加成功'); window.location.href='news.php';</script>";
?>

