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
    <title>新品推荐</title>
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
                <li class="nav-item active">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        咖啡文化
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="#">冲泡咖啡</a>
                        <a class="dropdown-item" href="#">臻选咖啡</a>
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

<section>
    <div class="container">
        <h2 class="text-center my-lg-3">新品推荐</h2>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="./mocha.php" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/moka2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>流光溢彩新年拿铁</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/peach-flavored-green-tea-latte.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>桃意浓浓抹茶拿铁</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/sea-salt-caramel-&-nuts-cake.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>节节高升芝麻生巧蛋糕</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/black-seasame-chocolate-cake.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>开心果果覆盆子风味蛋糕</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/french-caramel-bread.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>法式焦糖酥</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/raspberry-&-pistachio-cake.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>开心果果覆盆子风味蛋糕</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/macadamia-white-chocolate-flavored-macchiato.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>夏威夷果白巧克力风味玛奇朵</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <article class="delicious-card">
                    <a href="" class="delicious-food">
                        <div class="delicious-body">
                            <img src="../images/raspberry-&-pistachio-cake.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="delicious-describe">
                            <p>开心果果覆盆子风味蛋糕</p>
                        </div>
                    </a>
                </article>
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
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>