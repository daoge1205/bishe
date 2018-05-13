<?php
if(!isset($_POST['username']))
	exit('非法访问');
$user=$_POST['username'];
$pass=$_POST['password'];
include 'conn.php';
$result = $conn->query("select * from account where password='$pass' and username='$user'");
if($result ->num_rows ==1){	
	setcookie('username',$user);
	setcookie('password',$pass);
	echo "<script>window.location.href='kfhtml.html';</script>";
}
else{
	echo '<form name="myform" method="post" action="host.php">';
	echo '<input type="text" name="errtext" value="用户信息错误">';
	echo '</form>';
	echo '<script>alert("输入信息错误，点击返回！");</script>';
	echo '<script>setTimeout("document.myform.submit()",0);</script>';

}

?>
