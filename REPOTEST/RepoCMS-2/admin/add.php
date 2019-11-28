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
                   
<p>
  <?php
		if(!empty($_FILES)){
			if ($_FILES["file"]["error"] > 0){
			  switch($_FILES["file"]["error"]){
			  	case 1:
			  		echo "<b id='nono'>Error: The uploaded file exceeds the upload_max_filesize directive in php.ini</b><br>";
			  		break;
			  	case 2:
			  		echo "<b id='nono'>Error: The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.</b><br>";
			  		break;
			  	case 3:
			  		echo "<b id='nono'>Error: The uploaded file was only partially uploaded.</b><br>";
			  		break;
			  	case 4:
			  		echo "<b id='nono'>Error: No file was uploaded.</b><br>";
			  		break;
			  	case 6:
			  		echo "<b id='nono'>Error: Missing a temporary folder.</b><br>";
			  		break;
			  	case 7:
			  		echo "<b id='nono'>Error: Failed to write file to disk.</b><br>";
			  		break;
			  	case 8:
			  		echo "<b id='nono'>Error: A PHP extension stopped the file upload.</b><br>";
			  		break;
			  	default:
			  		echo "<b id='nono'>Unknown error occured.</b><br>";
			  }
			} else {
				echo 'Filename: ' . $_FILES['file']['name'] . '<br>';
				echo 'Type: ' . $_FILES['file']['type'] . '<br>';
				echo 'Size: ' . (round($_FILES['file']['size'] / 1024, 2)) . ' Kb<br><br>';
				if(array_search($_POST['algo'], hash_algos())===false){
					echo 'Unknown hashing algorithm requested.<br>';
				} else {
					echo 'Hashing Algorithm: '. $_POST['algo'] . '<br>';
					$hash = hash_file($_POST['algo'], $_FILES['file']['tmp_name']);
					echo 'Calculated hash: ' . $hash . '<br>';
					if($_POST['exphash']!=='none' && !empty($_POST['exphash'])){
						echo 'Expected hash: &nbsp;&nbsp;' . $_POST['exphash'] . '<br><br>';
						echo ($hash==$_POST['exphash'])? '<b id="ok">Hash matched expected value.</b>' : '<b id="nono">Hash did not match expected value.</b>';
						echo '<br>';
					}
				}
			}
			?>
		<br>
		</p>
<button onClick="document.location.reload(true)"><br>
	  <?php
		} else {
	?>
	</button>
<form action="" method="post" enctype="multipart/form-data">
	  <br>
		<?php
			foreach(hash_algos() as $algo){
				if($algo=='md5'){
					echo "<label><input type='hidden' name='algo' value='$algo' checked='checked'></label><br>";
				} else {
					//echo "<label><input type='hidden' name='algo' value='$algo'></label><br>";
				}
			}
		?>
	</form>
	<?php
		}
	?>
<p>Manage Adds:<p>
<?
if($_POST['Submit']){
$open = fopen("../add","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
echo "File updated.<br />"; 
?>
<p><button onClick="document.location.reload(true)">Back</button><P>
<?php
echo "File:<br />";
$file = file("../add");
foreach($file as $text) {
echo $text."<br />";
}			
}else{
$file = file("../add");
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
include('footer.php'); 
 }

if (isset($_SESSION['mod'])===TRUE)
{
include("header2.php");
echo "U need ADMIN rights";
include('footer.php'); 
}



}

ob_end_flush();


?>