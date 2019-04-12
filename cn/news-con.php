<?php
session_start();
include('../public/config-1.php');
$sql="select * from db_news where id=".$_GET['id'];
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="../css/news-con.css">
    <title>新闻资讯</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="float-right">
            <?php
            if(empty($_SESSION['username'])){
                echo  '<a href="../cn/login.php"><span class="icon-user mr-1"></span>登录</a>';
                echo '<a href="../cn/register.php" class="ml-3"><span class="icon-edit mr-1"></span>注册</a>';
            }
            else{
                $user = $_SESSION['username'];
                echo "<span class='icon-user mr-1'></span><span class='welcome'>欢迎您$user!</span>";
                echo '<a href="../cn/logout.php" class="wu"><span class="icon-off mr-1"></span>退出</a>';
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

<section class="" style="background-color:#E9ECEF">
    <nav aria-label="breadcrumb" class="container" style="background-color: transparent;box-shadow: none;padding-left: 0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">网站首页</a></li>
            <li class="breadcrumb-item"><a href="./news.php">新闻资讯</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title'] ?></li>
        </ol>
    </nav>
</section>

<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="content">
                    <h2><?php echo $row['title'] ?></h2>
                    <hr>
                    <div class="new">
                        <img src="../uploads/<?php echo $row['imgurl'] ?>" class="img-fluid imgurl" style="display: block;margin: 0 auto"/>
                        <p class="text-justify"><?php echo $row['content'] ?></p>
                    </div>
                </section>

            </div>
            <div class="col-md-3">
                <div class="recond">
                    <h3>为你推荐</h3>
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-lg-4 su">
                                    <img src="../images/1546975631coffee-cultivation-2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 su">
                                    <div class="media-body">
                                        <a href="" class="text-justify">某些种类的咖啡树能长到30至40英尺高。然而，为方便采摘咖啡豆，人们经常通过......</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-4 su">
                                    <img src="../images/1546976477yunnan-coffee-tasting-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 su">
                                    <div class="media-body">
                                        <a href="" class="text-justify">我还是第一次喝到我们自己种的咖啡，这味道太奇妙了，有点微微的酸，也有一些苦......</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-4 su">
                                    <img src="../images/1546978031roast-story-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 su">
                                    <div class="media-body">
                                        <a href="" class="text-justify">从一棵咖啡树到出产出可收获的咖啡果大约需要五年时间，每一棵树......</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--版权所有 start-->
<footer class="container-fluid footer">
    <p>版权所有&copy;上海建桥学院-数媒-2-欧超</p>
</footer>
<!--版权所有 end-->

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>