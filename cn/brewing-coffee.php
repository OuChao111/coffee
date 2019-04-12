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
    <title>冲泡咖啡</title>
    <style>
        .chongpao h1{
            font-size: 36px;
            padding-top: 30px;
        }
        .chongpao h2{
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


<section class="chongpao">
    <div class="container" style="background-color: #EDEBE9">
        <h1 class="text-center">手冲咖啡</h1>
        <div class="row">
            <div class="col-lg-8 offset-3">
                <h2>1. 准备沸水</h2>
                <p>事先预估即将使用到的水并煮沸，其中包括冲洗器具的用量。</p>
                <img src="../images/pour-over-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-8 offset-3">
                <h2>2. 湿滤纸</h2>
                <p>将热水均匀的冲在滤纸上，使滤纸全部湿润，紧紧贴附在滤杯上，然后倒掉分享壶内的热水。这一步将还原咖啡纯粹的味道。</p>
                <img src="../images/pour-over-3.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-8 offset-3">
                <h2>3. 准备咖啡粉</h2>
                <p>下一步，准备好适量的咖啡粉。将磨好的咖啡粉倒入滤杯中，轻轻拍平。通常研磨精细的咖啡粉看起来很像砂糖的质地。请准备每2勺新鲜研磨咖啡粉配合6盎司热水。</p>
                <img src="../images/pour-over-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-8 offset-3">
                <h2>4. 冲泡与萃取</h2>
                <p>将刚烧开的热水均匀浇注在咖啡粉上，当水量到达滤纸的一半时停止10秒，使咖啡粉充分吸水后膨胀。越新鲜的咖啡粉膨胀的越大，越能激发出咖啡的口感。</p>
                <img src="../images/pour-over-5.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-8 offset-3">
                <h2>5. 完成冲泡</h2>
                <p>缓缓地倒入剩下的水，水流要保持稳定，可以顺着一个方向画同心圆进行注水，直至咖啡粉的外围。冲泡完成后请尽快享用。</p>
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