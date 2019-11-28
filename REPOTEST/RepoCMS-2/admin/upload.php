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

<?php
$error_message[0] = "Unknown problem with upload.";
$error_message[1] = "Uploaded file too large (load_max_filesize).";
$error_message[2] = "Uploaded file too large (MAX_FILE_SIZE).";
$error_message[3] = "File was only partially uploaded.";
$error_message[4] = "Choose a file to upload.";

$upload_dir  = '../downloads/';
$num_files = count($_FILES['upload']['name']);

for ($i=0; $i < $num_files; $i++) {
    $upload_file = $upload_dir . urlencode(basename($_FILES['upload']['name'][$i]));

    if (!preg_match("/(deb)$/",$_FILES['upload']['name'][$i])) {
        print "I asked for an deb package";
        echo "<p><a href=\"upload.php\">GO BACK</a></p>";
    } else {
        if (@is_uploaded_file($_FILES['upload']['tmp_name'][$i])) {
            if (@move_uploaded_file($_FILES['upload']['tmp_name'][$i], 
                $upload_file)) {
                /* Great success... */
                echo "Succes";
                //$content = file_get_contents($upload_file);
                //print $content;
            } else {
                print $error_message[$_FILES['upload']['error'][$i]];
            }
        } else {
            print $error_message[$_FILES['upload']['error'][$i]];
        }    
    }
}
        echo "<p><a href=\"upload.php\">GO BACK</a></p>";
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
                   
<p>&nbsp;</p>
<p><b>Warning this overrides existing files!!</b></p>
<p>&nbsp;</p>
<p>Upload Completed deb packages:</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" value="" name="upload[]" multiple>
<button type="submit">Upload!</button>
</form>
<p>&nbsp;</p>
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
				echo $upload_file;	
				echo " uploaded";
						
			}
			?>
		<br>
		</p>
<button onClick="document.location.reload(true)"><br>
			<?php
		} else {
	?>
			
	        <?php
		}
	?>
</button>

						
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

<?php
$error_message[0] = "Unknown problem with upload.";
$error_message[1] = "Uploaded file too large (load_max_filesize).";
$error_message[2] = "Uploaded file too large (MAX_FILE_SIZE).";
$error_message[3] = "File was only partially uploaded.";
$error_message[4] = "Choose a file to upload.";

$upload_dir  = '../downloads/';
$num_files = count($_FILES['upload']['name']);

for ($i=0; $i < $num_files; $i++) {
    $upload_file = $upload_dir . urlencode(basename($_FILES['upload']['name'][$i]));

    if (!preg_match("/(deb)$/",$_FILES['upload']['name'][$i])) {
        print "I asked for an deb package";
        echo "<p><a href=\"upload.php\">GO BACK</a></p>";
    } else {
        if (@is_uploaded_file($_FILES['upload']['tmp_name'][$i])) {
            if (@move_uploaded_file($_FILES['upload']['tmp_name'][$i], 
                $upload_file)) {
                /* Great success... */
                echo "Succes";
                //$content = file_get_contents($upload_file);
                //print $content;
            } else {
                print $error_message[$_FILES['upload']['error'][$i]];
            }
        } else {
            print $error_message[$_FILES['upload']['error'][$i]];
        }    
    }
}
        echo "<p><a href=\"upload.php\">GO BACK</a></p>";
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
                   
<p>&nbsp;</p>
<p><b>Warning this overrides existing files!!</b></p>
<p>&nbsp;</p>
<p>Upload Completed deb packages:</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" value="" name="upload[]" multiple>
<button type="submit">Upload!</button>
</form>
<p>&nbsp;</p>
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
				echo $upload_file;	
				echo " uploaded";
						
			}
			?>
		<br>
		</p>
<button onClick="document.location.reload(true)"><br>
			<?php
		} else {
	?>
			
	        <?php
		}
	?>
</button>

						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

    
<?php
include('footer.php'); 

}

}
ob_end_flush();

?>
