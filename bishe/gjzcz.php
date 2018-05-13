<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

// 从 URL 中获取参数 q 的值
$q=$_GET["q"];

// 如果 q 参数存在则从 xml 文件中查找数据
if (strlen($q)>0)
{
    $hint="";
    for($i=0; $i<($x->length); $i++){
        $y=$x->item($i)->getElementsByTagName('title');
        $z=$x->item($i)->getElementsByTagName('url');
        if ($y->item(0)->nodeType==1)
        {
            // 找到匹配搜索的链接
            if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
            {
                if ($hint=="")
                {
                    $hint='<table id="table1" border="1" cellspacing="0">'.
				'<tr>'.'<th>书籍名称</th>'.'<th>图书信息</th>'.'</tr>'.
				'<tr>'.
		   		'<td>'. $z->item(0)->childNodes->item(0)->nodeValue .'</td>'.
				'<td>'. $y->item(0)->childNodes->item(0)->nodeValue.'</td>'.
				'</tr>';
                }
                else {
                    $hint=$hint .'<tr><td>'.$z->item(0)->childNodes->item(0)->nodeValue.'</td><td>'.
				$y->item(0)->childNodes->item(0)->nodeValue.'</td></tr>';
               }
            }
        }
    }
  }

// 如果没找到则返回 "no suggestion"
if ($hint=="")
{
    $response="no suggestion";
}
else
{
    $response=$hint."</table>";
}

// 输出结果
echo $response;
?>
