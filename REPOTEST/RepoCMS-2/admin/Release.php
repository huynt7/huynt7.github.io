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
						<h2><i class="icon-picture"></i>Release</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                   


<p>Edit Release file:<p>

<?php

echo "Your Cydia Repo Icon (230*230px)";
echo "</br>";


echo '<img src="../CydiaIcon.png" alt="CydiaIcon.png" width="100" height="100" border="0" />';
echo "</br>";

echo "</br>";
echo "Your Depiction Banner";
echo "</br>";


echo '<img src="../html/_img/nzb.png" alt="nzb.png" width="150" height="100" border="0" />';


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
}

?>
<?php
echo "</br>";
echo "</br>";
echo "Edit your Release file";
?>

<?
if($_POST['Submit']){
$open = fopen("../Release","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
echo "File updated.<br />"; 
?>
<p><button onClick="document.location.reload(true)">Back</button><P>
<?php
echo "File:<br />";
$file = file("../Release");
foreach($file as $text) {
echo $text."<br />";
}			
}else{
$file = file("../Release");
echo "<form action=\"".$PHP_SELF."\" method=\"post\">";
echo "<textarea Name=\"update\" cols=\"50\" rows=\"12\">";
foreach($file as $text) {
echo $text;
} 
echo "</textarea>";
echo "<br />";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
}
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
echo "U need ADMIN rights";
include("footer.php");
}

}
ob_end_flush();

?>