<?php
    session_start();
    date_default_timezone_set("Asia/Shanghai");
    if (empty($_SESSION['username']))
    {
        echo "<script language='javascript'> alert('您还没登陆，请先登陆!');window.location='login.php'</script>";
    }
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href ="../css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/bitbug_favicon.ico">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>COFFEE休闲餐厅后台管理</title>
</head>
<body>
<div class="header">
    <div class="container-fluid">
        <div class="logo">
            <a href="index.php"></a>
        </div>
        <div class="user">
            <ul>
                <li><a href="javascript:;" class="btn btn-success"><span class="fa fa-user" style="margin-right: 5px"></span><?php echo "{$_SESSION['username']}"; ?></a></li>
                <li><a href="logout.php" class="btn btn-danger"  onClick="return confirm('您确认退出系统吗？')"><span class="fa fa-power-off" style="margin-right: 5px"></span>退出</a></li>
            </ul>
        </div>
    </div>
</div>
<section class="left">
	<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="icon-user"></span>
			用户管理
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <a href="./user/user.php" class="nav-link"><span class="icon-group"></span>查看用户</a>
      </div>
		<div class="card-body">
        <a href="./user/add.php" class="nav-link"><span class="icon-plus-sign"></span>添加用户</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <span class="icon-envelope-alt"></span>
			用户留言
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <a href="./message/message.php" class="nav-link"><span class="icon-book"></span>查看留言</a>
      </div>
    </div>
  </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="icon-rocket"></span>
                    新闻管理
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <a href="./news/news.php" class="nav-link"><span class="icon-book"></span>查看新闻</a>
            </div>
            <div class="card-body">
                <a href="./news/add.php" class="nav-link"><span class="icon-plus-sign"></span>添加新闻</a>
            </div>
        </div>
    </div>
</div>
</section>
<section class="right">
    <div class="content">
        <div class="item">
            <dl class="bordered">
                <dt>欢迎您，<?php echo "{$_SESSION['username']}"; ?></dt>
                <dd>欢迎进入COFFEE休闲餐厅后台管理系统！</dd>
                <dd></dd>
            </dl>
            <dl class="bordered">
                <dt>服务器信息</dt>
                <dd>系统环境：<?php echo $_SERVER['SERVER_NAME'] ?></dd>
                <dd>当前服务器时间：<?php echo date('Y-m-d H:i:s') ?></dd>
                <dd>PHP版本: 7.3.0</dd>
                <dd>MySQL版本：5.2.5</dd>
            </dl>
        </div>
    </div>
    <footer class="footer">
        <p>版权所有@上海建桥学院-1520959-欧超</p>
    </footer>
</section>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>