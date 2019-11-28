<?php

include('header.php');

?>

		  <div class="row-fluid">
			  <div class="span12 center login-header">
				  <h2 align="left">Repo Admin</h2>
				  <p align="left">&nbsp;</p>
			  </div>
				
		    <div align="left">
		      <!--/span-->
            </div>
		  </div>
			
		  <div align="left">
		    <!--/row-->
			    
	        </div>
			<div align="left">
		  <h1><i class="icon-info-sign"></i>Installer 1 - 3 
		  </h1>
		  <p align="left">&nbsp;</p>
			</div>
<div class="box-content">

			<div align="left">


<form method="post" target="_self">
  <p align="left">Please input your mySQL database settings here:    </p>
  <p align="left">Host Name: <input type="text" name="host" />
    <br />
    MYSQL User: <input type="text" name="user" />
      <br />
    MYSQL Password: <input type="text" name="pass" />
      <br />
    Database name: <input type="text" name="database" />
      <br />
    Click here, when you have made sure all settings are correct:
    <input type="submit" name="s" value="Go!" />
  </p>
</form>


</div>
</div>



  <div align="left">
    <?php
$host = $_POST['host'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$database = $_POST['database'];
$s = $_POST['s'];
if (isset($s)) {
	$text = "<?php
".'$msqlhost'." = '$host'; //Hostname of database
".'$msqluser'." = '$user';                   //User of database
".'$msqlpass'." = '$pass';           //Password of user/database
".'$msqldbnm'." = '$database';              //Database name
mysql_connect (".'$msqlhost, $msqluser, $msqlpass'.")       or die(mysql_error());

mysql_select_db (".'$msqldbnm'.")                           or die(mysql_error());
?>";

	
	$f = fopen('../config.php', 'w') or die ("Unable to create file. Check folder permissions. If problem persists, contact system administrator."); 
	fwrite($f, $text) or die ("Error with editing created file. Please delete all config files generated and try again.");
	fclose($f) or die ("Error with closing edit. PLease refresh page and try again.");
	echo ("If you see this message, your config file has been created. Next step: <a href=".'"'."index_1.php".'"'.">here</a>.");
	
}

include('footer.php');


?>

