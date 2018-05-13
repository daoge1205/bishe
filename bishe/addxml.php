<?php
 function CreateXml($title_value,$tags,$author_value,$body_value,$time_value,$view_num){       
                $xmlpath = "info.xml";  
                $dom = new DomDocument();  
                 
                // $dom->load($xmlpath);  
                // $tag = $dom->getElementsByTagName("title");  
                if (file_exists($xmlpath)) {  
                    # 如果文件存在，则进行追加  
                      
       
                    $dom->load($xmlpath);  
                    $newarticles = $dom->createElement('article');  
                    $articles = $dom->getElementsByTagName("page")->item(0);  //找到文件追加的位置  
                    $articles->appendChild($newarticles);                //进行文件追加  
      
                    $title = $dom->createElement('title');  
                    $title->appendChild($dom->createTextNode($title_value));  
                    $newarticles->appendChild($title);  
      
                    $author = $dom->createElement('author');  
                    $author->appendChild($dom->createTextNode($author_value));  
                    $newarticles->appendChild($author);  
      
                    $body = $dom->createElement('body');  
                    $body->appendChild($dom->createTextNode($body_value));  
                    $newarticles->appendChild($body);  
      
                    $tag = $dom->createElement('tag');  
                    $tag->appendChild($dom->createTextNode($tags));  
                    $newarticles->appendChild($tag);  
      
                    $time = $dom->createElement('time');  
                    $time->appendChild($dom->createTextNode($time_value));  
                    $newarticles->appendChild($time);  
      
                    
      
                    $dom->save($xmlpath);  
                }  
                else{  
                    #如果文件不存在，则进行文件写入  
                    //$dom = new DomDocument('1.0','utf-8');  
                    
                      
      
                    $page = $dom->createElement('page');  
                    $dom->appendChild($page);  
      
                    $articles = $dom->createElement('article');  
                    $page->appendChild($articles);  
      
                    $title = $dom->createElement('title');  
                    $title->appendChild($dom->createTextNode($title_value));  
                    $articles->appendChild($title);  
      
                    $author = $dom->createElement('author');  
                    $author->appendChild($dom->createTextNode($author_value));  
                    $articles->appendChild($author);  
      
                    $body = $dom->createElement('body');  
                    $body->appendChild($dom->createTextNode($body_value));  
                    $articles->appendChild($body);  
      
                    $tag = $dom->createElement('tag');  
                    $tag->appendChild($dom->createTextNode($tags));  
                    $articles->appendChild($tag);  
      
                    $time = $dom->createElement('time');  
                    $time->appendChild($dom->createTextNode($time_value));  
                    $articles->appendChild($time);  
      
                    $view = $dom->createElement('view');  
                    $view->appendChild($dom->createTextNode($view_num));  
                    $articles->appendChild($view);  
      
                    $dom->save($xmlpath);  
                }  
         }
	echo $_POST['book'];
?>  
