<?php
header("Content-type: text/html; charset=utf-8");
$num=$_POST["nameandclass"];
$name=$_POST["name"];
$db=new mysqli('localhost','root','103125','test');
mysqli_query($db,"set names utf8");
if ($db->connect_error) {
    die("连接失败: " . $db->connect_error);
} 
echo "连接成功";
$sql="select max(num) from user where num like '$num%'";
$rows=$db->query($sql);
$max=$rows->fetch_row();
if(!isset($max[0])){	
$max[0]= -1;
}
$number=sprintf('%06s',$max[0]+1);
$number=substr_replace($number,$num,0,4);
echo "学生编号".$number;
echo "学生姓名".$name;
$sql="insert into user 
      values('$number','$name',0)";
if($db->query($sql) === FALSE) {
                echo "新记录插入失败";
		exit;
}
$db->close(); 
 echo '<script>alert("插入成功，点击返回！");</script>';
echo "<script>window.location.href='kfhtml.html';</script>";
?>
