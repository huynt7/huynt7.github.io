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


echo "Your Cydia Repo Icon";
echo "</br>";


echo '<img src="../CydiaIcon.png" alt="CydiaIcon.png" width="100" height="100" border="0" />';

echo "</br>";
echo "Your Depiction Banner";
echo "</br>";


echo '<img src="../html/_img/nzb.png" alt="nzb.png" width="100" height="100" border="0" />';


echo "</br>";
echo "</br>";

?>
                   

<form action="#" method="post" enctype="multipart/form-data">
  <p>
    <select name="game" size="1">
      <option value="../">CydiaRepoIcon</option>
      <option value="../html/_img">DepictionBanner</option>
    </select>
  </p>

  <p>choose your file  !!<br>
    <input name="datei" type="file" size="50" maxlength="100000">
  </p>
  <p>
  <input type="submit" name="submit" value="upload">
  <input type="reset" value="abort">
</p>
  <p>
  </form>
    <!-- END FIRST HTML -->




    <?php

if($_POST['submit'] == "upload") {
$game = $_POST["game"];
  $auswahl = $_POST["auswahl"];

if($game == "../")
   {
$name = "../CydiaIcon.png";
   }
else
{
$name = "../html/_img/nzb.png";
}


move_uploaded_file($_FILES['datei']['tmp_name'], "./$name");



if(file_exists($name)) {


	echo "file uploaded";
	
     } 
	 
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