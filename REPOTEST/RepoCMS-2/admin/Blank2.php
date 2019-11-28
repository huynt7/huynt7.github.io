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
						<h2><i class="icon-picture"></i>Rebuilding Packages files</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					
					
				  <div class="box-content">
						<center><iframe src="../downloads/test.php" width="200" height="200" style="background-color:#FFFFFF" name="SELFHTML_in_a_box">
  <p>Ihr Browser kann leider keine eingebetteten Frames anzeigen:
  Sie k&ouml;nnen die eingebettete Seite &uuml;ber den folgenden Verweis
  aufrufen: <a href="../downloads/test.php">SELFHTML</a></p>
</iframe>
		            <p>&nbsp;</p>
						
				  </div>
				</div><!--/span-->
			
			</div><!--/row-->

    
<?php 
include('footer.php');
 }

if (isset($_SESSION['mod'])===TRUE)
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
						<h2><i class="icon-picture"></i>Rebuilding Packages files</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					
					
				  <div class="box-content">
						<center><iframe src="../downloads/test.php" width="200" height="200" style="background-color:#FFFFFF" name="SELFHTML_in_a_box">
  <p>Ihr Browser kann leider keine eingebetteten Frames anzeigen:
  Sie k&ouml;nnen die eingebettete Seite &uuml;ber den folgenden Verweis
  aufrufen: <a href="../downloads/test.php">SELFHTML</a></p>
</iframe>
		            <p>&nbsp;</p>
						
				  </div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
include('footer.php'); 
}

}

ob_end_flush();


?>