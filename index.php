<?php
    session_start();
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href ="./css/font-awesome.min.css">
    <link rel="shortcut icon" href="./images/bitbug_favicon.ico">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>COFFEE休闲餐厅</title>
</head>
<body>
<header class="header">
	<div class="container">
		<div class="float-right">
		  <?php
             if(empty($_SESSION['username'])){
                 echo  '<a href="./cn/login.php"><span class="icon-user mr-1"></span>登录</a>';
                 echo '<a href="./cn/register.php" class="ml-3"><span class="icon-edit mr-1"></span>注册</a>';
              }
             else{
                 $user = $_SESSION['username'];
                 echo "<span class='icon-user mr-1'></span><span class='welcome'>欢迎您$user!</span>";
                 echo '<a href="cn/logout.php" class="wu"><span class="icon-off mr-1"></span>退出</a>';
              }
		 ?>	
		</div>
	</div>
</header>
<!--导航栏-->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container position-relative">
        <a class="navbar-brand" href="./index.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">网站首页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cn/new-shop.php">新品推荐</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cn/activity.php">最新活动</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        饮品美食
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./cn/Drinks.php">饮品</a>
                        <a class="dropdown-item" href="./cn/Food.php">美食</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        咖啡文化
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="./cn/brewing-coffee.php">冲泡咖啡</a>
                        <a class="dropdown-item" href="./cn/Coffee-selection.php">臻选咖啡</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cn/news.php">新闻资讯</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cn/message.php">给我留言</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--导航栏-->

<!--轮播图-->
<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active carousel-bg1">
            <img class="d-block w-100 h-100" src="./images/32.jpg" alt="First slide">
        </div>
        <div class="carousel-item carousel-bg2">
            <img class="d-block w-100" src="./images/33.jpg" alt="Second slide">
        </div>
        <div class="carousel-item carousel-bg3">
            <img class="d-block w-100" src="./images/34.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="icon-angle-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="icon-angle-right" aria-hidden="true"></span>
    </a>
</section>

<!--轮播图-->

<!--饮品咖啡-->
<section class="fiche-card">
        <div class="backdrop02"></div>
        <div>
            <h2 class="Recommending">饮品咖啡</h2>
            <div class="text-center mb-2">
                <a href="./cn/Drinks-coffee.php" class="btn raduis0">手工咖啡</a>
                <a href="./cn/Drinks-le.php" class="btn raduis0">星冰乐</a>
                <a href="./cn/Drinks-cha.php" class="btn raduis0">茶瓦纳</a>
                <a href="./cn/Drinks-cold.php" class="btn raduis0">冷萃冰咖啡</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-6 col-6 less">
                <article class="fiche">
                    <header class="fiche__thumb">
                        <a href="./cn/drink-americano.php"><img src="./images/caffe-americano.jpg" class="img-fluid w-100"/></a>
                    </header>
                    <div class="fiche__body">
                        <div class="fiche__category">
                            <a href="./cn/Drinks.php">手工咖啡™</a>
                        </div>
                        <h3 class="fiche__title">
                            <a href="./cn/Drinks.php">浓缩咖啡</a>
                        </h3>
                        <div class="fiche__subtitle">美式咖啡</div>
                        <p class="fiche__description text-justify">简单即是美味，萃取经典浓缩咖啡，以水调和，香气浓郁蔓溢。</p>
                    </div>
                    <footer class="fiche__footer">
                        <i class="icon icon-fire"></i>
                        <span>600</span>
                        <i class="icon icon-thumbs-up ml-3"></i>
                        <a href="javascript:;"> 400</a>
                    </footer>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 col-6 less">
                <article class="fiche m-0 p-0">
                    <header class="fiche__thumb">
                    <a href="./cn/drink-espresso.php"><img src="./images/caramel-espresso-frappuccino.jpg" class="img-fluid w-100"/></a>
                    </header>
                    <div class="fiche__body">
                        <div class="fiche__category"><a href="./cn/Drinks.php">星冰乐™</a></div>
                        <h3 class="fiche__title"><a href="./cn/Drinks.php">星冰乐</a></h3>
                        <div class="fiche__subtitle">焦糖浓缩咖啡星冰乐</div>
                        <p class="fiche__description text-justify">香醇浓缩咖啡融于浓郁的焦糖咖啡星冰乐，最后在顶部的搅打稀奶油上淋上焦糖风味酱。让你停不了口的美味。</p>
                    </div>
                    <footer class="fiche__footer">
                        <i class="icon icon-fire"></i>
                        <span>600</span>
                        <i class="icon icon-thumbs-up ml-3"></i>
                        <a href="javascript:;"> 400</a>
                    </footer>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 col-6 less">
                <article class="fiche">
                    <header class="fiche__thumb">
                    <a href="./cn/drink-ruby.php"><img src="./images/iced-shaken-honey-ruby-grapefruit-black-tea.jpg" class="img-fluid w-100"/></a>
                    </header>
                    <div class="fiche__body">
                        <div class="fiche__category"><a href="#">茶瓦纳™</a></div>
                        <h3 class="fiche__title"><a href="#">茶瓦纳</a></h3>
                        <div class="fiche__subtitle">冰摇柚柚蜂蜜红茶</div>
                        <p class="fiche__description text-justify">混合了韩国柚子的清香、以色列柚汁的甘甜，点缀上洋槐蜂蜜层层深入的口感，让TA对这杯沁人心脾念念不忘 。</p>
                    </div>
                    <footer class="fiche__footer">
                        <i class="icon icon-fire"></i>
                        <span>600</span>
                        <i class="icon icon-thumbs-up ml-3"></i>
                        <a href="javascript:;"> 400</a>
                    </footer>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 col-6 less">
                <article class="fiche">
                    <header class="fiche__thumb">
                    <a href="./cn/drink-cold-brew.php"><img src="./images/vanilla-flavor-sweet-cream-cold-brew.jpg" class="img-fluid w-100"/></a>
                    </header>
                    <div class="fiche__body">
                        <div class="fiche__category"><a href="#">冷萃冰咖啡™</a></div>
                        <h3 class="fiche__title"><a href="#">冷萃冰咖啡</a></h3>
                        <div class="fiche__subtitle">轻甜香草风味奶油冷萃冰咖啡</div>
                        <p class="fiche__description text-justify">在冷萃冰咖啡的基础上，添加香草风味轻奶油。每份奶油都是手工调制而成， 使用脱脂奶也更符合现代人的生活理念。</p>
                    </div>
                    <footer class="fiche__footer">
                        <i class="icon icon-fire"></i>
                        <span>600</span>
                        <i class="icon icon-thumbs-up ml-3"></i>
                        <a href="javascript:;"> 400</a>
                    </footer>
                </article>
            </div>
            </div>
            <div class="more">
                <a class="" href="./cn/Drinks.php">查看更多</a>
            </div>
        </div>
