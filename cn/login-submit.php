<?php 
session_start();

include('../public/config.php');
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username'] = $username;
if( $username == "" || $password == ""){  
		 
	 echo "<script>alert('请确认信息完整性！'); window.location.href='login.php'</script>"; 
 }else{
	
			$sql = "select username,password from db_user where username = '$username' and password = '$password'"; 
//			$sql="INSERT INTO user(username,password)  values('$username','$password')";//向数据库插入表单传来的值的sql
				$result = mysqli_query($link,$sql);  
				$num = mysqli_num_rows($result);  
				if($num)  
				{  
					
					echo "<script>alert('成功登录'); window.location.href='../index.php';</script>";  
				}  
				else  
				{  
					echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
				}  
	
} 


?>