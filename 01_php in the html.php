 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>01_php in the html</title>
 </head>
 <body>

 <h1>this is html!</h1>

 <?php
echo "hello,this is php";
echo "改行　nl2br|inserts HTML line breaks before all newlines in a string";
echo nl2br("foo isn't/n bar"); 
echo '<pre>';
echo nl2br("foo isn't\n bar"); 


?>
 </body>
 </html>