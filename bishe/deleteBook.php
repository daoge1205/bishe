<?php
$book=$_POST['bnum'];
include 'conn.php';
$sql="select * from bookBorrow where bookId='$book'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		$bookID=$row['bookId'];
		$student=$row['student'];
		$sql="insert into bookHistory values('$bookID','$student')";
		if($conn->query($sql)==true){
			echo "已经插入历史记录";	
		}
	}
}
else{
	echo "<script>alert('输入信息有误，删除失败');</script>";
        echo "<script>window.location.href='dpage.html'</script>";
}
	$sql ="delete from bookBorrow where bookId='$book'";
	mysqli_query($conn,$sql);
	$result = mysqli_affected_rows($conn);
      	if($result>0){
		echo "<script>alert('删除成功');</script>";
		echo "<script>window.location.href='dpage.html'</script>";
	}
	else{
		echo "<script>alert('输入信息有误，删除失败');</script>";
                echo "<script>window.location.href='dpage.html'</script>";
	}
?>
