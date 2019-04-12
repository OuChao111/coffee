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
    <title>最新活动</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">最新活动</a>
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

<!--最新产品 start-->
<section class="activity">
    <h2 class="text-center Recommending mt-4">最新活动,新品8折</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-2">
                <div class="activity-left p-0 ml-0">
                    <img src="../images/banner-head.jpg" alt="" class="img-fluid d-block w-100 h-100">
                </div>
            </div>
            <div class="col-lg-6 py-2">
                <div class="activity-right">
                    <h2 class="title">冰摇柚柚蜂蜜红茶</h2>
                    <p class="text-justify text">混合了韩国柚子的清香、以色列柚汁的甘甜、美国粉柚汁的果香融于醇香红茶，颗颗饱满果粒和清甜柚子皮，点缀上洋槐蜂蜜层层深入的口感让TA对这杯沁
                        人心脾念念不忘。更有两款特色茶底可供选择:搭配碧螺春绿茶：鲜醇甘厚，绿意盎然，清雅幽香搭配金萱乌龙茶：淡淡花香，成就丰富层次的清爽滋味。</p>
                    <a href="../cn/drink-ruby.php" class="details">了解详情</a>
                </div>
            </div>

            <div class="col-lg-6 py-2 sc">
                <div class="activity-right">
                    <h2 class="my-3 title">冷萃冰咖啡</h2>
                    <p class="text text-justify">10多个小时的慢速萃取，带出微甜的巧克力般风味，与特别的柑橘般风味，为你奉上沁甘顺滑的味觉感受。在冷萃冰咖啡的基础上，添加香草风味轻奶油。每份轻奶油都是根据西雅图的星巴克咖啡研发团队精心研发的配方新鲜手工调制而成， 使用脱脂奶也更符合现代人的健康生活理念。</p>
                    <a href="../cn/drink-cold-brew.php" class="details">了解详情</a>
                </div>
            </div>
            <div class="col-lg-6 sv">
                <div class="activity-left mx-auto py-2">
                    <img src="../images/cold-brew-desktop.jpg" alt="" class="img-fluid d-block w-100 h-100">
                </div>
            </div>

            <div class="col-lg-6 sv1">
                <div class="activity-left mx-auto py-2">
                    <img src="../images/cold-brew-desktop.jpg" alt="" class="img-fluid d-block w-100 h-100">
                </div>
            </div>
            <div class="col-lg-6 py-2 sc1">
                <div class="activity-right">
                    <h2 class="my-3 title">冷萃冰咖啡</h2>
                    <p class="text text-justify">10多个小时的慢速萃取，带出微甜的巧克力般风味，与特别的柑橘般风味，为你奉上沁甘顺滑的味觉感受。在冷萃冰咖啡的基础上，添加香草风味轻奶油。每份轻奶油都是根据西雅图的星巴克咖啡研发团队精心研发的配方新鲜手工调制而成， 使用脱脂奶也更符合现代人的健康生活理念。</p>
                    <a href="../cn/drink-cold-brew.php" class="details">了解详情</a>
                </div>
            </div>


            <div class="col-lg-6 py-2">
                <div class="activity-left p-0 ml-0">
                    <img src="../images/cold-foam-cold-brew-desktop.jpg" alt="" class="img-fluid d-block w-100 h-100">
                </div>
            </div>
            <div class="col-lg-6 py-2">
                <div class="activity-right">
                    <h2 class="title">绵云冷萃冰咖啡</h2>
                    <p class="text text-justify">制作新鲜搅打的“脱脂奶冷奶沫”，冷萃咖啡注入其中，
                        带来全新冰咖啡体验。将冷萃咖啡注入新鲜搅打的脱脂奶冷奶沫中，
                        冷奶沫在冷萃咖啡中轻盈浮起，绵云般轻盈绵密口感伴随沁甘顺滑的冷萃咖啡，
                        最后以新鲜研磨的冷萃咖啡粉点缀，带来多重咖啡风味体验。专属特调的大杯比例和特别研发的直饮杯盖，
                        让绵云冷萃冰咖啡的体验更完整。</p>
                    <a href="../cn/drink-cold-foam-cold-brew.php" class="details">了解详情</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--最新产品 end-->













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