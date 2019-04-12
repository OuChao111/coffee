<?php
session_start();
if (empty($_SESSION['username']))
{
    echo "<script language='javascript'> alert('您还没登陆，请先登陆!');window.location='login.php'</script>";
}
?>
<?php
header("Content-type:text/html;charset=utf-8");
include('../../public/config.php');
$sql="select * from db_user";
$rst=mysqli_query($link,$sql);
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href ="../../css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../images/bitbug_favicon.ico">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/add.css">
    <title>添加用户</title>
</head>
<body>
<div class="header">
    <div class="container-fluid">
        <div class="logo">
            <a href="../index.php"></a>
        </div>
        <div class="user">
            <ul>
                <li><a href="javascript:;" class="btn btn-success"><span class="fa fa-user" style="margin-right: 5px"></span><?php echo "{$_SESSION['username']}"; ?></a></li>
                <li><a href="../logout.php" class="btn btn-danger"  onClick="return confirm('您确认退出系统吗？')"><span class="fa fa-power-off" style="margin-right: 5px"></span>退出</a></li>
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

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <a href="./user.php" class="nav-link"><span class="icon-group"></span>查看用户</a>
                </div>
                <div class="card-body">
                    <a href="./add.php" class="nav-link text-danger"><span class="icon-plus-sign"></span>添加用户</a>
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
                    <a href="../message/message.php" class="nav-link"><span class="icon-book"></span>查看留言</a>
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
                    <a href="../news/news.php" class="nav-link"><span class="icon-book"></span>查看新闻</a>
                </div>
                <div class="card-body">
                    <a href="../news/add.php" class="nav-link"><span class="icon-plus-sign"></span>添加新闻</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="right">
    <section class="message">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box mx-auto">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>添加用户</h3>
                            <p>填写下面的表单添加用户：</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-bottom contact-form">
                        <form action="insert.php" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">用户名</label>
                                <input type="text" name="name" placeholder="用户名" required="required" minlength="5" maxlength="10" class="contact-email form-control" id="contact-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-subject">密码</label>
                                <input type="text" name="pwd" placeholder="密码" required="required" minlength="6" maxlength="20" class="contact-subject form-control" id="contact-subject">
                            </div>
                            <button type="submit" class="btn">添加</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>