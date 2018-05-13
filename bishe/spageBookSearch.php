<?php
include 'conn.php';
$sql = "SELECT * FROM bkrec";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo '<tr>' . '<td>'.$row["bnum"].'</td>'.'<td>'.$row["num"].'</td>'.'<td>'.$row["bdate"].'</td>'.'<td>'.$row["rdate"].'</td>'.'</tr>'; 
    }
} 
else {
    echo "0 结果";
}
$conn->close();
?>
