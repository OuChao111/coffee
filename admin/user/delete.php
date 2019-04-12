<?php
include('../../public/config.php');
$id=$_GET['id'];
$sql="delete from db_user where id={$id}";
if(mysqli_query($link,$sql)){
    echo '<script>window.location.href="./user.php"</script>';

}
?>