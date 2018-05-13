<?php
	$q=$_GET["q"];

	$con = mysqli_connect('localhost','root','103125');
	if (!$con){
   		 
		die('Could not connect: ' . mysqli_error($con));
	}
// 选择数据库
mysqli_select_db($con,"test");
// 设置编码，防止中文乱码
mysqli_set_charset($con, "utf8");
$sql="SELECT * FROM book WHERE bookId = '$q'";
$result = mysqli_query($con,$sql);
 
echo "<table id='table2'>
<tr>
<th>书号</th>
<th>书名</th>
<th>是否借出</th>
</tr>";
 $tag="是";
while($row = mysqli_fetch_array($result))
{
	if($row['tag']=='0'){
		$tag="否";
	}
    echo "<tr>";
    echo "<td>" . $row['bookId'] . "</td>";
    echo "<td>" . $row['bookName'] . "</td>";
    echo "<td>" . $tag . "</td>";
    echo "</tr>";
}
echo "</table>";
 
mysqli_close($con);
?>
