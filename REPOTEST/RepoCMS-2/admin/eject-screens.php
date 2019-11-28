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
                    <?php
					
					include("../configure.php");

$app = $_POST['app'];
$desc = $_POST['description'];
//$dev = $_POST['dev'];
//$spon = $_POST['spon'];
$appx = $_POST['appx'];
$general = $_POST['general'];
$changes = $_POST['changes'];
$comp = $_POST['comp'];

       
	
//$app = "test";	
      
$app1 = "_1.png";
$app2 = "_2.png";
$app3 = "_3.png";
$app4 = "_4.png";
$app5 = "_5.png";
$app6 = "_6.png";

	if ($_FILES['picThumbnail1']['name'] != "")
	{
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
					
					
					
$fh = @fopen("../html/$app.php", "w+");

chmod("$app.php", 0777);

if($fh)
{
    @fwrite($fh, '<?php

session_start();
$counter_name = "'.$app.'.txt";
 
include "../config.php";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);

$q = "INSERT INTO download (filename, views) VALUES
		(\'downloads/'.$app.'\', 1)";

$statresult = mysql_query($q);

}
 
// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);



// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION[\''.$app.'\'])){
  $_SESSION[\''.$app.'\']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 

$q = "UPDATE download SET views = views + 1 WHERE filename = \'downloads/'.$app.'\'";

$statresult = mysql_query($q);

}

?>
	
	
	<!DOCTYPE html>
<html>
<head>
	<title>'.$app.'</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
	<link rel="stylesheet" href="_css/style.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>
<body>
	

	

	
<!-- MAIN PAGE -->
<div data-role="page" id="front" class="depiction" data-title="Details">
<center>
  <br>
  <img src="_img/nzb.png" width="290" height="150"></center>
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
		
		
		 <!-- Begin BidVertiser code -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- End BidVertiser code -->
		
		
			<li data-role="list-divider">General</li>
		    <li><a href="#info" target="_blank"><img src="_img/info.svg" alt="Info" class="ui-li-icon">Info</a></li>
		    <li><a href="#screens" target="_blank"><img src="_img/screens.svg" alt="Screenshots" class="ui-li-icon">Screenshots</a></li>
            <li><a href="#stats" target="_blank"><img src="_img/stats.svg" alt="Statistics" class="ui-li-icon">Statistics</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Help</li>			
		    <li><a href="#instructions" target="_blank"><img src="_img/nb.svg" alt="instructions" class="ui-li-icon">Info and Help</a></li>
		    <li><a href="#faq" target="_blank"><img src="_img/question.svg" alt="FAQ" class="ui-li-icon">FAQ</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">About</li>			
		    <li><a href="#authors" target="_blank"><img src="_img/profile.svg" alt="Authors" class="ui-li-icon ui-corner-none">Contact Repo</a></li>
		    <li><a href="#contribute" target="_blank"><img src="_img/heart.svg" alt="Contribute" class="ui-li-icon">Social</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Support us. Thanks:)</li>
			<li>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<table>
					<tr><td><select name="os0">
						<option>Amount</option>
						<option value="2,50">&euro; 2,50</option>
                        <option value="5,00">&euro; 5,00</option>
                        <option value="7,50">&euro; 7,50</option>
                        <option value="10,00">&euro; 10,00</option>
                        <option value="15,00">&euro; 15,00</option>
                        <option value="20,00">&euro; 20,00</option>
                        <option value="20,00">&euro; 25,00</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="hosted_button_id" value="9TCAXQBKN84J8">
					<input id="ppimg" type="image" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<a id="ppcss" data-role="button" data-theme="e"><i>Donate Now</i></a>
					<img id="pppretty" width="250px" src="_img/paypal.jpg" border="0" alt="PayPal Acceptance Mark">
				</form>
						</li>
		</ul>
	  <p style="text-align:center;padding-bottom: 5px;padding-top: 0px;text-shadow: none;"><span style="font-size: 12px;">
	  
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	  
              Your IP:<?php
            echo $ip  =$_SERVER[\'REMOTE_ADDR\'];
          ?>
           <br>Your Device is a 
          <?php
            echo $device = $_SERVER["HTTP_X_MACHINE"];
          ?>
          <br>Running on iOS 
          <?php
            $text =  $_SERVER["HTTP_USER_AGENT"]; 
            preg_match(\'/OS ([_0-9]+)/\', $text, $res);
            $version = isset($res[1])?str_replace(\'_\',\'.\',$res[1]):null;
            echo $version;
          ?>
<br>
<a href="http://damarist.de" target="_blank">POWERED BY Repo CMS</a>
</span></p>
	  </div>
</div>




<!-- INFO -->
<div data-role="page" id="info" class="depiction" data-title="General">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">General info:</li>
			<li>
				<p style="word-wrap: break-word;"></p>
          <p>'.$general.'</p>
          <p></p>
				
			</li>
			<li data-role="list-divider">Changes:</li>
			<li>
				<p style="word-wrap: break-word;"></p>
          <p>'.$changes.'</p>
          <p></p>
			</li>
			<li data-role="list-divider">Compatibility:</li>
			<li>
				<p style="word-wrap: break-word;"></p>
          <p>'.$comp.'</p>
          <p></p>
			</li>
		</ul>
        </div>
</div>





<!-- SCREENSHOTS -->
<div data-role="page" id="screens" class="depiction" data-title="Screenshots">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

	<div data-role="content">
		<center>
        <img class="ss" src="_ss/'.$app.'_1.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_2.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_3.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_4.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_5.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_6.png" width="90%" />
		</center>
        </div>
</div>





<!-- STATISTICS -->
<div data-role="page" id="stats" class="depiction" data-title="Statistics">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

	<div data-role="content">
	    <ul data-role="listview" data-inset="true">
		    <li>
			  <center>
			  Downloads:
<?php

include "../config.php";

$sql="SELECT filename, stats, dldate FROM download WHERE filename = \'downloads/'.$app.'\' ";
     $res=mysql_query($sql) or die(mysql_error()); 
     $daten=mysql_fetch_array($res);  
	 
      echo  $daten[\'stats\'] . "<BR><BR>Last Download: "; 
      echo  $daten[\'dldate\'] . "<BR><BR>Views: ";
	  echo  $counterVal;
?>
			  </center>
		    </li>
	      </ul>
        </div>
</div>




<!-- INSTRUCTIONS -->
<div data-role="page" id="instructions" class="depiction" data-title="Support">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			  <li data-role="list-divider">Support</li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Forum</h1>
				<p>Visit our forum for general support.</p>
			</a></li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Registration</h1>
				<p>To acces our forum you need to register, you can register from here.</p>
			</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
		  <li data-role="list-divider">Discussion</li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Thread</h1>
				<p>More instructions and pro tips</p>
				<p>Here you can discus ask anything about the repo, cydia, tweaks etc etc....</p>
			</a></li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Tools</h1>
				<p>Here you can find almost any tool you need for your iDevice<br>
				  <br>
				</p>
			</a></li>
		</ul>
        </div>
</div>





<!-- FAQ -->
<div data-role="page" id="faq" class="depiction" data-title="FAQ">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">FAQ</li>
			<li>
				<h1>Warning</h1>
				<p>Theres no way that damarist.de or damar1st.de is responsible for any damage both software and hardware, using the repo is at your own risk.</p>
			</li>
			<li>
				<h1>Our pollicy</h1>
				<p>If you like a tweak after trying it a while and you like it... <br>
				</p>
				<p>Consider to buy it!!</p>
			</li>
		</ul>
	</div>
</div>






<!-- AUTHORS -->
<div data-role="page" id="authors" class="depiction" data-title="Repo Manager">
    <div data-role="content">
        <ul data-role="listview" data-inset="true">
		<li>
			<img class="profilepic" src="_img/avatar_678.jpg">
			<h2>damar1st and iMart79</h2>
			<p>Admin, Repo Manager, iFreak etc etc...</p>
		</li>
		<li><a href="mailto:'.$spon.'" target="_blank"><img src="_img/mail.svg" alt="Info" class="ui-li-icon"> Questions?? Ask me.</a></li>
		<li><a href="'.$dev.'" target="_blank"><img src="_img/al.svg" alt="Info" class="ui-li-icon">'.$dev.'</a></li>
	</ul>            
    </div>
</div>





<!-- CONTRIBUTE -->
<div data-role="page" id="contribute" class="depiction" data-title="Social">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">We are Social</li>
            <li><a href="http://twitter.com/share?text=damar1st%20Cydia%20Repo&url=http://www.cydia.damarist.de" target="_blank"><img src="_img/twitter.svg" alt="Info" class="ui-li-icon">Tweet</a></li>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.damarist.de" target="_blank"><img src="_img/facebook.svg" alt="Info" class="ui-li-icon">Share with friends</a></li>
			</li>
		</ul>
        </div>
</div>




</body>
</html>');
 //   <input type="hidden" name="action" value="upload">
}
@fclose($fh);

				

  ?>
  
  
  </span>
<form method="post" enctype="multipart/form-data" action="screenshot2.php">
  <div align="center">
    <p>
      <span>
      <input type="hidden" name="app" value="<?php echo $app; ?>" />
      <span class="style1">Upload Screenshots:</span></span></p>
    <p>&nbsp;</p>
    <p><span><br />
      <input type="file" name="picThumbnail1">
      <br />
      <input type="file" name="picThumbnail2">
      <br />
      <input type="file" name="picThumbnail3">
      <br />
      <input type="file" name="picThumbnail4">
      <br />
      <input type="file" name="picThumbnail5">
      <br />
      <input type="file" name="picThumbnail6">
    </span></p>
    <p><span><br />
      
      <input type="submit" value="upload"> 
    </span><span>
    <input type="submit" name="Submit9" value="back" onclick="location.href='../admin/create.php'" style="width:50px; height:25px;" />
    </span></p>
    <p>&nbsp;</p>
  </div>
</form>
<span>
<div align="center"></div>
<?php
   
      
 
   
 
?>
  
  
  
					  <div class="clearfix"></div>
				  </div>
                    <div class="row-fluid">
				<div class="box span12">
				  <div class="box-header well">
					  <h2><i class="icon-info-sign"></i></h2>
					</div>
					<div class="box-content">
					  <div class="clearfix"></div>
					</div>
				</div>
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
                    <?php
					
					include("../configure.php");

$app = $_POST['app'];
$desc = $_POST['description'];
//$dev = $_POST['dev'];
//$spon = $_POST['spon'];
$appx = $_POST['appx'];
$general = $_POST['general'];
$changes = $_POST['changes'];
$comp = $_POST['comp'];

       
	
//$app = "test";	
      
$app1 = "_1.png";
$app2 = "_2.png";
$app3 = "_3.png";
$app4 = "_4.png";
$app5 = "_5.png";
$app6 = "_6.png";

	if ($_FILES['picThumbnail1']['name'] != "")
	{
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
		$sUploadDir = '_ss/';
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
					
					
					
$fh = @fopen("../html/$app.php", "w+");

chmod("$app.php", 0777);

if($fh)
{
    @fwrite($fh, '<?php

session_start();
$counter_name = "'.$app.'.txt";
 
include "../config.php";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);

$q = "INSERT INTO download (filename, views) VALUES
		(\'downloads/'.$app.'\', 1)";

$statresult = mysql_query($q);

}
 
// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);



// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION[\''.$app.'\'])){
  $_SESSION[\''.$app.'\']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 

$q = "UPDATE download SET views = views + 1 WHERE filename = \'downloads/'.$app.'\'";

$statresult = mysql_query($q);

}

?>
	
	
	<!DOCTYPE html>
<html>
<head>
	<title>'.$app.'</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
	<link rel="stylesheet" href="_css/style.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>
<body>
	

	

	
<!-- MAIN PAGE -->
<div data-role="page" id="front" class="depiction" data-title="Details">
<center>
  <br>
  <img src="_img/nzb.png" width="290" height="150"></center>
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
		
		 <!-- Begin BidVertiser code -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- End BidVertiser code -->
		
			<li data-role="list-divider">General</li>
		    <li><a href="#info" target="_blank"><img src="_img/info.svg" alt="Info" class="ui-li-icon">Info</a></li>
		    <li><a href="#screens" target="_blank"><img src="_img/screens.svg" alt="Screenshots" class="ui-li-icon">Screenshots</a></li>
            <li><a href="#stats" target="_blank"><img src="_img/stats.svg" alt="Statistics" class="ui-li-icon">Statistics</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Help</li>			
		    <li><a href="#instructions" target="_blank"><img src="_img/nb.svg" alt="instructions" class="ui-li-icon">Info and Help</a></li>
		    <li><a href="#faq" target="_blank"><img src="_img/question.svg" alt="FAQ" class="ui-li-icon">FAQ</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">About</li>			
		    <li><a href="#authors" target="_blank"><img src="_img/profile.svg" alt="Authors" class="ui-li-icon ui-corner-none">Contact Repo</a></li>
		    <li><a href="#contribute" target="_blank"><img src="_img/heart.svg" alt="Contribute" class="ui-li-icon">Social</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Support us. Thanks:)</li>
			<li>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<table>
					<tr><td><select name="os0">
						<option>Amount</option>
						<option value="2,50">&euro; 2,50</option>
                        <option value="5,00">&euro; 5,00</option>
                        <option value="7,50">&euro; 7,50</option>
                        <option value="10,00">&euro; 10,00</option>
                        <option value="15,00">&euro; 15,00</option>
                        <option value="20,00">&euro; 20,00</option>
                        <option value="20,00">&euro; 25,00</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="hosted_button_id" value="9TCAXQBKN84J8">
					<input id="ppimg" type="image" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<a id="ppcss" data-role="button" data-theme="e"><i>Donate Now</i></a>
					<img id="pppretty" width="250px" src="_img/paypal.jpg" border="0" alt="PayPal Acceptance Mark">
				</form>
						</li>
		</ul>
	  <p style="text-align:center;padding-bottom: 5px;padding-top: 0px;text-shadow: none;"><span style="font-size: 12px;">
	  
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	  
              Your IP:<?php
            echo $ip  =$_SERVER[\'REMOTE_ADDR\'];
          ?>
           <br>Your Device is a 
          <?php
            echo $device = $_SERVER["HTTP_X_MACHINE"];
          ?>
          <br>Running on iOS 
          <?php
            $text =  $_SERVER["HTTP_USER_AGENT"]; 
            preg_match(\'/OS ([_0-9]+)/\', $text, $res);
            $version = isset($res[1])?str_replace(\'_\',\'.\',$res[1]):null;
            echo $version;
          ?>
<br>
<a href="http://damarist.de" target="_blank">POWERED BY Repo CMS</a>
</span></p>
	  </div>
</div>




<!-- INFO -->
<div data-role="page" id="info" class="depiction" data-title="General">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">General info:</li>
			<li>
				<p style="word-wrap: break-word;"></p>
          <p>'.$general.'</p>
          <p></p>
				
			</li>
			<li data-role="list-divider">Changes:</li>
			<li>
				<p style="word-wrap: break-word;"></p>
          <p>'.$changes.'</p>
          <p></p>
			</li>
			<li data-role="list-divider">Compatibility:</li>
			<li>
				<p style="word-wrap: break-word;"></p>
          <p>'.$comp.'</p>
          <p></p>
			</li>
		</ul>
        </div>
</div>





<!-- SCREENSHOTS -->
<div data-role="page" id="screens" class="depiction" data-title="Screenshots">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

	<div data-role="content">
		<center>
        <img class="ss" src="_ss/'.$app.'_1.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_2.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_3.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_4.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_5.png" width="90%" />
		<img class="ss" src="_ss/'.$app.'_6.png" width="90%" />
		</center>
        </div>
</div>





<!-- STATISTICS -->
<div data-role="page" id="stats" class="depiction" data-title="Statistics">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-2555519531704082";
/* damar1st */
google_ad_slot = "9466356259";
google_ad_width = 320;
google_ad_height = 100;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

	<div data-role="content">
	    <ul data-role="listview" data-inset="true">
		    <li>
			  <center>
			  Downloads:
<?php

include "../config.php";

$sql="SELECT filename, stats, dldate FROM download WHERE filename = \'downloads/'.$app.'\' ";
     $res=mysql_query($sql) or die(mysql_error()); 
     $daten=mysql_fetch_array($res);  
	 
      echo  $daten[\'stats\'] . "<BR><BR>Last Download: "; 
      echo  $daten[\'dldate\'] . "<BR><BR>Views: ";
	  echo  $counterVal;
?>
			  </center>
		    </li>
	      </ul>
        </div>
</div>




<!-- INSTRUCTIONS -->
<div data-role="page" id="instructions" class="depiction" data-title="Support">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			  <li data-role="list-divider">Support</li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Forum</h1>
				<p>Visit our forum for general support.</p>
			</a></li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Registration</h1>
				<p>To acces our forum you need to register, you can register from here.</p>
			</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
		  <li data-role="list-divider">Discussion</li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Thread</h1>
				<p>More instructions and pro tips</p>
				<p>Here you can discus ask anything about the repo, cydia, tweaks etc etc....</p>
			</a></li>
			<li><a href="'.$dev.'" target="_blank">
				<h1>Tools</h1>
				<p>Here you can find almost any tool you need for your iDevice<br>
				  <br>
				</p>
			</a></li>
		</ul>
        </div>
</div>





<!-- FAQ -->
<div data-role="page" id="faq" class="depiction" data-title="FAQ">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">FAQ</li>
			<li>
				<h1>Warning</h1>
				<p>Theres no way that damarist.de or damar1st.de is responsible for any damage both software and hardware, using the repo is at your own risk.</p>
			</li>
			<li>
				<h1>Our pollicy</h1>
				<p>If you like a tweak after trying it a while and you like it... <br>
				</p>
				<p>Consider to buy it!!</p>
			</li>
		</ul>
	</div>
</div>






<!-- AUTHORS -->
<div data-role="page" id="authors" class="depiction" data-title="Repo Manager">
    <div data-role="content">
        <ul data-role="listview" data-inset="true">
		<li>
			<img class="profilepic" src="_img/avatar_678.jpg">
			<h2>damar1st and iMart79</h2>
			<p>Admin, Repo Manager, iFreak etc etc...</p>
		</li>
		<li><a href="mailto:'.$spon.'" target="_blank"><img src="_img/mail.svg" alt="Info" class="ui-li-icon"> Questions?? Ask me.</a></li>
		<li><a href="'.$dev.'" target="_blank"><img src="_img/al.svg" alt="Info" class="ui-li-icon">'.$dev.'</a></li>
	</ul>            
    </div>
</div>





<!-- CONTRIBUTE -->
<div data-role="page" id="contribute" class="depiction" data-title="Social">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">We are Social</li>
            <li><a href="http://twitter.com/share?text=damar1st%20Cydia%20Repo&url=http://www.cydia.damarist.de" target="_blank"><img src="_img/twitter.svg" alt="Info" class="ui-li-icon">Tweet</a></li>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://damarist.de" target="_blank"><img src="_img/facebook.svg" alt="Info" class="ui-li-icon">Share with friends</a></li>
			</li>
		</ul>
        </div>
</div>




</body>
</html>');
 //   <input type="hidden" name="action" value="upload">
}
@fclose($fh);

				

  ?>
  
  
  </span>
<form method="post" enctype="multipart/form-data" action="screenshot2.php">
  <div align="center">
    <p>
      <span>
      <input type="hidden" name="app" value="<?php echo $app; ?>" />
      <span class="style1">Upload Screenshots:</span></span></p>
    <p>&nbsp;</p>
    <p><span><br />
      <input type="file" name="picThumbnail1">
      <br />
      <input type="file" name="picThumbnail2">
      <br />
      <input type="file" name="picThumbnail3">
      <br />
      <input type="file" name="picThumbnail4">
      <br />
      <input type="file" name="picThumbnail5">
      <br />
      <input type="file" name="picThumbnail6">
    </span></p>
    <p><span><br />
      
      <input type="submit" value="upload"> 
    </span><span>
    <input type="submit" name="Submit9" value="back" onclick="location.href='../admin/create.php'" style="width:50px; height:25px;" />
    </span></p>
    <p>&nbsp;</p>
  </div>
</form>
<span>
<div align="center"></div>
<?php
   
      
 
   
 
?>
  
  
  
					  <div class="clearfix"></div>
				  </div>
                    <div class="row-fluid">
				<div class="box span12">
				  <div class="box-header well">
					  <h2><i class="icon-info-sign"></i></h2>
					</div>
					<div class="box-content">
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
