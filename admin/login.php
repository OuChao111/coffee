<?php
 session_start();
?>
<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>后台登录</title>
	<link rel="icon" href="../images/bitbug_favicon.ico">
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../font/materializecss-font.css">
	<link rel="stylesheet" href="../css//login.css">
</head>
<body>
	<div class="container">
		<div id="login-page" class="row">
			<div class="col s12 z-depth-4 card-panel">
			  <form class="login-form" action="login_submit.php" method="post">
				<div class="row">
				  <div class="input-field col s12 center">
					  <a href="../index.php">
						  <img src="../images/logo.png" alt="" class="responsive-img valign profile-image-login" style="width: 50px;height: 50px">
					  </a>
					<h5 class="center login-form-text">管理员登录</h5>
				  </div>
				</div>
				<div class="row margin">
				  <div class="input-field col s12">
					<i class="material-icons prefix">perm_identity</i>
					<input class="validate" id="text" type="text" name="username" required="required" minlength="5" maxlength="10">
					<label for="text">请输入用户名</label>
				  </div>
				</div>
				<div class="row margin">
				  <div class="input-field col s12">
					<i class="material-icons prefix">lock_outline</i>
					<input id="password" type="password" name="password" required="required" minlength="6" maxlength="20">
					<label for="password">请输入密码</label>
				  </div>
				</div>
				<div class="row">
				  <div class="input-field col s6">
					<input  class="btn col s12" type="submit" value="登 录">
				  </div>
				<div class="input-field col s6">
				<input  class="btn col s12" type="reset" value="重 置">
				  </div>
				</div>
			  </form>
			</div>
		</div>
	</div>
	<script src="../js/jquery-3.3.1.min.js"></script>
  	<script src="../js/materialize.min.js"></script>
	<script color="38,166,154" opacity='1' src="../js/Canvas-nest.js"></script>
</body>
</html>