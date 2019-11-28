 <?php

include "../subfolder.php";

$filename = mysql_real_escape_string($_GET['file']);

$path = $_SERVER['DOCUMENT_ROOT'].$subx;         

echo $path;


?>