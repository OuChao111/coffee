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
    <title>法式马卡龙 | COFFEE休闲餐厅</title>
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
                    <a class="nav-link" href="./message.php">给我留言</a>
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
                    <img src="../images/macaron.jpg" alt="" class="img-fluid">
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <img src="../images/0d0df1e1199a4b7c8a8428bcfd9253a3.jpg" alt="" class="img-fluid">
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <img src="../images/3b94746477d1ceb73bfc7bb841970fcd.jpg" alt="" class="img-fluid">
                </div>
            </div>


            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                        <img src="../images/macaron.jpg" alt="" class="sm">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <img src="../images/0d0df1e1199a4b7c8a8428bcfd9253a3.jpg" alt="" class="sm">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <img src="../images/3b94746477d1ceb73bfc7bb841970fcd.jpg" alt="" class="sm">
                    </a>
                </li>
            </ul>
        </div>




        <div class="col-lg-6 col-sm-12 col-12">
            <div class="order">
                <span class="icon icon-food icon-2x"></span>
                <span class="caption">蛋糕&甜品</span>
                <h1 class="title mb-3">法式马卡龙</h1>
                <p class="text-justify tag">马卡龙（法语：Macaron），又称作玛卡龙、法式小圆饼，这是一种用蛋白、杏仁粉、白砂糖和糖霜所做的法式甜点，通常在两块饼干之间夹有水果酱或奶油等内馅。这种甜食出炉后，以一个圆形平底的壳作基础，上面涂上调合蛋白，最后加上一个半球状的上壳，形成一个圆形小巧甜点，呈现出丰富的口感，是法国西部维埃纳省最具地方特色的美食，这种点心也在法国东北地区偶尔可见。</p>
                <p class="text-justify tag">马卡龙是一款经典法式甜点。2片口感酥脆的小圆饼，包裹着绵密柔软的果酱内馅，赋予了法式马卡龙独一无二的外观和口感。</p>
                <p class="text-justify tag">五种独特口味：焦糖玛奇朵、栗香拿铁、覆盆子、抹茶拿铁、香草</p>
                <p class="text-justify tag">正宗法式传统工艺制作</p>
                <p class="text-justify tag">特点：外酥内软、口味清甜</p>
                <p class="text-justify tag">咖啡搭配推荐：香草拿铁（热/冷），拿铁（热/冷）</p>
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
                <a class="thumbnail d-block" href="./Food-starbucks.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/starbucks-coffee-tiramisu.jpg')">

                        </div>
                        <p class="text-center">咖啡提拉米苏蛋糕</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./Food-triple-dark.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/triple-dark-chocolate-cake.jpg')">

                        </div>
                        <p class="text-center">浓醇三重黑巧克力蛋糕</p>
                    </div>
                </a>

            </div>
            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./Food-blueberry.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/blueberry-and-cookie-style-cheesecake.jpg')">

                        </div>
                        <p class="text-center">蓝莓曲奇风轻乳酪蛋糕</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./Food-eclair.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/eclair.jpg')">

                        </div>
                        <p class="text-center">法式闪电泡芙</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./Food-cheesecake.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/new-york-style-creamy-cheesecake.jpg')">

                        </div>
                        <p class="text-center">纽约风浓郁重芝士蛋糕</p>
                    </div>
                </a>

            </div>

            <div class="col-lg-2 col-md-3 col-6 m-0 pad">
                <a class="thumbnail d-block" href="./Food-muffin.php">
                    <div class="circle py-2">
                        <div class="preview mx-auto" style="background-image: url('../images/turkey-bacon-english-muffin.jpg')">

                        </div>
                        <p class="text-center">火鸡培根英式麦芬</p>
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