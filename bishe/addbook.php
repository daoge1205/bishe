<?php
header("Content-type: text/html; charset=utf-8");
$publish=$_POST['publish'];
$tag=$_POST['item'];
$book=$_POST['book'];
$author=$_POST['author'];
$price=$_POST["price"];
$db=new mysqli('localhost','root','103125','test');
mysqli_query($db,"set names utf8");
if(!$db){
	die("数据库连接失败");
}

//书籍号自动填充
$sql = "SELECT max(bookId) FROM book where bookId like '$tag%'";
$rows=$db->query($sql);
$max=$rows->fetch_row();
if(!isset($max[0])){
	$max[0]= -1;
}
$num=$_POST['number'];
for($i=0;$i<$num;$i++){
	$values[$i]=sprintf('%08s',$max[0]+1);
	$values[$i]=substr_replace($values[$i],$tag,0,3);
	$max[0]++;
}
for($j=0;$j<$num;$j++){
	$sql="INSERT INTO book
	VALUES ('$values[$j]','$book', '$author','$publish',$price,0)";

	if ($db->query($sql) === FALSE) {
    		echo "新记录插入失败";
	}
}	
$db->close();
 echo '<script>alert("插入成功，点击返回！");</script>';
echo "<script>window.location.href='kfhtml.html';</script>";

?>
