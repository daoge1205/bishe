<?php
 	$book=$_POST["bnum"];
	$student=$_POST["snum"];
	include'conn.php';
	$sql = "INSERT INTO bookBorrow
VALUES ('$student', '$book', curdate(),date_add(curdate(),
	interval 30 day),5)";
	if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
