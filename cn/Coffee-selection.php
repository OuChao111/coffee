<?php
session_start();
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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/new-shop.css">
    <title>臻选咖啡</title>
    <style>
        .zhenxuan{
            padding-top: 30px;
        }
        .zhenxuan h1{
            font-size: 26px;
            text-align: center;
            margin-bottom: 30px;
        }
        .zhenxuan h2{
            margin: 30px 0;
            font-size: 22px;
        }
    </style>
</head>
<body>
<header class="header">
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
                    <a class="nav-link" href="./new-shop.php">新品推荐</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./activity.php">最新活动</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        饮品美食
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./Drinks.php">饮品</a>
                        <a class="dropdown-item" href="./Food.php">美食</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        咖啡文化
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="brewing-coffee.php">冲泡咖啡</a>
                        <a class="dropdown-item" href="./Coffee-selection.php">臻选咖啡</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cn/news.php">新闻资讯</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./message.php">给我留言</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--导航 end-->

<section>
    <img src="../images/5a03360437056.gif" alt="" class="img-fluid">
</section>


<section class="zhenxuan">
    <div class="container">
        <h1>什么是臻选™咖啡</h1>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-6">
                <img src="../images/article-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <img src="../images/article-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <img src="../images/article-3.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <img src="../images/article-4.jpg" alt="" class="img-fluid">
            </div>
            <h2>风土条件</h2>
            <p>咖啡的生长，就如同酿酒的葡萄，受到不同产区的具体生长环境的影响，形成了大部分的风味。咖啡生长地区的土地，气温，海拔，降雨量和阳光等众多可变因素赋予了咖啡一系列特殊的个性，呈现出一杯美味的咖啡。</p>
            <h2>加工方法</h2>
            <p>每一颗咖啡豆的生命都始于一颗咖啡浆果的种子。这颗咖啡果实如何被从咖啡豆中取出 – 也就是我们说的咖啡豆的加工 – 对于咖啡的风味有着直接的，甚至是巨大的影响。咖啡在烘焙前的收获，碾磨，水洗或者自然加工，甚至陈年豆的处理都可以成就一杯口味令人惊叹的咖啡。</p>
            <h2>咖啡品种</h2>
            <p>咖啡品种有着悠久的历史，可以创造出一杯珍贵稀有的咖啡。最常见的四种阿拉比卡咖啡的变种为波旁，铁毕卡，卡杜拉和卡杜艾。波旁和铁毕卡是原生种咖啡豆，是所有咖啡树的原型。卡杜拉和卡杜艾是波旁混合种的后代，混合了（通过自然混合或人工方法）两种现有咖啡的变种后得到，创造出一杯崭新的咖啡。</p>
            <h2>人文故事</h2><br>
            <p>每一款星巴克臻选™咖啡的背后都讲述了一个关于家庭，种植农和社区的故事。这些人文故事带给我们的是星巴克臻选™体验中不可或缺的一部分。每一款星巴克臻选™咖啡的背后都讲述了一个关于家庭，种植农和社区的故事。这些人文故事带给我们的是星巴克臻选™体验中不可或缺的一部分。</p>
        </div>
    </div>
</section>











<!--版权所有 start-->
<footer class="container-fluid footer">
    <p>版权所有&copy;上海建桥学院-数媒-2-欧超</p>
</footer>
<!--版权所有 end-->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>