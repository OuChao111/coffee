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
    <link rel="stylesheet" href="../css/food-starbucks.css">
    <title>轻甜香草风味奶油冷萃冰咖啡 | COFFEE休闲餐厅</title>
    <script type="text/javascript">
        $(function () {
            $('#pills-home-tab a').on('hover', function (e) {
                e.preventDefault()
                $(this).tab('show')
            });

            $('#pills-profile-tab a').on('hover', function (e) {
                e.preventDefault()
                $(this).tab('show')
            });

            $('#pills-contact-tab a').on('hover', function (e) {
                e.preventDefault()
                $(this).tab('show')
            });

        });
    </script>
</head>
<body>
<!--导航 start -->
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
                    <a class="nav-link" href="#">给我留言</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--导航 end-->

<!--广告 start-->
<section class="container content">

    <div class="row">
        <div class="col-lg-6 col-sm-12 col-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <img src="../images/1.jpg" alt="" class="img-fluid">
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <img src="../images/8bc46c743db270787bac994bb5d7f336.jpg" alt="" class="img-fluid">
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <img src="../images/0225d3af4f9bac15f52211f94549bed3.jpg" alt="" class="img-fluid">
                </div>
            </div>


            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                        <img src="../images/1.jpg" alt="" class="sm">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <img src="../images/8bc46c743db270787bac994bb5d7f336.jpg" alt="" class="sm">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <img src="../images/0225d3af4f9bac15f52211f94549bed3.jpg" alt="" class="sm">
                    </a>
                </li>
            </ul>
        </div>




        <div class="col-lg-6 col-sm-12 col-12">
            <div class="order">
                <span class="icon icon-coffee icon-2x"></span>
                <span class="caption">冷萃冰咖啡</span>
                <h1 class="title mb-3">轻甜香草风味奶油冷萃冰咖啡</h1>
                <p class="text-justify tag">10多个小时的慢速萃取，带出微甜的巧克力般风味，与特别的柑橘般风味，为你奉上沁甘顺滑的味觉感受。</p>
                <p class="text-justify tag">从技术角度来讲，所有冷萃咖啡均属于冰咖啡，但不是所有冰咖啡都是冷萃咖啡。冷萃顾名思义，是用室温条件下的水对咖啡进行萃取，所萃取出来的咖啡酸度柔和，但口感更加醇厚，咖啡因含量十足。</p>
                <p class="text-justify tag">好的冰咖啡可以完整保留热咖啡的原有口味，而冷萃咖啡自身就能充分体现咖啡细微的口味特征，且由于水温较低，咖啡的酸度更加温和。使用上好咖啡豆制成的冷萃咖啡口味甘甜，口感明亮，味道柔和。</p>
                <p class="text-justify tag">10多个小时的慢速萃取，带出微甜的巧克力般风味，与特别的柑橘般风味，为你奉上沁甘顺滑的味觉感受。</p>
                <p class="text-justify tag">特点：味道纯正，香气迷人</p>
            </div>
        </div>
    </div>
</section>
<!--广告 end-->

<section>
    <div class="container recommend">
        <h3>猜你喜欢</h3>
        <div class="row">
            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./drink-kabu.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/cappuccino.jpg')">

                        </div>
                        <p class="text-center">卡布奇诺（热/冷）</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./drink-caramel-macchiato.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/caramel-macchiato.jpg')">

                        </div>
                        <p class="text-center">焦糖玛奇朵（热/冷）</p>
                    </div>
                </a>

            </div>
            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./drink-green-tea.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/green-tea-frappuccino.jpg')">

                        </div>
                        <p class="text-center">抹茶星冰乐</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./drink-mocha-java.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/mocha-java-chip-frappuccino.jpg')">

                        </div>
                        <p class="text-center">摩卡可可碎片星冰乐</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./drink-ruby.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-honey-ruby-grapefruit.jpg')">

                        </div>
                        <p class="text-center">茶瓦纳™ 冰摇柚柚蜂蜜红茶</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./drink-iced-shaken.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/iced-shaken-mango-herbal-juiced-tea.jpg')">

                        </div>
                        <p class="text-center">冰摇红莓黑加仑茶</p>
                    </div>
                </a>

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
<script src="../js/wow.min.js"></script>
</body>
</html>