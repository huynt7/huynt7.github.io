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
						<h2><i class="icon-picture"></i>Blank</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


<?php

$app = $_POST['app'];
       
	
//$app = "test";	
      
$app1 = "_1.png";
$app2 = "_2.png";
$app3 = "_3.png";
$app4 = "_4.png";
$app5 = "_5.png";
$app6 = "_6.png";

	if ($_FILES['picThumbnail1']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail1']['name']);
		if (move_uploaded_file($_FILES['picThumbnail1']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail1 = $_FILES['picThumbnail1']['name'];
					$sThumbnail1 = $name1.$full.$sThumbnail1;
					
					$sFileName1 = strtolower(($sThumbnail1));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail1']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail1']['name']), ($sUploadDir.$app.$app1));
						chmod($sUploadDir.$app.$app1, 0777);
		echo "file uploaded successfully";

echo $name1;
echo $full;
		
		}
	}
	
		if ($_FILES['picThumbnail2']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail2']['name']);
		if (move_uploaded_file($_FILES['picThumbnail2']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail2 = $_FILES['picThumbnail2']['name'];
					$sThumbnail2 = $name2.$full.$sThumbnail2;
					
					$sFileName2 = strtolower(($sThumbnail2));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail2']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail2']['name']), ($sUploadDir.$app.$app2));
						chmod($sUploadDir.$app.$app2, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
	
		if ($_FILES['picThumbnail3']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail3']['name']);
		if (move_uploaded_file($_FILES['picThumbnail3']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail3 = $_FILES['picThumbnail3']['name'];
					$sThumbnail3 = $name3.$full.$sThumbnail3;
					
					$sFileName3 = strtolower(($sThumbnail3));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail3']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail3']['name']), ($sUploadDir.$app.$app3));
						chmod($sUploadDir.$app.$app3, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
			if ($_FILES['picThumbnail4']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail4']['name']);
		if (move_uploaded_file($_FILES['picThumbnail4']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail4 = $_FILES['picThumbnail4']['name'];
					$sThumbnail4 = $name4.$full.$sThumbnail4;
					
					$sFileName4 = strtolower(($sThumbnail4));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail4']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail4']['name']), ($sUploadDir.$app.$app4));
						chmod($sUploadDir.$app.$app4, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
	
			if ($_FILES['picThumbnail5']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail5']['name']);
		if (move_uploaded_file($_FILES['picThumbnail5']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail5 = $_FILES['picThumbnail5']['name'];
					$sThumbnail5 = $name5.$full.$sThumbnail5;
					
					$sFileName5 = strtolower(($sThumbnail5));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail5']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail5']['name']), ($sUploadDir.$app.$app5));
						chmod($sUploadDir.$app.$app5, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
	
			if ($_FILES['picThumbnail6']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail6']['name']);
		if (move_uploaded_file($_FILES['picThumbnail6']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail6 = $_FILES['picThumbnail6']['name'];
					$sThumbnail6 = $name6.$full.$sThumbnail6;
					
					$sFileName6 = strtolower(($sThumbnail6));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail6']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail6']['name']), ($sUploadDir.$app.$app6));
						chmod($sUploadDir.$app.$app6, 0777);
		echo "file uploaded successfully";
		}
	}
   
					//	chmod("/html/images/$app.$app1", 0777);
					//	chmod("/html/images/$app.$app2", 0777);
					//	chmod("/html/images/$app.$app3", 0777);
					//	chmod("/html/images/$app.$app4", 0777);
					//	chmod("/html/images/$app.$app5", 0777);
					//	chmod("/html/images/$app.$app6", 0777);
					
					
					

				

  ?> 
    
    
    
    
    
  </span>
  </div>
  <form method="post" enctype="multipart/form-data" action="screenshot2.php">
</form>
  <div align="center"><span>
  <input type="submit" name="Submit9" value="back" onclick="location.href='index.php'" style="width:100px; height:50px;" />
  </span><span>
  <?php
   
      
 include("footer.php");

   }
   
   ?>
   
   <?php
   
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
						<h2><i class="icon-picture"></i>Blank</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


<?php

$app = $_POST['app'];
       
	
//$app = "test";	
      
$app1 = "_1.png";
$app2 = "_2.png";
$app3 = "_3.png";
$app4 = "_4.png";
$app5 = "_5.png";
$app6 = "_6.png";

	if ($_FILES['picThumbnail1']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail1']['name']);
		if (move_uploaded_file($_FILES['picThumbnail1']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail1 = $_FILES['picThumbnail1']['name'];
					$sThumbnail1 = $name1.$full.$sThumbnail1;
					
					$sFileName1 = strtolower(($sThumbnail1));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail1']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail1']['name']), ($sUploadDir.$app.$app1));
						chmod($sUploadDir.$app.$app1, 0777);
		echo "file uploaded successfully";

echo $name1;
echo $full;
		
		}
	}
	
		if ($_FILES['picThumbnail2']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail2']['name']);
		if (move_uploaded_file($_FILES['picThumbnail2']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail2 = $_FILES['picThumbnail2']['name'];
					$sThumbnail2 = $name2.$full.$sThumbnail2;
					
					$sFileName2 = strtolower(($sThumbnail2));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail2']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail2']['name']), ($sUploadDir.$app.$app2));
						chmod($sUploadDir.$app.$app2, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
	
		if ($_FILES['picThumbnail3']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail3']['name']);
		if (move_uploaded_file($_FILES['picThumbnail3']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail3 = $_FILES['picThumbnail3']['name'];
					$sThumbnail3 = $name3.$full.$sThumbnail3;
					
					$sFileName3 = strtolower(($sThumbnail3));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail3']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail3']['name']), ($sUploadDir.$app.$app3));
						chmod($sUploadDir.$app.$app3, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
			if ($_FILES['picThumbnail4']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail4']['name']);
		if (move_uploaded_file($_FILES['picThumbnail4']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail4 = $_FILES['picThumbnail4']['name'];
					$sThumbnail4 = $name4.$full.$sThumbnail4;
					
					$sFileName4 = strtolower(($sThumbnail4));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail4']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail4']['name']), ($sUploadDir.$app.$app4));
						chmod($sUploadDir.$app.$app4, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
	
			if ($_FILES['picThumbnail5']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail5']['name']);
		if (move_uploaded_file($_FILES['picThumbnail5']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail5 = $_FILES['picThumbnail5']['name'];
					$sThumbnail5 = $name5.$full.$sThumbnail5;
					
					$sFileName5 = strtolower(($sThumbnail5));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail5']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail5']['name']), ($sUploadDir.$app.$app5));
						chmod($sUploadDir.$app.$app5, 0777);
		echo "file uploaded successfully";
		}
	}
	
	
	
			if ($_FILES['picThumbnail6']['name'] != "")
	{
		$sUploadDir = '../html/_ss/';
		$sUploadedFile = $sUploadDir . basename($_FILES['picThumbnail6']['name']);
		if (move_uploaded_file($_FILES['picThumbnail6']['tmp_name'], $sUploadedFile))
		{
		$sThumbnail6 = $_FILES['picThumbnail6']['name'];
					$sThumbnail6 = $name6.$full.$sThumbnail6;
					
					$sFileName6 = strtolower(($sThumbnail6));
					
					if (file_exists(($sUploadDir.$_FILES['picThumbnail6']['name'])))
						rename(($sUploadDir.$_FILES['picThumbnail6']['name']), ($sUploadDir.$app.$app6));
						chmod($sUploadDir.$app.$app6, 0777);
		echo "file uploaded successfully";
		}
	}
   
					//	chmod("/html/images/$app.$app1", 0777);
					//	chmod("/html/images/$app.$app2", 0777);
					//	chmod("/html/images/$app.$app3", 0777);
					//	chmod("/html/images/$app.$app4", 0777);
					//	chmod("/html/images/$app.$app5", 0777);
					//	chmod("/html/images/$app.$app6", 0777);
					
					
					

				

  ?> 
    
    
    
    
    
  </span>
  </div>
  <form method="post" enctype="multipart/form-data" action="screenshot2.php">
</form>
  <div align="center"><span>
  <input type="submit" name="Submit9" value="back" onclick="location.href='index.php'" style="width:100px; height:50px;" />
  </span><span>
  <?php
   
      
 include("footer.php");

   }
   
}
ob_end_flush();


?>