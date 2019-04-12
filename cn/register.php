<?php
session_start();
?>
<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>用户注册</title>
	<link rel="icon" href="../images/bitbug_favicon.ico">
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../font/materializecss-font.css">
	<style type="text/css">
	html,
	body {
	    height: 100%;
	}
	html {
	    display: table;
	    margin: auto;
	}
	body {
	    display: table-cell;
	    vertical-align: middle;
	}
	.margin {
	  margin: 0 !important;
	}
	</style>
</head>
<body>
	<div id="login-page" class="row" style="width: 400px">
	    <div class="col s12 z-depth-6 card-panel">
	      <form class="login-form" action="register-submit.php" method="post">
	        <div class="row">
	          <div class="input-field col s12 center">
				  <a href="../index.php">
					<img src="../images/logo.png" alt="" class="responsive-img valign profile-image-login" style="width: 50px;height: 50px">
				  </a>
	            <h5 class="center login-form-text">用户注册</h5>
	          </div>
	        </div>
	        <div class="row margin">
	          <div class="input-field col s12">
	            <i class="material-icons prefix">perm_identity</i>
	            <input id="username" type="text" class="validate" name="username" required="required" minlength="5" maxlength="10">
	            <label for="username">请输入用户名</label>
	          </div>
	        </div>	      
	        <div class="row margin">
	          <div class="input-field col s12">
	          <i class="material-icons prefix">lock_outline</i>
	            <input id="password" type="password" class="validate" name="password" required="required" minlength="5" maxlength="10">
	            <label for="password">请输入密码</label>
	          </div>
	        </div>
	        <div class="row margin">
	          <div class="input-field col s12">
	            <i class="material-icons prefix">lock_outline</i>
	            <input id="password-again" type="password" name="repassword" required="required" minlength="5" maxlength="10">
	            <label for="password-again">请再次确认密码</label>
	          </div>
	        </div>
			<div class="row margin">
	          <div class="input-field col s6">
	            <i class="material-icons prefix">loop</i>
	            <input id="yanzhengma" type="text" name="fcode" required="required" minlength="1" maxlength="4">
	            <label for="yanzhengma">请输入验证码</label>
	          </div>
				<div class="input-field col s6">
				  <img src="image_capth.php" alt="" style="cursor:pointer" onclick="this.src='image_capth.php?'+Math.random();">
	          </div>
				
				
	        </div>  
			  
			  
	        <div class="row">
	          <div class="input-field col s6">
	            <input  class="btn col s12" type="submit" value="注 册">
	          </div>
				<div class="input-field col s6">
				<input  class="btn col s12" type="reset" value="重 置">
				  </div>
	          <div class="input-field col s12">
	            <p class="margin center medium-small sign-up">已经有了账号? <a href="login.php">立刻登录</a></p>
	          </div>
	        </div>
	      </form>
	    </div>
	  </div>
	
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script color="38,166,154" opacity='1' src="../js/Canvas-nest.js"></script>
  	<script src="../js/materialize.min.js"></script>
</body>
</html>