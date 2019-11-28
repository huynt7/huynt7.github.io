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

<div></div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Add User</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">Add User
					 <div class="clearfix"></div>
					 </div>
					 </div>
					 </div>
					

<h1>Add a new user</h1> 
<form action="user2.php" method="post"> 
    Username:<br /> 
    <input type="text" name="username" value="" /> 
    <br /><br /> 
    E-Mail:<br /> 
    <input type="text" name="email" value="" /> 
    <br /><br /> 
    Password:<br /> 
    <input type="password" name="password" value="" /> 
    <br /><br /> 


 <select name="game" size="1">
      <option value="admin">Admin</option>
      <option value="mod">Moderator</option>
    </select>

  <br /><br /> 
    <input type="submit" value="Register" /> 
</form>

<?php

require_once ('../config.php'); // include the database connection

$abfrage = "SELECT * FROM users ORDER BY id"; 
$ergebnis = mysql_query($abfrage); 
?> 
<form action="" method="post"><table border="1" align="center" overflow-x:Scroll> 
<?php  
    
	echo "<tr> <th> delete </th> <th> id </th> <th> username </th> <th> usertype </th> </tr>";

while($row = mysql_fetch_object($ergebnis)) 
    { 
    echo '<tr><td align="left"><input type="checkbox" name="t[]" value="'.$row->id.'"></td><td>'.$row->id.'.</td> <td>'.$row->username.'</td> <td>'.$row->usertype.'</td></tr>';
 
    }  
?> 
</table><center><input type="hidden" value="1" name="st"><input type="submit" value="Delete" name="submit"></center></form> 
<?php  
$delete = $_POST["t"]; 
$send = $_POST['st']; 
if ($send == 1) 
{ 
    $anzahl=count($delete); 
    for($i=0;$i<$anzahl;$i++) 
    { 

$deltext = "DELETE FROM users WHERE id = '".intval($delete[$i])."'";

        $del = mysql_query($deltext); 
    } 
    if($i == $anzahl) 
    { 
        echo '<head><meta http-equiv="refresh" content="0; url=user.php"></head>'; 
    } 
} 
mysql_close(); 

include("footer.php");
 }

if (isset($_SESSION['mod']) === TRUE)
{
include("header2.php");
echo "U need ADMIN rights";
include("footer.php");
}

}
ob_end_flush();

?>