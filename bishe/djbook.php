<?php
 	$book=$_POST["bnum"];
	$student=$_POST["snum"];
	include'conn.php';
	$sql = "INSERT INTO bookBorrow
VALUES ('$student', '$book', curdate(),date_add(curdate(),
	interval 30 day),5)";
	if ($conn->query($sql) === TRUE) {
	echo "<script>alert('插入成功!');</script>";
    echo "<script>window.location.href='dpage.html'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "<script>alert('插入失败!');</script>";
    echo "<script>window.location.href='dpage.html'</script>";

}

$conn->close();

?>
