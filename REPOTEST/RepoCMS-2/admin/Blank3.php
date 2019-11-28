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
						<h2><i class="icon-picture"></i>	
						
						<?php	
									
$directory = "../downloads/";
if (glob($directory . "*.deb") != false)
{
 $filecount = count(glob($directory . "*.deb"));
 
echo "U R hosting: ";
echo $filecount;
echo " deb files";
}
else
{
 echo 0;
}


?>

</h2>
						<div class="box-icon">
							<p><a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>						  </p>
							<p>&nbsp;    </p>
						</div>
					</div>
					<div class="box-content">
						<?php include('../depict/writter.php'); ?>
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
						<h2><i class="icon-picture"></i>	
						
						<?php	
									
$directory = "../downloads/";
if (glob($directory . "*.deb") != false)
{
 $filecount = count(glob($directory . "*.deb"));
 
echo "U R hosting: ";
echo $filecount;
echo " deb files";
}
else
{
 echo 0;
}


?>

</h2>
						<div class="box-icon">
							<p><a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>						  </p>
							<p>&nbsp;    </p>
						</div>
					</div>
					<div class="box-content">
						<?php include('../depict/writter.php'); ?>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
include('footer.php'); 
}

}

ob_end_flush();


?>
