<?php
session_start();
//生成验证码背景图---------------------------------
header('Content-Type:image/jpeg;');
//背景图尺寸
$width=130;
$height=50;
//创建画布
$img=imageCreateTrueColor($width,$height);
//分配颜色
$white = imageColorAllocate($img,0xff,0xff,0xff);
//填充颜色到画布
imageFill($img,0,0,$white);
//生成验证码的值----------------------------------
$chars = '1234567890';//所以可能出现的字符
$chars_len=strlen($chars);
$code_len=4;//验证码的长度
$code='';//初始化验证码字符串
for($i=1;$i<=$code_len;++$i){
	$rand=mt_rand(0,$chars_len-1);//随机取0-9中的任意一个数字
	$code.=$rand;//将取出来的数字连接在一起
}
//存入session中，用于验证-------------------------
$_SESSION['vcode']=$code;
//随机分配字符串颜色------------------------------
$str_color=imageColorAllocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
//计算字符串的居中
//字符串大小
$font=135;
//画布尺寸
$img_w=imageSX($img);
$img_h=imageSY($img);
//字体的尺寸
$font_w=imagefontwidth($font);
$font_h=imagefontheight($font);
//字符串的尺寸
$code_w=$font_w*$code_len;
$code_h=$font_h;
$x=($img_w-$code_w)/2;
$y=($img_h-$code_h)/2;

//4.3 设置背景干扰元素
for ($$i = 0; $i < 200; $i++) {
    $pointcolor = imagecolorallocate($img, mt_rand(50, 200), mt_rand(50, 200), mt_rand(50, 200));
    imagesetpixel($img, mt_rand(1, 129), mt_rand(1, 49), $pointcolor);
//	imagesetpixel($image, mt_rand(1, 99), mt_rand(1, 29), $pointcolor);
}

//4.4 设置干扰线
for ($i = 0; $i < 3; $i++) {
    $linecolor = imagecolorallocate($img, mt_rand(50, 200), mt_rand(50, 200), mt_rand(50, 200));
    imageline($img, mt_rand(1, 129), mt_rand(1, 49), mt_rand(1, 129), mt_rand(1, 49), $linecolor);
//	imageline($image, mt_rand(1, 99), mt_rand(1, 29), mt_rand(1, 99), mt_rand(1, 29), $linecolor);
}
//把验证码输出到画布上----------------------------
imageString($img,$font,$x,$y,$code,$str_color);
//直接输出
imageJPEG($img);
imageDestroy($img);
?>