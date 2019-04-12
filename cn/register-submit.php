<?php 
session_start();

include('../public/config.php');
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$fcode=$_POST['fcode'];
$vcode=$_SESSION['vcode'];

if( $username == "" || $password == "" || $repassword == ""){  
		 
	 echo "<script>alert('请确认信息完整性！'); window.location.href='register.php'</script>"; 
 }else{
	
		if($fcode==$vcode){
		if($password==$repassword){
			$sql="INSERT INTO db_user(username,password)  values('$username','$password')";//向数据库插入表单传来的值的sql
			if(mysqli_query($link,$sql)){
				 echo "<script>alert('成功注册'); window.location.href='login.php';</script>";
			}


		}else{
			echo "<script>alert('密码不一致，请重新输入！');history.go(-1);</script>";
		}	

	}else{
	//	echo "<script>localtion='../index.php'</script>";
		echo "<script>alert('验证码不正确，请重新输入！');history.go(-1);</script>";
	//	header('Location:../index.php');
	}
	
} 


?>
