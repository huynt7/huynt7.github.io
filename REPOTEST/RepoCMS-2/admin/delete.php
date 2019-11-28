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

<?php

$app = $_POST['app'];

unlink( "../downloads/" . $app);

echo "choose the app you want to delete";

echo "</br>";

$verzeichnis = "../downloads/";

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

  echo "<form action='delete.php' method='post'>";

echo "</br>";
echo "</br>";


  echo "<select name='app' size='10' multiple>";
  $zahl = 1;
foreach ($bilder as $zaehlen => $element) {
 if ($zaehlen  <= 9000) { 
  echo "<option value='" . $element[1] . "'>" . $element[1] . "</option>";
 }
}
  echo "</select>";
  
  echo " <br /> ";  
  
  echo "<input type='submit' value='GO'>";



include('footer.php'); 
 }

?>

<?php

if (isset($_SESSION['mod']) === TRUE)
{
include("header2.php");
echo "U need ADMIN rights";
include('footer.php'); 
}
}

ob_end_flush();

?>

</div>
</div>
</div>
