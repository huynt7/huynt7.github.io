<?php 
ob_start();
error_reporting(0);
session_start();

require_once ("../config.php");

if (!isset ($_SESSION['mod']) && !isset($_SESSION['admin'])) {

header("Location: login.php");

}

else

{

if (isset($_SESSION['admin']) === TRUE)
{
include("header.php");

?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>About</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">Welcome at the Cydia repo manager Content Manager System
					 <div class="clearfix"></div>

<?php	
									
$directory = "../downloads/";
if (glob($directory . "*.deb") != false)
{
 $filecount = count(glob($directory . "*.deb"));
 
if($filecount<500){

echo "</br>";
echo "U R hosting: ";
echo $filecount;
echo " deb files";
}
else
{

echo "<br>";
echo "!!! Warning !!!";
echo "</br>";
 echo "You are hosting more than 500 deb files";
echo "</br>";
echo "This can cause problems";
echo "</br>";
echo "with the Packages script";
echo "</br>";
echo "please use a vserver and ";
echo "</br>";
echo "server version of the cms!!!";
}

}

?>

<?php	
									
$directory = "../premium/downloads/";
if (glob($directory . "*.deb") != false)
{
 $filecount = count(glob($directory . "*.deb"));
 
if($filecount<500){

echo "</br>";
echo "U R hosting: ";
echo $filecount;
echo " Premium deb files";
}
else
{

echo "<br>";
echo "!!! Warning !!!";
echo "</br>";
 echo "You are hosting more than 500 deb files";
echo "</br>";
echo "This can cause problems";
echo "</br>";
echo "with the Packages script";
echo "</br>";
echo "please use a vserver and ";
echo "</br>";
echo "server version of the cms!!!";
}

}

?>


				  </div>
                    <div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Visitors</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <?php

include "../config.php";

$today = date("Y-m-d");



$query = "DELETE FROM protect WHERE validate <'$today'";
mysql_query($query) ;


$result = mysql_query("SELECT * FROM visitor ORDER BY dldate DESC Limit 5");

//echo "<marquee height=340 direction=up scrolldelay=500>";
while($row = mysql_fetch_array($result)) {

$trimed1 = str_replace("downloads/", "", $row[filename]);
$trimed2 = str_replace(".deb", "", $trimed1);

echo '<u><b>Visitors:</u></b>';

echo "</br>";

echo '<tr><td> '.$row[stats].' </td> </tr> <br> </br>';

echo "</br>";   

}
	 
include "../config.php";

   $query = "select count(*) from visitor2 WHERE dldate >'".$today."'";

   $result = mysql_query($query) or die ("MySQL-Fehler: " . mysql_error());
   
   $anzahl = mysql_result($result,0);
echo "</br>";
echo $today;
echo "</br>";
echo '<u><b>Daily Visitors:</u></b>';

echo "</br>";   

echo $anzahl;


?>
						<h1>&nbsp;</h1>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  

		  
       
<?php 
include('footer.php');
 }

if (isset($_SESSION['mod']) === TRUE)
{
include("header2.php");
?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>About</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">Welcome at the Cydia repo manager Content Manager System
					 <div class="clearfix"></div>

<?php	
									
$directory = "../downloads/";
if (glob($directory . "*.deb") != false)
{
 $filecount = count(glob($directory . "*.deb"));
 
if($filecount<500){

echo "</br>";
echo "U R hosting: ";
echo $filecount;
echo " deb files";
}
else
{

echo "<br>";
echo "!!! Warning !!!";
echo "</br>";
 echo "You are hosting more than 500 deb files";
echo "</br>";
echo "This can cause problems";
echo "</br>";
echo "with the Packages script";
echo "</br>";
echo "please use a vserver and ";
echo "</br>";
echo "server version of the cms!!!";
}

}

?>

<?php	
									
$directory = "../premium/downloads/";
if (glob($directory . "*.deb") != false)
{
 $filecount = count(glob($directory . "*.deb"));
 
if($filecount<500){

echo "</br>";
echo "U R hosting: ";
echo $filecount;
echo " Premium deb files";
}
else
{

echo "<br>";
echo "!!! Warning !!!";
echo "</br>";
 echo "You are hosting more than 500 deb files";
echo "</br>";
echo "This can cause problems";
echo "</br>";
echo "with the Packages script";
echo "</br>";
echo "please use a vserver and ";
echo "</br>";
echo "server version of the cms!!!";
}

}

?>


				  </div>
                    <div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Visitors</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <?php

include "../config.php";

$today = date("Y-m-d");



$query = "DELETE FROM protect WHERE validate <'$today'";
mysql_query($query) ;


$result = mysql_query("SELECT * FROM visitor ORDER BY dldate DESC Limit 5");

//echo "<marquee height=340 direction=up scrolldelay=500>";
while($row = mysql_fetch_array($result)) {

$trimed1 = str_replace("downloads/", "", $row[filename]);
$trimed2 = str_replace(".deb", "", $trimed1);

echo '<u><b>Visitors:</u></b>';

echo "</br>";

echo '<tr><td> '.$row[stats].' </td> </tr> <br> </br>';

echo "</br>";   

}
	 
include "../config.php";

   $query = "select count(*) from visitor2 WHERE dldate >'".$today."'";

   $result = mysql_query($query) or die ("MySQL-Fehler: " . mysql_error());
   
   $anzahl = mysql_result($result,0);
echo "</br>";
echo $today;
echo "</br>";
echo '<u><b>Daily Visitors:</u></b>';

echo "</br>";   

echo $anzahl;


?>
						<h1>&nbsp;</h1>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  

		  
       
<?php
include('footer.php');
}

}
ob_end_flush();


?>