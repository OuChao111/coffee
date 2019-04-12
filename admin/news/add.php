<?php
session_start();
require_once '../../public/config.php';
if(empty($_SESSION['username'])){
    echo "<script>alert('您必须先登录！'); window.location.href='../login.php';</script>";
}
//?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>添加新闻</title>

    <!-- Bootstrap -->
    <link rel="icon" href="../../images/bitbug_favicon.ico">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/add.css">
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

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <a href="../user/user.php" class="nav-link"><span class="icon-group"></span>查看用户</a>
                </div>
                <div class="card-body">
                    <a href="../user/add.php" class="nav-link"><span class="icon-plus-sign"></span>添加用户</a>
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
            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <a href="../news/news.php" class="nav-link"><span class="icon-book"></span>查看新闻</a>
                </div>
                <div class="card-body">
                    <a href="../news/add.php" class="nav-link text-danger"><span class="icon-plus-sign"></span>添加新闻</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="right" style="padding: 50px 150px 0">
    <div class="container">
        <form class="form-horizontal" method="post" action="new-submit.php" name="frm">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" minlength="5" maxlength="2550" required="required" id="inputEmail3" placeholder="请输入标题">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword4" class="col-sm-2 control-label">发布时间</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword4" name="time" value="<?php  date_default_timezone_set("Asia/Shanghai"); echo date('Y-m-d H:i:s'); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">上传图片</label>
                <div class="col-sm-10">
                    <input type="text" name="imgurl" id="imgurl"/>
                    <input type="button" value="上传图片" onClick="window.open('upimg.htm','上传图片','height=300,width=600,top=100,left=100')" style="width:120px;"/>
                    <script>
                        function setFile(f1){
                            var str = f1;
                            var n = str.lastIndexOf("/")  //获取斜杠最后一次出现的位置
                            document.frm.imgurl.value= str.substring(n+1);
                        }
                    </script>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">内容简述</label>
                <div class="col-sm-10">
                    <textarea name="description" placeholder="请输入内容" required="required" minlength="5" maxlength="255" class="form-control" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">详细信息</label>
                <div class="col-sm-10">
                    <textarea name="content" placeholder="请输入详细内容" required="required" minlength="5" maxlength="999" class="form-control" rows="10"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="action" value="add" />
                    <button type="submit" class="btn btn-info" name="submit">立刻添加</button>
                    <button type="reset" class="btn btn-default">重置</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="../../js/jquery-3.3.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>