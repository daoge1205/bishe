<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>

<title>毕业设计首页</title>


<style>
	*{
		padding:0;
		margin:0;

	}
	a{
		text-decoration:none;
	}
	#d1{
		background-color:grey;
		height:50px;
		float:left;
		width:100%;
		text-align:center;
	}
	#d21{
		background-color:black;
		color:white;
		float:left;
		width:25%;
		text-align:center;
	}
	 #d22{
                background-color:black;
                color:white;
                float:left;
                width:25%;
                text-align:center;
        }
	 #d23{
                background-color:black;
                color:white;
                float:left;
                width:25%;
                text-align:center;
        }
	 #d231{
		 background-color:lightblue;
	 	 opacity:0.8;
		 position:absolute;						                
		 width:350px;					
		 height:200px;	
		 display:none;																      
		 z-index:999;															    
	}
	#d241{
		background-color:lightblue;
		opacity:0.8;
		width:350px;
		height:200px;
		z-index:999;
		display:none;
		position:absolute;
	}
	 #d24{
                background-color:black;
                color:white;
                float:left;
                width:25%;
                text-align:center;
        }
	#lbq{
		width:100%;
		height:445px;
		float:left;
		
	}
	.carousel-inner img {
     		 width: 100%;
    		 height: 100%;
  	}
	#bottom{
		background-color:blue;
		width:100%;
		float:left;
		margin-top:20px;
		text-align:right;
	}
</style>

</head>

<body>
	<?php $err=$_POST['errtext'];?>
	<?php $derr=$_POST['derrtext'];?>
	<div id="d1">
		这是广告栏目
	</div>
	<div id="d21">
		<a href="bkRec.html" style="color:white;">图书推荐</a>
	</div>
	 <div id="d22">
                <a href="bookfind.html"style="color:white;">图书查询</a>
        </div>
	 <div id="d23">
                用户登陆
		<div id="d231">
			<form method="post" action="login.php">
					<h2>登陆界面</h2>
					帐号: <input type="text" name="username"><br/>
					密码: <input type="password" name="passwd"><br/><br/>
					<span style="color:red"><?php echo $err?></span>
					<div>
						<input  type="submit" name="submit" value="提交" style="margin-right:20px;">
						<a href="zhuce.php">注册</a>
					</div>  
			</form>
		</div>
        </div>
	 <div id="d24">
                管理者选项
			<div id="d241">
			<form method="post" action="dlogin.php">
					<h2>管理者登陆</h2>
					帐号:<input type="text" name="dusername"><br/>
					密码:<input type="password" name="dpassword"><br/><br/>
					<span style="color:red"><?php echo $derr?></span>
					<div>
						<input type="submit" name="dsubmit" value="提交">
					</div>		
			</form>
			</div>
        </div>
	<div id="lbq">
		<div id="demo" class="carousel slide" data-ride="carousel">
 		 <!-- 指示符 -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  <!-- 轮播图片 -->
 		 <div class="carousel-inner">
  			  <div class="carousel-item active">
  			   	 <img src="img_fjords_wide.jpg">
			  </div>
  		 	  <div class="carousel-item">
   		  	   	 <img src="img_nature_wide.jpg">
   			  </div>
   			 <div class="carousel-item">
     		 		<img src="img_mountains_wide.jpg">
  			  </div>
		  </div>
 
		  <!-- 左右切换按钮 -->
			 <a class="carousel-control-prev" href="#demo" data-slide="prev">
   				 <span class="carousel-control-prev-icon"></span>
 		   	 </a>
			 <a class="carousel-control-next" href="#demo" data-slide="next">
			   	 <span class="carousel-control-next-icon"></span>
			 </a>
	</div>
	<div id="bottom">
		<a href="kfPage.html">开发者页面</a>
	</div>


<script>
    /*获取父div和子div*/
    var father=document.getElementById('d23');
    var son=document.getElementById('d231');
    
    /*鼠标移入父div时，显示子div*/
    father.onmouseover=function(){
        son.style.display='block';
    };
    
    /*鼠标移出父div时，显示子div*/    
    father.onmouseout=function(){
        son.style.display='none';
    };
    var dfather=document.getElementById('d24');
    var dson=document.getElementById('d241');
    dfather.onmouseover=function(){
	dson.style.display='block';		
    }
   dfather.onmouseout=function(){
	dson.style.display='none';
   }
</script>


</body>

</html>
