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
    <link rel="stylesheet" href="../css/food.css">
    <title>美食 | COFFEE休闲餐厅</title>
</head>
<body>
<header class="header">
    <div class="container">
        <!--        <span class="icon-caret-right mr-1"></span>-->
        <!--        <span class="welcome">欢迎您来到COFFEE休闲餐厅！</span>-->
        <div class="float-right">
            <?php
            if(empty($_SESSION['username'])){
                echo  '<a href="./login.php"><span class="icon-user mr-1"></span>登录</a>';
                echo '<a href="./register.php" class="ml-3"><span class="icon-edit mr-1"></span>注册</a>';
            }
            else{             $user = $_SESSION['username'];
                echo "<span class='icon-user mr-1'></span><span class='welcome'>欢迎您$user!</span>";
                echo '<a href="./logout.php" class="wu"><span class="icon-off mr-1"></span>退出</a>';
            }
            ?>
        </div>
    </div>
</header>
<!--导航 start -->
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
                    <a class="nav-link" href="#">新品推荐</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">最新活动</a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<!--广告 start-->
<section class="container-fluid ad">

    <div class="backdrop">

    </div>
</section>
<!--广告 end-->

<!--分类 start-->
<section class="container sorts">
    <div class="bg-white">
        <div class="nav nav-pills" id="pills-tab" role="tablist">
            <a class="nav-item nav-link active" id="list-home-list" data-toggle="tab" href="#list-home" role="tab" aria-controls="list-home" aria-selected="true">全部</a>
            <a class="nav-item nav-link text-nowrap" id="list-profile-list" data-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile" aria-selected="false">烘焙</a>
            <a class="nav-item nav-link text-nowrap" id="list-messages-list" data-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages" aria-selected="false">蛋糕&甜品</a>
            <a class="nav-item nav-link text-nowrap" id="list-settings-list" data-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings" aria-selected="false">三明治</a>
            <a class="nav-item nav-link text-nowrap" id="list-set-list" data-toggle="tab" href="#list-set" role="tab" aria-controls="list-set" aria-selected="false">酸奶</a>
            <a class="nav-item nav-link text-nowrap" id="list-list-list" data-toggle="tab" href="#list-list" role="tab" aria-controls="list-list" aria-selected="false">其他美食</a>
        </div>
    </div>
</section>
<!--分类 end-->

