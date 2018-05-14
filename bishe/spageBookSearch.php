<?php
include 'conn.php';
$snum=$_COOKIE['username'];
$snum="000000";
$sql = "SELECT * FROM bookBorrow where student='$snum'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo '<tr>' . '<td>'.$row["bookId"].'</td>'.'<td>'.$row["student"].'</td>'.'<td>'.$row["bdate"].'</td>'.'<td>'.$row["Rdate"].'</td>'.'</tr>'; 
    }
} 
else {
    echo "0 结果";
}
$conn->close();
?>
