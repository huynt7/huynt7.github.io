<?php 

ob_start();



session_start();

include('header.php'); 



include('../config.php');



?>





<div></div>

			

			

			<div class="row-fluid">

				<div class="box span12">

					<div class="box-header well">

						<h2><i class="icon-info-sign"></i>Installer 2 - 3 </h2>

						<div class="box-icon">

							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>

							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>

							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>

					</div>

					<div class="box-content">

					Welcome at the Cydia Repo CMS Installer

					 <div class="clearfix"></div>



                      <?php




mysql_query("CREATE TABLE `protect` (

      `id` int(11) NOT NULL AUTO_INCREMENT,

	`user` varchar(64) NOT NULL default '',

        `email` TEXT NOT NULL,

        `validate` varchar(20) NOT NULL default '',

          `udid` varchar(60) NOT NULL default '',

      	`entry` DATETIME,

       
        PRIMARY KEY  (`id`)

        

			) ENGINE = MYISAM")

	

 or die("!!!something went wrong, check your mySQL entries!!!"); 



echo "Table Protect created!";







mysql_query("CREATE TABLE `users` (

	`username` varchar(64) NOT NULL default '',

        `email` TEXT NOT NULL,

        `salt` varchar(16) NOT NULL default '',

          `id` int(11) NOT NULL AUTO_INCREMENT,

      	`password` varchar(64) NOT NULL,

        `usertype` varchar(40) NOT NULL,

       UNIQUE KEY `username` (`username`),

        PRIMARY KEY  (`id`)

        

			) ENGINE = MYISAM")

	

 or die("!!!something went wrong, check your mySQL entries!!!"); 



echo "Table USER created!";





mysql_query("CREATE TABLE `download` (

			`filename` varchar(255) NOT NULL,

			`dldate` DATETIME,

			`stats` int(11) NOT NULL,
			
			`views` int(11) NOT NULL,

			`ip` varchar(20) NOT NULL default '',
			
			`udid` varchar(60) NOT NULL default '',

			`agent` varchar(250) NOT NULL default '',

			`device` varchar(20) NOT NULL default '',

			`firmware` varchar(20) NOT NULL default '',

			PRIMARY KEY  (`filename`)

			) ENGINE = MYISAM")

 or die("!!!something went wrong, check your mySQL entries!!!");  



echo "Table DOWNLOAD created!";

			

echo "</br>";			

			

mysql_query("CREATE TABLE `visitor` (

			`filename` varchar(255) NOT NULL,

			`dldate` DATETIME,

			`stats` int(11) NOT NULL,

			`ip` varchar(20) NOT NULL default '',

			`agent` varchar(250) NOT NULL default '',

			`device` varchar(20) NOT NULL default '',

			`firmware` varchar(20) NOT NULL default '',

			PRIMARY KEY  (`filename`)

			) ENGINE = MYISAM")

 or die("!!!something went wrong, check your mySQL entries!!!");  



echo "Table VISITOR created!";

			

echo "</br>";			

			

mysql_query("CREATE TABLE `visitor2` (

			`filename` varchar(255) NOT NULL,

			`dldate` DATETIME,

			`stats` int(11) NOT NULL,

			`ip` varchar(20) NOT NULL default '',

			`agent` varchar(250) NOT NULL default '',

			`device` varchar(20) NOT NULL default '',

			`firmware` varchar(20) NOT NULL default '',

			PRIMARY KEY  (`ip`)

			) ENGINE = MYISAM")

 or die("!!!something went wrong, check your mySQL entries!!!");  



echo "Table VISITOR2 created!";



echo "</br>";

		

echo "If you can see this, then this step has been sucsesfully completed";

echo "</br>";

echo "Click <a href=".'"'."index_2.php".'"'.">here</a> to go to the next step.";





include('footer.php');



?>