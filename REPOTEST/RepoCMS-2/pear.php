 <?php

require_once ("style/top.php");


require_once ("config.php");
session_start();
if (isset($_SESSION['username']))
{
//Start page 'Rebuild'
?>
<!--START OF HTML CODE-->
<style type="text/css">
<!--
@font-face 
{ 
font-family: "LCARSGTJ3";  
src: local("LCARSGTJ3"), 
url("../style/LCARSGTJ3.ttf") 
format("TrueType") 
}



body {
	font-family:LCARSGTJ3;/*Here we set the font family*/
	font-size:24px; /*Here we set the font size that will show on the page*/
	padding-top:10px;
	background-color: #000000;
	
}


#abc {float: center; width: 21%; color: red; background-color: #FFFFFF;}

.Stil1 {
	font-size: 24px;
	
}
a:link {
	color: #FF0000;
}
a:visited {
	color: #FF0000;
}
a:hover {
	color: #FF0000;
}
a:active {
	color: #FF0000;
}
-->
</style>
<div align="center">
<?php
echo "choose your app";
$verzeichnis = "downloads/";

$ordner = openDir($verzeichnis);

$bilder = array();
while ($file = readDir($ordner)) {
     if ($file != "." && $file != ".." && !is_dir($file)) {
          if (strstr($file, ".deb")) {
               $info = getImageSize($file);
               array_push($bilder, array(fileMtime($file) ,
            $file , $info[0] , $info[1]));
          }
     }
}
closeDir($ordner);

rsort($bilder);
  echo "<form action='bilder-loeschen.php' method='post'>";




  echo "<select name='app' size='10' multiple>";
  $zahl = 1;
foreach ($bilder as $zaehlen => $element) {
 if ($zaehlen  <= 9000) { 
  echo "<option value='" . $element[1] . "'>" . $element[1] . "</option>";
 }
}
  echo "</select>";
  
 echo " <br /> ";
 
 echo "write your description";
   echo " <br /> ";

  echo "<textarea name='description' cols='35' rows='35'>no description atm</textarea>";
  echo " <br /> ";
  
  echo "your homepage";
    echo " <br /> ";

  echo "<input type='text' name='dev' value='http://damarist.de'>";
  echo " <br /> ";
  
  echo "paypal donation";
    echo " <br /> ";

  echo "<input type='text' name='spon' value='info@damarist.de'>";
  
  


    echo "<input type='submit' value='GO'>";

  
  
  echo "</form>";
  }
require_once ("style/bottom.php");
  
  
?> 
</div>

