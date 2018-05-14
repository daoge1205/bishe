<?php
header("Content-Type: text/html;charset=utf-8"); 
// 假定数据库用户名：root，密码：123456，数据库：RUNOOB
$conn=mysqli_connect("localhost","root","103125","test");
mysqli_query($conn,"set character set utf8");
if (mysqli_connect_errno($conm))
{
    echo "连接 MySQL 失败: " . mysqli_connect_error();
}
$sql="select * from bookHistory where userId='$snum'";

$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        	$book=$row["bookId"];
		$sql1="select * from book where bookId='$book'";
		$result1=$conn->query($sql1);
                while($row1=$result1->fetch_assoc()){
                        echo '<tr>'.'<td>'.$row1['bookName'].'</td>'.'<td>'.$row['bookId'].'</td>'.'</tr>';
                }	   
   }
}
else {
    echo "0 结果";
}

mysqli_close($conn);
?> 
