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
    <link rel="stylesheet" href="../css/drink.css">
    <title>茶瓦纳 | COFFEE休闲餐厅</title>
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
            else{             $user = $_SESSION['username'];
                echo "<span class='icon-user mr-1'></span><span class='welcome'>欢迎您$user!</span>";
                echo '<a href="logout.php" class="wu"><span class="icon-off mr-1"></span>退出</a>';
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
            <a class="nav-item nav-link" id="list-home-list" data-toggle="tab" href="#list-home" role="tab" aria-controls="list-home" aria-selected="true">全部</a>
            <a class="nav-item nav-link text-nowrap" id="list-profile-list" data-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile" aria-selected="false">手工咖啡</a>
            <a class="nav-item nav-link text-nowrap" id="list-messages-list" data-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages" aria-selected="false">星冰乐</a>
            <a class="nav-item nav-link text-nowrap active" id="list-settings-list" data-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings" aria-selected="false">茶瓦纳</a>
            <a class="nav-item nav-link text-nowrap" id="list-set-list" data-toggle="tab" href="#list-set" role="tab" aria-controls="list-set" aria-selected="false">气致冷萃咖啡</a>
            <a class="nav-item nav-link text-nowrap" id="list-list-list" data-toggle="tab" href="#list-list" role="tab" aria-controls="list-list" aria-selected="false">绵云冷萃咖啡</a>
        </div>
    </div>
</section>
<!--分类 end-->

<!--分类 start-->
<section class="w-100" style="background:#F7F7F7">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="container tab-content" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">手工调制咖啡</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-americano.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caffe-americano.jpg')">

                                </div>
                                <p class="text-center">美式咖啡（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-latte.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caffe-latte.jpg')">

                                </div>
                                <p class="text-center">拿铁（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-mocha.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caffe-mocha.jpg')">

                                </div>
                                <p class="text-center">摩卡（热/冷)</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-kabu.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/cappuccino.jpg')">

                                </div>
                                <p class="text-center">卡布奇诺（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-caramel-macchiato.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caramel-macchiato.jpg')">

                                </div>
                                <p class="text-center">焦糖玛奇朵（热/冷）</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-shot-mocha.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto"  style="background-image: url('../images/extra-shot-mocha.jpg')">

                                </div>
                                <p class="text-center">浓郁咖啡摩卡（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-flat-white.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/flat-white.jpg')">

                                </div>
                                <p class="text-center">馥芮白™</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-flavored.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/vanilla-flavored-latte.jpg')">

                                </div>
                                <p class="text-center">香草风味拿铁（热/冷）</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">星冰乐®</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-espresso.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caramel-espresso.jpg')">

                                </div>
                                <p class="text-center">焦糖浓缩咖啡星冰乐</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-green-tea.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/green-tea-frappuccino.jpg')">

                                </div>
                                <p class="text-center">抹茶星冰乐</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-mocha-java.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/mocha-java-chip-frappuccino.jpg')">

                                </div>
                                <p class="text-center">摩卡可可碎片星冰乐</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-vanilla-flavored.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/vanilla-flavored-cream-frappuccino-blended-beverage.jpg')">

                                </div>
                                <p class="text-center">香草风味星冰乐</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">茶瓦纳™</h3>
                </header>
                <div class="row">


                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-ruby.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-honey-ruby-grapefruit.jpg')">

                                </div>
                                <p class="text-center">茶瓦纳™ 冰摇柚柚蜂蜜红茶</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-iced-shaken.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/blackcurrant-raspberry.jpg')">

                                </div>
                                <p class="text-center">冰摇红莓黑加仑茶</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="javascript:;">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-mango-herbal-juiced-tea.jpg')">

                                </div>
                                <p class="text-center">冰摇芒果花草茶</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="javascript:;">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-peach-green-tea.jpg')">

                                </div>
                                <p class="text-center">冰摇桃桃乌龙茶</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">冷萃冰咖啡</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="javascript:;">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/cold-brew.jpg')">

                                </div>
                                <p class="text-center">冷萃冰咖啡</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-cold-brew.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/vanilla-flavor-sweet-cream-cold-brew.jpg')">

                                </div>
                                <p class="text-center">轻甜香草风味奶油冷萃冰咖啡</p>
                            </div>
                        </a>

                    </div>


                </div>
            </div>
            <div class="container">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">绵云冷萃冰咖啡</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-cold-foam-cold-brew.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/cold-foam-cold-brew.jpg')">

                                </div>
                                <p class="text-center">绵云冷萃冰咖啡</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <div class="container tab-content" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">手工调制咖啡</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-americano.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caffe-americano.jpg')">

                                </div>
                                <p class="text-center">美式咖啡（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-latte.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caffe-latte.jpg')">

                                </div>
                                <p class="text-center">拿铁（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-mocha.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caffe-mocha.jpg')">

                                </div>
                                <p class="text-center">摩卡（热/冷)</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-kabu.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/cappuccino.jpg')">

                                </div>
                                <p class="text-center">卡布奇诺（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-espresso.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caramel-macchiato.jpg')">

                                </div>
                                <p class="text-center">焦糖玛奇朵（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-shot-mocha.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto"  style="background-image: url('../images/extra-shot-mocha.jpg')">

                                </div>
                                <p class="text-center">浓郁咖啡摩卡（热/冷）</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-flat-white.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/flat-white.jpg')">

                                </div>
                                <p class="text-center">馥芮白™</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-flavored.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/vanilla-flavored-latte.jpg')">

                                </div>
                                <p class="text-center">香草风味拿铁（热/冷）</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">星冰乐®</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-espresso.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/caramel-espresso.jpg')">

                                </div>
                                <p class="text-center">焦糖浓缩咖啡星冰乐</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-green-tea.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/green-tea-frappuccino.jpg')">

                                </div>
                                <p class="text-center">抹茶星冰乐</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-mocha-java.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/mocha-java-chip-frappuccino.jpg')">

                                </div>
                                <p class="text-center">摩卡可可碎片星冰乐</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-vanilla-flavored.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/vanilla-flavored-cream-frappuccino-blended-beverage.jpg')">

                                </div>
                                <p class="text-center">香草风味星冰乐</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">茶瓦纳™</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-ruby.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-honey-ruby-grapefruit.jpg')">

                                </div>
                                <p class="text-center">茶瓦纳™ 冰摇柚柚蜂蜜红茶</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-iced-shaken.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/blackcurrant-raspberry.jpg')">

                                </div>
                                <p class="text-center">冰摇红莓黑加仑茶</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="javascript:;">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-mango-herbal-juiced-tea.jpg')">

                                </div>
                                <p class="text-center">冰摇芒果花草茶</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="javascript:;">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-peach-green-tea.jpg')">

                                </div>
                                <p class="text-center">茶瓦纳™ 冰摇桃桃绿茶/冰摇桃桃乌龙茶</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-set" role="tabpanel" aria-labelledby="list-set-list">
            <div class="container" style="border-bottom: 1px solid #D9D9D9">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">冷萃冰咖啡</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="javascript:;">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/cold-brew.jpg')">

                                </div>
                                <p class="text-center">冷萃冰咖啡</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-cold-brew.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/vanilla-flavor-sweet-cream-cold-brew.jpg')">

                                </div>
                                <p class="text-center">轻甜香草风味奶油冷萃冰咖啡</p>
                            </div>
                        </a>

                    </div>


                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list-list" role="tabpanel" aria-labelledby="list-list-list">
            <div class="container">
                <header class="title py-4">
                    <span class="icon icon-coffee icon-2x"></span>
                    <h3 class="text-left">绵云冷萃冰咖啡</h3>
                </header>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 m-0 pad">
                        <a class="thumbnail d-block" href="./drink-cold-foam-cold-brew.php">
                            <div class="circle py-2">
                                <div class="preview mx-auto" style="background-image: url('../images/cold-foam-cold-brew.jpg')">

                                </div>
                                <p class="text-center">绵云冷萃冰咖啡</p>
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