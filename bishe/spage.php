<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="bootstrap.min.css">
		<title>学生页面</title>
		<style>
			*{
				padding:0;
				margin:0;
			}
			#d1{
				color:white;
				background-color:darkblue;
				width:100%;
				float:left;
				text-align:center;
			}
			#d2{
				background-color:grey;
				float:left;
				width:20%;
				float:left;
				height:500px;
			}
			#d3{
				float:left;
				width:70%;
				height:350px;
				float:left;
			}
			.tab{
				color:black;
				display:none;
				width:100%;
				height:100%;
			}
			ul{
				list-style:none;
			}
			li{
				margin:10px;
				color:white;
				text-align:center;
			}
			li:hover{
				background-color:red;
			}
		</style>
	</head>
	<body>
		<div id="d1"><h1>学生登陆界面</h1></div>
		<div id="d2">
			<ul id="ul1">
				<li>查看借阅书籍</li>
				<li>查看历史借阅书籍</li>
			<ul>
		</div>
		<div id="d3">
			<div class="tab" style="display:block;">
  					<h2>条纹表格</h2>
  					<p>通过添加 .table-striped 类，来设置条纹表格:</p>            
 					<table class="table table-striped">
    					<thead>
      					<tr>
        				<th>书籍编号</th>
        				<th>姓名</th>
        				<th>借书时间</th>
					<th>还书时间</th>
      					</tr>
    					</thead>
    					<tbody>
      					<?php
						include'spageBookSearch.php';
					?>
    					</tbody>
  					</table>
			</div>
			<div class="tab">
					<?php echo $_COOKIE['username'];?>				
			</div>
		</div>
	</body>
	<script>
		var list=document.getElementById("ul1").getElementsByTagName("li");
		var divs=document.getElementById("d3").getElementsByTagName("div");
		for(var i=0;i<list.length;i++){
			
			list[i].index=i;

			list[i].onclick=function(){
              			for(var j=0; j<divs.length;j++){
                			divs[j].style.display="none";
             			}
				divs[this.index].style.display="block";
			}
		}
	</script>
</html>
