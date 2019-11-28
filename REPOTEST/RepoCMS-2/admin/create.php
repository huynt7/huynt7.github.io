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
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Create Depiction</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div align="center">

                        <?php
  
 
  echo " <br /> ";

  
  echo " <br /> ";
  
  
  
echo "choose the app you want to create a new depiction";

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

  echo "<form action='eject-screens.php' method='post'>";




  echo "<select name='app' size='10' multiple>";
  $zahl = 1;
foreach ($bilder as $zaehlen => $element) {
 if ($zaehlen  <= 9000) { 
  echo "<option value='" . $element[1] . "'>" . $element[1] . "</option>";
 }
}
  echo "</select>";
  
  echo " <br /> "; 
  
   echo " <br /> ";
  
//  echo "enter the depiction filename you are using in the app CONTROL file(without extension)";
  
//    echo " <br /> ";
	
//	echo " <br /> ";

//  echo "<input type='text' name='appx' >";
//  echo " <br /> ";
  
// echo " <br /> ";
 
 echo "General";
 
   echo " <br /> ";

  echo "<textarea name='general' cols='100' rows='10'>no description atm</textarea>";
  echo " <br /> ";



  echo "Changes";
  
   echo " <br /> ";

  echo "<textarea name='changes' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  
 
  
  
  echo "Compatiblity";
  
   echo " <br /> ";

  echo "<textarea name='comp' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  
 
  
  

  

  
  

  
  

   
   
  
  echo "<input type='submit' value='GO'>";

  
  
  echo "</form>";

?>
                      </div>
                      <div class="clearfix"></div>
				  </div>
                    <div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Create Depiction with Video</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div align="center">
                        <?php
  
 
  echo " <br /> ";

  
  echo " <br /> ";
  
  
  
echo "choose the app you want to create a new depiction";

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

  echo "<form action='eject-screens1.php' method='post'>";




  echo "<select name='app' size='10' multiple>";
  $zahl = 1;
foreach ($bilder as $zaehlen => $element) {
 if ($zaehlen  <= 9000) { 
  echo "<option value='" . $element[1] . "'>" . $element[1] . "</option>";
 }
}
  echo "</select>";
  
  echo " <br /> "; 
  

  
 echo " <br /> ";
 
 echo "General";
 
   echo " <br /> ";

  echo "<textarea name='general' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";



  echo "Changes";
  
   echo " <br /> ";

  echo "<textarea name='changes' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  
 
  
  
  echo "Compatiblity";
  
   echo " <br /> ";

  echo "<textarea name='comp' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  
 
  
  echo "Video";
    echo " <br /> ";

  echo "<input type='text' name='video' value='Youtube ID'>";
  echo " <br /> ";
  

  
  

   
   
  
  echo "<input type='submit' value='GO'>";

  
  
  echo "</form>";

?>

                      </div>
                      <h1>&nbsp;</h1>
						<div class="clearfix"></div>
				  </div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  
		  
       
<?php 
include("footer.php");
 }
?>

<?php
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
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Create Depiction</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div align="center">
                        <?php
  
 
  echo " <br /> ";

  
  echo " <br /> ";
  
  
  
echo "choose the app you want to create a new depiction";

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

  echo "<form action='eject-screens.php' method='post'>";




  echo "<select name='app' size='10' multiple>";
  $zahl = 1;
foreach ($bilder as $zaehlen => $element) {
 if ($zaehlen  <= 9000) { 
  echo "<option value='" . $element[1] . "'>" . $element[1] . "</option>";
 }
}
  echo "</select>";
  
  echo " <br /> "; 
  
   echo " <br /> ";
  
//  echo "enter the depiction filename you are using in the app CONTROL file(without extension)";
  
//    echo " <br /> ";
	
//	echo " <br /> ";

//  echo "<input type='text' name='appx' >";
//  echo " <br /> ";
  
// echo " <br /> ";
 
 echo "General";
 
   echo " <br /> ";

  echo "<textarea name='general' cols='100' rows='10'>no description atm</textarea>";
  echo " <br /> ";



  echo "Changes";
  
   echo " <br /> ";

  echo "<textarea name='changes' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  
 
  
  
  echo "Compatiblity";
  
   echo " <br /> ";

  echo "<textarea name='comp' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  

   
  
  echo "<input type='submit' value='GO'>";

  
  
  echo "</form>";

?>
                      </div>
                      <div class="clearfix"></div>
				  </div>
                    <div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Create Depiction with Video</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div align="center">
                        <?php
  
 
  echo " <br /> ";

  
  echo " <br /> ";
  
  
  
echo "choose the app you want to create a new depiction";

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

  echo "<form action='eject-screens1.php' method='post'>";




  echo "<select name='app' size='10' multiple>";
  $zahl = 1;
foreach ($bilder as $zaehlen => $element) {
 if ($zaehlen  <= 9000) { 
  echo "<option value='" . $element[1] . "'>" . $element[1] . "</option>";
 }
}
  echo "</select>";
  
  echo " <br /> "; 
  

  
 echo " <br /> ";
 
 echo "General";
 
   echo " <br /> ";

  echo "<textarea name='general' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";



  echo "Changes";
  
   echo " <br /> ";

  echo "<textarea name='changes' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  
 
  
  
  echo "Compatiblity";
  
   echo " <br /> ";

  echo "<textarea name='comp' cols='35' rows='10'>no description atm</textarea>";
  echo " <br /> ";
  
 
  
  echo "Video";
    echo " <br /> ";

  echo "<input type='text' name='video' value='Youtube ID'>";
  echo " <br /> ";
  

   
  
  echo "<input type='submit' value='GO'>";

  
  
  echo "</form>";

?>
                      </div>
                      <h1>&nbsp;</h1>
						<div class="clearfix"></div>
				  </div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  
		  
       
<?php 
include("footer.php");

}

}

ob_end_flush();

?>
