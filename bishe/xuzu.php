<?php
	$book=$_POST['bnum'];
	$db=new mysqli('localhost','root','103125','test');
	if(!$db){
		die("数据连接失败");
		exit;
	}
	$sql="select consistentBor from bookBorrow where bookId='$book'";
	$rows=$db->query($sql);
	$max=$rows->fetch_row();
	echo $max[0];
	if($max[0]>0){
		$max[0]--;
		$sql="update bookBorrow set consistentBor='$max[0]' where bookId='$book'";
		$sql1="update bookBorrow set bdate=curdate(),Rdate=date_add(curdate(),
		interval 15 day)";
		if($db->query($sql)==true&&$db->query($sql)==true){
			echo'<script>alert("插入成功");</script>';
			echo'<script>window.location.href="dpage.html";</script>';
		}
	}
	else{
		echo "<script>alert('请检查输入或者图书续租条件是否符合')</script>";
		echo "<script>window.location.href='dpage.html'</script>";
	}
	
?>