</section>
<!--饮品咖啡-->

<!--精品美食-->
<section class="delicious">
    <div class="backdrop01"></div>
    <h2 class="Recommending">精品美食</h2>
    <div class="text-center">
        <a href="./cn/Food-cake.php" class="btn raduis0">蛋糕&甜品</a>
        <a href="./cn/Food-san.php" class="btn raduis0">三明治</a>
        <a href="./cn/Food-hongbei.php" class="btn raduis0">烘焙</a>
        <a href="./cn/Food-it.php" class="btn raduis0">其他美食</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 bg-white less">
                <article class="delicious-card">
                    <a href="./cn/Food-triple-dark.php" class="delicious-body">
                        <img src="./images/triple-dark-chocolate-cake.jpg" alt="" class="img-fluid d-block m-auto h-100">
                    </a>
                    <a href="./cn/Food-triple-dark.php" class="delicious-back"></a>
                    <div class="delicious-footer">
                        <p>浓醇三重黑巧克力蛋糕</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-3 col-6 bg-white less">
                <article class="delicious-card">
                    <a href="./cn/Food-starbucks.php" class="delicious-body">
                        <img src="./images/starbucks-coffee-tiramisu.jpg" alt="" class="img-fluid d-block m-auto h-100">
                    </a>
                    <a href="./cn/Food-starbucks.php" class="delicious-back"></a>
                    <div class="delicious-footer">
                        <p>咖啡提拉米苏蛋糕</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-3 col-6 bg-white less">
                <article class="delicious-card">
                    <a href="./cn/Food-blueberry.php" class="delicious-body">
                        <img src="./images/blueberry-and-cookie-style-cheesecake.jpg" alt="" class="img-fluid d-block m-auto h-100">
                    </a>
                    <a href="./cn/Food-blueberry.php" class="delicious-back"></a>
                    <div class="delicious-footer">
                        <p>蓝莓曲奇风轻乳酪蛋糕</p>
                    </div>
                </article>
        </div>
            <div class="col-lg-3 col-6 bg-white less">
            <article class="delicious-card">
            <a href="./cn/Food-macaron.php" class="delicious-body">
            <img src="./images/macaron.jpg" alt="" class="img-fluid d-block m-auto h-100">
            </a>
            <a href="./cn/Food-macaron.php" class="delicious-back"></a>
            <div class="delicious-footer">
            <p>法式马卡龙</p>
            </div>
            </article>
            </div>
            <div class="col-lg-3 col-6 bg-white less">
                <article class="delicious-card">
                <a href="./cn/Food-eclair.php" class="delicious-body">
                <img src="./images/eclair.jpg" alt="" class="img-fluid d-block m-auto h-100">
                </a>
                <a href="./cn/Food-eclair.php" class="delicious-back"></a>
                <div class="delicious-footer">
                <p>法式闪电泡芙</p>
                </div>
                </article>
            </div>
            <div class="col-lg-3 col-6 bg-white less">
            <article class="delicious-card">
            <a href="" class="delicious-body">
            <img src="./images/new-york-style-creamy-cheesecake.jpg" alt="" class="img-fluid d-block m-auto h-100">
            </a>
            <a href="./cn/Food-cheesecake.php" class="delicious-back"></a>
            <div class="delicious-footer">
            <p>纽约风浓郁重芝士蛋糕</p>
            </div>
            </article>
            </div>
            <div class="col-lg-3 col-6 bg-white less">
            <article class="delicious-card">
            <a href="./cn/Food-muffin.php" class="delicious-body">
            <img src="./images/turkey-bacon-english-muffin.jpg" alt="" class="img-fluid d-block m-auto h-100">
            </a>
            <a href="./cn/Food-muffin.php" class="delicious-back"></a>
            <div class="delicious-footer">
            <p>火鸡培根英式麦芬</p>
            </div>
            </article>
            </div>
            <div class="col-lg-3 col-6 bg-white less">
            <article class="delicious-card">
            <a href="./cn/Food-sandwich.php" class="delicious-body">
            <img src="./images/ham-and-gouda-sandwich.jpg" alt="" class="img-fluid d-block m-auto h-100">
            </a>
            <a href="./cn/Food-sandwich.php" class="delicious-back"></a>
            <div class="delicious-footer">
            <p>高达芝士火腿三明治</p>
            </div>
            </article>
            </div>
        </div>
    <div class="more">
        <a class="" href="./cn/Food.php">查看更多</a>
    </div>
    </div>

