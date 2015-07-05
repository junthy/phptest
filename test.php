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
$image1 = imagecreatefrompng('https://www.baidu.com/img/bdlogo.png');
$image2 = imagecreatefromjpeg('D:\love.jpg');
imagepng($image1, 'baidu.png') or die('创建图像失败!');
ob_clean();
header('Content-type:image/jpeg');
imagejpeg($image2,'love.jpg');
?>