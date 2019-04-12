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
    <title>流光溢彩新年拿铁</title>
    <style>
        .page-content .panel{
            font-size: 22px;
            font-weight: bold;
            margin-left: 40px;
        }
        .delicious-card{
            overflow:hidden;
            margin-bottom: 15px;
            border-radius: 3px;
            -moz-box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
        }
        .delicious-food:hover .delicious-body img{
            -webkit-transform:scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
        .delicious-body{
            display: block;
            overflow: hidden;
            /*width: 100%;*/
            /*height: 240px;*/
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            transition:all 0.5s ;
        }
        .delicious-body img{
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            transition:all 0.5s ;
        }
        .delicious-describe p{
            color: #000000;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
            text-align: center;
            margin: 15px 0;
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

<section class="show">
    <div class="container">
        <div class="show-caption">
            <div class="row">
                <div class="col-md-8">
                    <div class="am-thumbnail">
                        <img src="../images/kv1.jpg" alt="" class="img-fluid my-lg-4"/>
                        <h3 class="am-thumbnail-caption">流光溢彩新年拿铁</h3>
                        <p>新年伊始的好彩头从流光溢彩新年拿铁开始。</p>
                        <h3 class="am-thumbnail-caption">产品介绍</h3>
                        <p>香浓的烟熏奶油司考奇风味酱，甜中微咸，是记忆中的经典味道。覆上纯白绵密的稀奶油，加以金、红、蓝三色点缀，仿佛绚烂的烟花绽放，庆祝新年。</p>
                        <p>桃意浓浓抹茶拿铁，全新配方升级的浪漫味道覆上桃子风味稀奶油和桃花风味糖粒，有颜又有料。夏威夷果白巧克力风味玛奇朵，绵密的天鹅绒般的泡沫上淋画出经典的玛奇朵印记，满满节日的温暖滋味。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="page-content">
                        <p class="panel mt-lg-4">
                            <a href="" style="border-bottom: 0;color: #0C0C0C" class="mt-lg-4">为您推荐</a>
                        </p>
                        <ul class="sidebar-piclist">
                            <li>
                                <article class="delicious-card">
                                    <a href="" class="delicious-food">
                                        <div class="delicious-body">
                                            <img src="../images/jiaotang2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="delicious-describe">
                                            <p>拿铁</p>
                                        </div>
                                    </a>
                                </article>
                            </li>
                            <li>
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
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--产品展示结束-->















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