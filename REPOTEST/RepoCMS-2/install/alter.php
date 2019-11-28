<?php 

ob_start();



session_start();

include('header.php'); 



include('../config.php');



//mysql_query("ALTER TABLE  `protect` ADD COLUMN `id` int(10) NOT NULL")
	

 //or die("!!!something went wrong, check your mySQL entries!!!"); 



//echo "alter id 1 created!";


//mysql_query("ALTER TABLE  protect drop primary key")


//or die("!!!something went wrong, check your mySQL entries!!!"); 



//echo "alter id 2 created!";

mysql_query("alter table protect add ID integer NOT NULL auto_increment primary key;")


 or die("!!!something went wrong, check your mySQL entries!!!"); 



echo "alter id 3 created!";



?>