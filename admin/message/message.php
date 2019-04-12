<?php
session_start();
if (empty($_SESSION['username']))
{
    echo "<script language='javascript'> alert('您还没登陆，请先登陆!');window.location='../login.php'</script>";
}
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
    <title>查看留言</title>
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
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <a href="./message.php" class="nav-link text-danger"><span class="icon-book"></span>查看留言</a>
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
<section class="right" style="width: 90%;height: 95%">
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">编号</th>
                <th scope="col">用户</th>
                <th scope="col">标题</th>
                <th scope="col">内容</th>
                <th scope="col">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include('../../public/config.php');
            $sql="select * from db_message";
            $rst=mysqli_query($link,$sql);
            while($row=mysqli_fetch_assoc($rst)){
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['content']}</td>";
                echo "<td><a onClick=\"return confirm('您确认删除留言？')\" href='delete-message.php?id={$row['id']}'>删除</a>	</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>


</section>
<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>