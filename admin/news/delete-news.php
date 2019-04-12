<?php
include('../../public/config.php');
$id=$_GET['id'];
$sql="delete from db_news where id={$id}";
if(mysqli_query($link,$sql)){
	echo '<script>window.location.href="news.php"</script>';
	
}
?>