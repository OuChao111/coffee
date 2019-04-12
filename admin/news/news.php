<?php
session_start();
require_once '../../public/config-1.php';
if(empty($_SESSION['username'])){
    echo "<script>alert('您必须先登录！'); window.location.href='../login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href ="../../css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../images/bitbug_favicon.ico">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/user.css">
    <title>查看新闻</title>
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
                    <a href="../news/news.php" class="nav-link text-danger"><span class="icon-book"></span>查看新闻</a>
                </div>
                <div class="card-body">
                    <a href="../news/add.php" class="nav-link"><span class="icon-plus-sign"></span>添加新闻</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="right">
    <table class="table table-bordered" style="width: 100%">
        <thead>
        <tr>
            <th>id</th>
            <th>标题</th>
            <th>简述</th>
            <th>详细内容</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql="select * from db_news";
        $rst=mysqli_query($link,$sql);
        while($row=mysqli_fetch_assoc($rst)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['title']}</td>";
            echo "<td>{$row['description']}</td>";
            echo "<td>{$row['content']}</td>";
            echo "<td>{$row['time']}</td>";
            echo "<td>
                        <a class=\"btn btn-success\" href='add.php'>添加新闻</a>
                        <a class=\"btn btn-danger\"  href='delete-news.php?id={$row['id']}' onClick=\"return confirm('您确认要删除新闻？')\">删除新闻</a>                        
                        </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="../../js/jquery-3.3.1.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>