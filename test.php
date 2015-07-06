<?php
/*$str = 'php123@gmail.com';
$res = preg_match('/^\w+@\w+(\.\w+){1,3}$/', $str);
if ($res) {
    echo 'your email is rightful';
} else {
    echo 'your email is illegal!';
}
echo '<br/>'
*/?>

<?php
/*$str1 = 'php123%gmail.com';
$res1 = preg_match('/^\w+@\w+(\.\w+){1,3}$/', $str1);
if ($res1) {
    echo 'your email is rightful';
} else {
    echo 'your email is illegal!';
}
*/?>

<?php
/*preg_match('#^(?:http://)?(^/]+)#i','http://www.php.net /index.html',$matches);
echo '数组的第一个元素内容是:'.$matches[0];
echo '<br/>';
echo '数组的第二个元素内容是:'.$matches[1];
echo '<br/>';
$host=$matche[1];
preg_match('/[^.]+\.[^.]+$/',$host,$matches);
echo '这个网址的域名是: '.$matches[0];
*/?>

<?php
/*$str='This is PHP!';
preg_match('/\bis\b/i',$str,$res,PREG_OFFSET_CAPTURE);
print_r($res);
*/?>

<?php
/*header("Content-Type: text/html; charset=utf-8");
$count=0;
$str = 'Hello world!';
$sea = array('Hello', 'world');
$rep=array('Hi', 'PHP');
$newstr = str_replace($sea, $rep, $str,$count);
echo '字符串替换前：' . $str;
echo '<br/>字符串替换后：' . $newstr;
echo "<br/>查找了：$count 次";
*/?>

<?php
/*$str='A';
$sea = array('A', 'B', 'C', 'D', 'E');
$rep = array('B', 'C', 'D', 'E','F');
echo str_replace($sea, $rep, $str);
*/?>

<?php
/*header("Content-Type: text/html; charset=utf-8");
echo '获取当前时间的详细信息：';
print_r(getdate());
echo '<br />获取指定时间的详细信息';
print_r(getdate(mktime(13,11,59,6,15,1999)));
*/?>

<?php
/*$arr=getdate();
switch($arr['weekday']){
    case 'Friday':
        $week = '星期五';
        break;
    case'Saturday':
        $week = '星期六';
        break;
    case'Sunday':
        $week = '星期天';
        break;
}
echo '今天' . $week . ',是' . $arr['year'] . '年中的第' . $arr['yday'] . '天。';
*/?>

<?php
/*function future($days=0){
    $Itime=mktime(0,0,0,date('m'),date('d')+$days,date('Y'));
    echo $days . '天后是:' . date('Y年m月d日。', $Itime);
}
future(50);
future(1000);
*/?>

<?php
/*$res = fopen('..\aaa.png', 'r') or die('文件打开失败，程序退出!');
echo '正确打开文件这里才会显示。';
print_r($res);
*/?>

<?php
/*$str=file('d:\path.txt');
print_r($str);
echo '<br /><br />';
$str = file_get_contents('d:\path.txt', NULL , NULL , 12, 50);
echo $str;
echo '<br /><br />';
$str = file_get_contents('d:\path.txt', NULL , NULL , 100, 201);
echo $str;
*/?>

<?php
/*$path='D:\aaa';
if (is_dir($path)) {
    $dire = opendir($path);
    echo'open dir successful';
} else {
    echo 'open dir fail!';
    exit();
}
while ($rea = readdir($dire)) {
    echo $rea . '<br />';
}
closedir($dire);
*/?>

<?php
/*$html=file_get_contents('http://www.baidu.com');
echo($html);
*/?>

<!--<html>
<form method='post' enctype='multipart/form-data'>
    <input type='file' name='upfile'/>
    <input type='submit' value='上传'/>
</form>
</html>-->

<?php
/*header("Content-Type: text/html; charset=utf-8");
if (!empty($_FILES)) {
    foreach ($_FILES['upfile'] as $k=>$v) {
        echo "$k=>$v <br/>";
    }
} else {
    echo "没有上传文件。";
}
*/?>

<?php
/*
if (!empty($_FILES)) {
    $tmpname=$_FILES['upfile']['tmp_name'];
    $name='D:\\'.$_FILES['upfile']['name'];
    move_uploaded_file($tmpname.$name )or die('submit file fail,exit');
    echo'文件上传成功！';
} else {
    echo '没有文件上传。';
}
*/?>

<?php
/*print_r(gd_info());
*/?>

<?php
/*$image1 = imagecreatefrompng('https://www.baidu.com/img/bdlogo.png');
$image2 = imagecreatefromjpeg('D:\love.jpg');
imagepng($image1, 'baidu.png') or die('创建图像失败!');
ob_clean();
header('Content-type:image/jpeg');
imagejpeg($image2,'love.jpg');
*/?>

<?php
/*$image=imagecreate(200,200);
$green = imagecolorallocate($image, 0, 255, 0);
$red=imagecolorallocate($image, 255, 0, 0);
$blue=imagecolorallocate($image, 0, 0, 255);
imagejpeg($image);
imagedestroy($image);
*/?>

