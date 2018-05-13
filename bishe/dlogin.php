<?php
if(!isset($_POST['dsubmit']))
	exit('非法访问');
$user=$_POST['dusername'];
$pass=$_POST['dpassword'];
include 'conn.php';
$result = $conn->query("select * from account where password='$pass' and username='$user'");
if($result ->num_rows ==1){	
	setcookie('username',$user);
	setcookie('password',$pass);
	echo "<script>window.location.href='dpage.html';</script>";
}
else{
	echo '<form name="myform" method="post" action="host.php">';
	echo '<input type="text" name="derrtext" value="用户信息错误">';
	echo '</form>';
	echo '<script>alert("输入信息错误，点击返回！");</script>';
	echo '<script>setTimeout("document.myform.submit()",0);</script>';
}
?>