<!--分类 start-->
<section class="w-100" style="background:#F7F7F7">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="container tab-content" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">烘焙</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/american-style-pancakes.jpg')">

                                </div>
                                <p class="text-center">美式松饼</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/blueberry-muffin.jpg')">

                                </div>
                                <p class="text-center">蓝莓麦芬</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/chocolate-muffin.jpg')">

                                </div>
                                <p class="text-center">香浓巧克力麦芬</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/hazelnut-croissant.jpg')">

                                </div>
                                <p class="text-center">层层榛子果仁酥</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/oat-caramel-pudding-bread.jpg')">

                                </div>
                                <p class="text-center">燕麦焦糖布丁面包</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto"  style="background-image: url('../images/honey-raisin-scone.jpg')">

                                </div>
                                <p class="text-center">蜂蜜提子司康</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/french-butter-croissant.jpg')">

                                </div>
                                <p class="text-center">法式香酥可颂</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/raisins-walnut-bread.jpg')">

                                </div>
                                <p class="text-center">核桃提子软法面包</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">蛋糕&甜品</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/blueberry-and-cookie-style-cheesecake.jpg')">

                                </div>
                                <p class="text-center">蓝莓曲奇风轻乳酪蛋糕</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/starbucks-coffee-tiramisu.jpg')">

                                </div>
                                <p class="text-center">咖啡提拉米苏蛋糕</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/triple-dark-chocolate-cake.jpg')">

                                </div>
                                <p class="text-center">浓醇三重黑巧克力蛋糕</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/macaron.jpg')">

                                </div>
                                <p class="text-center">法式马卡龙</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/new-york-style-creamy-cheesecake.jpg')">

                                </div>
                                <p class="text-center">纽约风浓郁重芝士蛋糕</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/eclair.jpg')">

                                </div>
                                <p class="text-center">法式闪电泡芙</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/classic-swiss-roll-cake.jpg')">

                                </div>
                                <p class="text-center">经典瑞士卷</p>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">三明治</h3>
                </header>
                <div class="row">


                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/roasted-french-ham-egg-sandwich.jpg')">

                                </div>
                                <p class="text-center">烤法式火腿鸡蛋三明治</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/turkey-bacon-english-muffin.jpg')">

                                </div>
                                <p class="text-center">火鸡培根英式麦芬</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/ham-and-double-cheese-croque-monsieur.jpg')">

                                </div>
                                <p class="text-center">双重芝士火腿吐司</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/pastrami-sandwich.jpg')">

                                </div>
                                <p class="text-center">帕斯雀牛肉三明治</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">酸奶</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/greek-flavored-yoghurt-mixed-berry.jpg')">

                                </div>
                                <p class="text-center">谷物组合希腊式风味酸奶 (混合莓果）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/greek-flavored-yoghurt-mixed-berry.jpg')">

                                </div>
                                <p class="text-center">谷物组合希腊式风味酸奶（黄桃）</p>
                            </div>
                        </a>

                    </div>


                </div>
            </div>
            <div class="container">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">其他美食</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/fruit-salad.jpg')">

                                </div>
                                <p class="text-center">水果沙拉</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <div class="container tab-content" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">烘焙</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/american-style-pancakes.jpg')">

                                </div>
                                <p class="text-center">美式松饼</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/blueberry-muffin.jpg')">

                                </div>
                                <p class="text-center">蓝莓麦芬</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/chocolate-muffin.jpg')">

                                </div>
                                <p class="text-center">香浓巧克力麦芬</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/hazelnut-croissant.jpg')">

                                </div>
                                <p class="text-center">层层榛子果仁酥</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/oat-caramel-pudding-bread.jpg')">

                                </div>
                                <p class="text-center">燕麦焦糖布丁面包</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto"  style="background-image: url('../images/honey-raisin-scone.jpg')">

                                </div>
                                <p class="text-center">蜂蜜提子司康</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/french-butter-croissant.jpg')">

                                </div>
                                <p class="text-center">法式香酥可颂</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/raisins-walnut-bread.jpg')">

                                </div>
                                <p class="text-center">核桃提子软法面包</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">蛋糕&甜品</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/blueberry-and-cookie-style-cheesecake.jpg')">

                                </div>
                                <p class="text-center">蓝莓曲奇风轻乳酪蛋糕</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/starbucks-coffee-tiramisu.jpg')">

                                </div>
                                <p class="text-center">咖啡提拉米苏蛋糕</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/triple-dark-chocolate-cake.jpg')">

                                </div>
                                <p class="text-center">浓醇三重黑巧克力蛋糕</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/macaron.jpg')">

                                </div>
                                <p class="text-center">法式马卡龙</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/new-york-style-creamy-cheesecake.jpg')">

                                </div>
                                <p class="text-center">纽约风浓郁重芝士蛋糕</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/eclair.jpg')">

                                </div>
                                <p class="text-center">法式闪电泡芙</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/classic-swiss-roll-cake.jpg')">

                                </div>
                                <p class="text-center">经典瑞士卷</p>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">三明治</h3>
                </header>
                <div class="row">


                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/roasted-french-ham-egg-sandwich.jpg')">

                                </div>
                                <p class="text-center">烤法式火腿鸡蛋三明治</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/turkey-bacon-english-muffin.jpg')">

                                </div>
                                <p class="text-center">火鸡培根英式麦芬</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/ham-and-double-cheese-croque-monsieur.jpg')">

                                </div>
                                <p class="text-center">双重芝士火腿吐司</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/pastrami-sandwich.jpg')">

                                </div>
                                <p class="text-center">帕斯雀牛肉三明治</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-set" role="tabpanel" aria-labelledby="list-set-list">
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">酸奶</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/greek-flavored-yoghurt-mixed-berry.jpg')">

                                </div>
                                <p class="text-center">谷物组合希腊式风味酸奶 (混合莓果）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/greek-flavored-yoghurt-mixed-berry.jpg')">

                                </div>
                                <p class="text-center">谷物组合希腊式风味酸奶（黄桃）</p>
                            </div>
                        </a>

                    </div>


                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-list" role="tabpanel" aria-labelledby="list-list-list">
            <div class="container">
                <header class="title py-4">
                    <span class="icon icon-food icon-2x"></span>
                    <h3 class="text-left">其他美食</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="#">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/fruit-salad.jpg')">

                                </div>
                                <p class="text-center">水果沙拉</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--分类 end-->

<!--版权所有 start-->
<footer class="container-fluid footer">
    <p>版权所有&copy;上海建桥学院-数媒-2-欧超</p>
</footer>
<!--版权所有 end-->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>