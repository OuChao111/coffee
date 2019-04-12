<?php
    session_start();
    date_default_timezone_set("Asia/Shanghai");
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
    <link rel="stylesheet" href="../css/message.css">
    <title>留言 | COFFEE休闲餐厅</title>
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
                    <a class="nav-link" href="#">新品推荐</a>
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
                <li class="nav-item active">
                    <a class="nav-link" href="./message.php">给我留言</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--导航 end-->

<section class="message">
	<div class="container">
	     <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box mx-auto">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>联系我们</h3>
                        <p>填写下面的表单给我们留言：</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="form-bottom contact-form">
                    <form role="form" action="message-submit.php" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="contact-subject">标题</label>
                            <input type="text" name="title" placeholder="标题" class="contact-subject form-control" id="contact-subject" required="required" minlength="2">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-message">Message</label>
                            <textarea name="content" placeholder="留言..." class="contact-message form-control" id="contact-message" required="required" minlength="5"></textarea>
                        </div>
                        <button type="submit" class="btn"><p class="send">发送</p></button>
                    </form>
                </div>
            </div>
         </div>
	</div>
</section>
<section class="my-message">
    <div class="container">
        <?php
        if(empty($_SESSION['username'])){

        }
        else{
            include('../public/config.php');
            $sql="select * from db_message ORDER BY ID DESC";
            $result = mysqli_query($link,$sql);
            echo "<h2 class='text-center'>我的留言</h2>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<div class='message-content'>";
                echo "<h3 class=\"message-title\" style='color: #0C0C0C'><span class='fa fa-telegram mr-1'></span>{$row['title']}</h3>";

//                echo "<span class='time' style='color: #000000'><i class='fa fa-calendar-o mr-2'></i>发表于</span> ".date("Y-m-d h:i:sa",$row['time']);
                echo " <div class=\"comment text-justify\" style='color: #000000'><span class='fa fa-envelope-open-o mr-2'></span>{$row['content']}</div>";
                echo "</div>";

            }
        }
        ?>
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