<?php
/*$image = imagecreatefromgif('http://www.baidu.com/img/baidu_sylogo1.gif');
ob_clean();
header('Content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);
*/?>

<?php
/*$image = imagecreate(100, 100);
$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 0, 0, 0);
imagesetpixel($image,50,50,$white);
ob_clean();
header('Content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);
*/?>

<?php
/*$image = imagecreate(200, 200);
$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 0, 0, 0);
for ($i = 0; $i < 15; $i++) {
    imageline($image, rand(0, 200), rand(0, 200), rand(0, 200), rand(0, 200), $white);
}
ob_clean();
header('Content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);
*/?>


<?php
/*$image = imagecreate(500, 300);
$while = imagecolorallocate($image, 255, 255, 255);

$gray = imagecolorallocate($image, 192, 192, 192);
$darkgray = imagecolorallocate($image, 90, 90, 90);
$navy = imagecolorallocate($image, 0, 0, 80);
$darknavy = imagecolorallocate($image, 0, 0, 50);
$red = imagecolorallocate($image, 255, 0, 0);
$darkred = imagecolorallocate($image, 90, 0, 0);

for ($i = 160; $i > 150; $i--) {
    imagefilledarc($image, 250, $i, 400, 200, 0, 45, $darknavy, IMG_ARC_PIE);
    imagefilledarc($image, 250, $i, 400, 200, 45, 75, $darkgray, IMG_ARC_PIE);
    imagefilledarc($image, 250, $i, 400, 200, 75, 360, $darkred, IMG_ARC_PIE);
}
imagefilledarc($image, 250, 150, 400, 200, 0, 45, $navy, IMG_ARC_PIE);
imagefilledarc($image, 250, 150, 400, 200, 45, 75, $gray, IMG_ARC_PIE);
imagefilledarc($image, 250, 150, 400, 200, 75, 360, $red, IMG_ARC_PIE);

ob_clean();
header('Content-type:image/jpeg');

imagejpeg($image);
imagedestroy($image);
*/?>

<?php
/*$image = imagecreate(500, 500);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$str = 'Hello PHP!';
imagettftext($image, 55, 0, 50, 250, $black, 'C:\Windows\Fonts\Arial.ttf', $str);
imagettftext($image, 55, 45, 100, 370, $black, 'C:\Windows\Fonts\Arial.ttf', $str);
imagettftext($image, 55, 90, 250, 400, $black, 'C:\Windows\Fonts\Arial.ttf', $str);
imagettftext($image, 55, 135, 370, 330, $black, 'C:\Windows\Fonts\Arial.ttf', $str);
ob_clean();
header('Content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);
*/?>

<?php
/*$image = imagecreate(200, 100);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

for ($i = 0; $i < 25; $i++){
    imageline($image, rand(0, 200), rand(0, 100), rand(0, 200), rand(0, 100), $black);
}

for ($i = 0; $i < 1500; $i++){
    imagesetpixel($image, rand(0, 200), rand(0, 100), $black);
}

for ($i = 0, $str = ''; $i < 4;$i++) {
    switch (rand(1, 3)) {
        case '1':
            $ch = rand(0, 9);
            break;
        case '2':
            $ch = sprintf('%c', rand(97, 122));
            break;
        case '3':
            $ch = sprintf('%c', rand(65, 90));
            break;
    }
    $str.= $ch;
}
ob_clean();
header('Content-type:image/jpeg');
imagettftext($image, 32, rand(0, 15), 20, 70, $black, 'C:\\Windows\Fonts\mingliu.ttc', $str);
imagejpeg($image);
imagedestroy($image);
*/?>

<?php
/*header("Content-Type: text/html; charset=utf-8");
//header("Content_Type: text/html; charset=utf-8");
$res = mysql_connect('localhost', 'root', '') or die('数据库连接失败');
echo '数据库连接成功。';
echo '数据库的客户端信息是：'.mysql_get_client_info();
echo '数据库的主机信息是:' . mysql_get_host_info($res).'<br />';
echo '数据库的协议是:' . mysql_get_proto_info($res) . '<br/>';
echo '数据库的服务器信息是:' . mysql_get_server_info($res) . '<br/>';
*/?>

<?php
/*header("Content-Type: text/html; charset=utf-8");
$sta = setcookie('testcookie', 'testvalue', time() + 60 * 60);
if ($sta) {
    echo 'Cookie 设置成功!';
}
*/?>

<?php
/*header("Content-Type: text/html; charset=utf-8");
if (!isset($_COOKIE['vistime'])) {
    setcookie('vistime', date('Y-m-d H:i:s'), time() + 60 * 60);
    echo '这是您第一次访问本网站';
} else {
    echo '您上次访问本网站是在:' . $_COOKIE['vistime'];
    echo '<br/>本次访问时间是:' . date('Y-m-d H:i:s');
}
*/?>

<?php
header("Content-Type: text/html; charset=utf-8");
setcookie('num',2);
if (isset($_COOKIE['num'])) {
    setcookie('num', $_COOKIE['num'] + 1);
    echo "这是您今天第{$_COOKIE['num']}次访问本网站";
} else {
    echo '欢迎您首次访问本网站!';
}
?>
