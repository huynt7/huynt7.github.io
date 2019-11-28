<?php 
ob_start();
error_reporting(0);
session_start();

require_once ("../config.php");

if (!isset ($_SESSION['mod']) && !isset($_SESSION['admin'])) {

echo "please login";

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
						<a href="#">Blank</a>
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-picture"></i>Statistics</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?PHP

include "../config.php";


$result = mysql_query("SELECT * FROM download ORDER BY dldate DESC");
?>

<?PHP
//echo "<div style='float:left; overflow-x:Scroll; width:920px;'>";
echo "<table border='1' align='center' overflow-x:Scroll>";
echo "<tr> <th> Deb </th> <th> Downloads </th> <th> Views </th> <th> Last downloaded </th> <th> IP </th> <th> Device <th> Firmware </th> <th> Agent </th> <th> udid </th> <th> user </th> <th> email </th></tr>";

while($row = mysql_fetch_array($result)) {

	
		

$sql="SELECT user, email FROM protect WHERE udid = '$row[udid]'";
     $res=mysql_query($sql) or die(mysql_error()); 
     $daten=mysql_fetch_array($res);  
	 

if (isset($daten[user])) {

}
else
{
$daten[user] = "unknown";
}

if (isset($daten[email])) {
}
else
{
$daten[email] = "unknown";
}


$trimed1 = str_replace("downloads/", "", $row[filename]);
$trimed2 = str_replace(".deb", "", $trimed1);

echo '<tr> <td> '.$trimed2.' </td> <td> '.$row[stats].' </td> <td> '.$row[views].' </td> <td> '.$row[dldate].' </td> <td> <a href="http://www.utrace.de/ip-adresse/'.$row[ip].'" target="_blank">'.$row[ip].'</a> </td> <td> '.$row[device].' </td> <td> '.$row[firmware].' </td> <td> '.$row[agent].' </td> <td> '.$row[udid].' </td> <td> '.$daten[user].' </td> <td> '.$daten[email].' </td></tr>';

}

echo "</table>"
//echo "</div>";

?>
						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

    
<?php 
include("footer.php");
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
						<a href="#">Blank</a>
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-picture"></i>Statistics</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<?PHP

include "../config.php";


$result = mysql_query("SELECT * FROM download ORDER BY dldate DESC");
?>

<?PHP
//echo "<div style='float:left; overflow-x:Scroll; width:920px;'>";
echo "<table border='1' align='center' overflow-x:Scroll>";
echo "<tr> <th> Deb </th> <th> Downloads </th> <th> Views </th> <th> Last downloaded </th> <th> IP </th> <th> Device <th> Firmware </th> <th> Agent </th> <th> udid </th> <th> user </th> <th> email </th></tr>";

while($row = mysql_fetch_array($result)) {

	
		

$sql="SELECT user, email FROM protect WHERE udid = '$row[udid]'";
     $res=mysql_query($sql) or die(mysql_error()); 
     $daten=mysql_fetch_array($res);  
	 

if (isset($daten[user])) {

}
else
{
$daten[user] = "unknown";
}

if (isset($daten[email])) {
}
else
{
$daten[email] = "unknown";
}


$trimed1 = str_replace("downloads/", "", $row[filename]);
$trimed2 = str_replace(".deb", "", $trimed1);

echo '<tr> <td> '.$trimed2.' </td> <td> '.$row[stats].' </td> <td> '.$row[views].' </td> <td> '.$row[dldate].' </td> <td> <a href="http://www.utrace.de/ip-adresse/'.$row[ip].'" target="_blank">'.$row[ip].'</a> </td> <td> '.$row[device].' </td> <td> '.$row[firmware].' </td> <td> '.$row[agent].' </td> <td> '.$row[udid].' </td> <td> '.$daten[user].' </td> <td> '.$daten[email].' </td></tr>';

}

echo "</table>"
//echo "</div>";

?>
						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

    
<?php 
include("footer.php"); 
}


}
ob_end_flush();

?>