</section>
<!--精品美食-->

<!--最新产品 start-->
<section class="activity">
    <h2 class="text-center Recommending mt-4">最新产品</h2>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 py-2">
        <div class="activity-left p-0 ml-0">
        <img src="./images/banner-head.jpg" alt="" class="img-fluid d-block w-100 h-100">
        </div>
        </div>
        <div class="col-lg-6 py-2">
        <div class="activity-right">
        <h2 class="title">冰摇柚柚蜂蜜红茶</h2>
        <p class="text-justify text">混合了韩国柚子的清香、以色列柚汁的甘甜、美国粉柚汁的果香融于醇香红茶，颗颗饱满果粒和清甜柚子皮，点缀上洋槐蜂蜜层层深入的口感让TA对这杯沁
        人心脾念念不忘。更有两款特色茶底可供选择:搭配碧螺春绿茶：鲜醇甘厚，绿意盎然，清雅幽香搭配金萱乌龙茶：淡淡花香，成就丰富层次的清爽滋味。</p>
        <a href="./cn/drink-ruby.php" class="details">了解详情</a>
        </div>
        </div>

        <div class="col-lg-6 py-2 sc">
        <div class="activity-right">
        <h2 class="my-3 title">冷萃冰咖啡</h2>
        <p class="text text-justify">10多个小时的慢速萃取，带出微甜的巧克力般风味，与特别的柑橘般风味，为你奉上沁甘顺滑的味觉感受。在冷萃冰咖啡的基础上，添加香草风味轻奶油。每份轻奶油都是根据西雅图的星巴克咖啡研发团队精心研发的配方新鲜手工调制而成， 使用脱脂奶也更符合现代人的健康生活理念。</p>
        <a href="./cn/drink-cold-brew.php" class="details">了解详情</a>
        </div>
        </div>
        <div class="col-lg-6 sv">
        <div class="activity-left mx-auto py-2">
        <img src="./images/cold-brew-desktop.jpg" alt="" class="img-fluid d-block w-100 h-100">
        </div>
        </div>

        <div class="col-lg-6 sv1">
            <div class="activity-left mx-auto py-2">
                <img src="./images/cold-brew-desktop.jpg" alt="" class="img-fluid d-block w-100 h-100">
            </div>
        </div>
        <div class="col-lg-6 py-2 sc1">
            <div class="activity-right">
                <h2 class="my-3 title">冷萃冰咖啡</h2>
                <p class="text text-justify">10多个小时的慢速萃取，带出微甜的巧克力般风味，与特别的柑橘般风味，为你奉上沁甘顺滑的味觉感受。在冷萃冰咖啡的基础上，添加香草风味轻奶油。每份轻奶油都是根据西雅图的星巴克咖啡研发团队精心研发的配方新鲜手工调制而成， 使用脱脂奶也更符合现代人的健康生活理念。</p>
                <a href="./cn/drink-cold-brew.php" class="details">了解详情</a>
            </div>
        </div>


        <div class="col-lg-6 py-2">
        <div class="activity-left p-0 ml-0">
        <img src="./images/cold-foam-cold-brew-desktop.jpg" alt="" class="img-fluid d-block w-100 h-100">
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
        <a href="./cn/drink-cold-foam-cold-brew.php" class="details">了解详情</a>
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

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>