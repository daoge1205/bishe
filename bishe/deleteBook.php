<?php
$book=$_POST['bnum'];
include 'conn.php';
$sql ="delete from bookBorrow where bookId='$book'";
if($conn->query($sql)==true){
	$result = mysql_affected_rows();
        if($result>0){
		echo "<script>alert('删除成功');</script>";
		echo "<script>window.location.href='dpage.html'</script>";
	}
	else{
		echo "<script>alert('输入信息有误，删除失败');</script>";
                echo "<script>window.location.href='dpage.html'</script>";
	}
}
else{
	echo $conn->error;
	echo "<script>alert('系统有BUG，联系管理员');</script>";
	
}
?>
