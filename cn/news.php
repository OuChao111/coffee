<?php
session_start();
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href ="../css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/bitbug_favicon.ico">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/news.css">
    <title>新闻资讯</title>
</head>
<body>
<header class="header" style="background-color: #ffffff">
    <div class="container">
        <div class="float-right">
            <?php
            if(empty($_SESSION['username'])){
                echo  '<a href="./login.php"><span class="icon-user mr-1"></span>登录</a>';
                echo '<a href="./register.php" class="ml-3"><span class="icon-edit mr-1"></span>注册</a>';
            }
            else{
                $user = $_SESSION['username'];
                echo "<span class='icon-user mr-1'></span><span class='welcome'>欢迎您$user!</span>";
                echo '<a href="./logout.php" class="wu"><span class="icon-off mr-1"></span>退出</a>';
            }
            ?>
        </div>
    </div>
</header>
<!--导航栏-->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container position-relative">
        <a class="navbar-brand" href="../index.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">网站首页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cn/recommend.php">新品推荐</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cn/activity.php">最新活动</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        饮品美食
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../cn/Drinks.php">饮品</a>
                        <a class="dropdown-item" href="../cn/Food.php">美食</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        咖啡文化
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="../cn/brewing-coffee.php">冲泡咖啡</a>
                        <a class="dropdown-item" href="../cn/Coffee-selection.php">臻选咖啡</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../cn/news.php">新闻资讯</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cn/message.php">给我留言</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--导航栏-->
<!--新闻 start-->
<section>
    <img src="../images/5a03360437056.gif" alt="" class="img-fluid">
</section>
<!--新闻 end-->

<?php
include('../public/config-1.php');
$sql="select * from db_news ORDER BY ID DESC";
$result=mysqli_query($link,$sql);
echo "<p class=\"do-html-title text-center\">新闻资讯</p>";
while($list=mysqli_fetch_array($result)){
    ?>
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="../uploads/<?php echo $list['imgurl'] ?>" class="img-fluid imgurl"/>
                </div>
                <div class="col-lg-7">
                    <div class="news-item-info">
                        <p class="title"><?php echo $list['title'] ?></p>
                        <p class="text text-justify"><?php echo substr(trim(strip_tags($list['description'])),0,540) ?></p>
                        <p class="time">发布时间：<?php echo $list['time'] ?></p>
                        <a href="news-con.php?id=<?php echo $list['id'] ?>" class="btn btn-danger">查看详情</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <?php
}
?>


<!--版权所有 start-->
<footer class="container-fluid footer">
    <p>版权所有&copy;上海建桥学院-数媒-2-欧超</p>
</footer>
<!--版权所有 end-->

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>