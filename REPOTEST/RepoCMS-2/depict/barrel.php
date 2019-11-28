<!DOCTYPE html>
<html>
<head>
	<title>barrel</title>
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
  <img src="_img/logo.png" width="290" height="59"></center>
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">General</li>
		    <li><a href="#info" target="_blank"><img src="_img/info.svg" alt="Info" class="ui-li-icon">Info</a></li>
		    <li><a href="#screens" target="_blank"><img src="_img/screens.svg" alt="Screenshots" class="ui-li-icon">Screenshots</a></li>
		    <li><a href="#video" target="_blank"><img src="_img/video.svg" alt="Video" class="ui-li-icon">Video</a></li>
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
					<input type="hidden" name="hosted_button_id" value="VNCLXTWHXRETY">
					<input id="ppimg" type="image" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<a id="ppcss" data-role="button" data-theme="e"><i>Donate Now</i></a>
					<img id="pppretty" width="250px" src="_img/paypal.jpg" border="0" alt="PayPal Acceptance Mark">
				</form>
						</li>
		</ul>
	  <p style="text-align:center;padding-bottom: 5px;padding-top: 0px;text-shadow: none;"><span style="font-size: 12px;">Your IP: 
          <?php
            echo $ip  =$_SERVER['REMOTE_ADDR'];
          ?>
           <br>Your Device is a 
          <?php
            echo $device = $_SERVER["HTTP_X_MACHINE"];
          ?>
          <br>Running on iOS 
          <?php
            $text =  $_SERVER["HTTP_USER_AGENT"]; 
            preg_match('/OS ([_0-9]+)/', $text, $res);
            $version = isset($res[1])?str_replace('_','.',$res[1]):null;
            echo $version;
          ?></span></p>
	  </div>
</div>




<!-- INFO -->
<div data-role="page" id="info" class="depiction" data-title="General">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">General info:</li>
			<li>
				<p>This tweak adds graphical effects to your icon pages as you scroll through the homescreen. In the tweak's settings, you can choose between 18 different modes. Here is the current list:</p>
				<p>Cube (inside)<br>
				  Cube (outside)<br>
				  Page Slide Down<br>
				  Page Slide Up<br>
				  Curl and Roll Away (extremely popular!)<br>
				  Curl and Roll Away Alternate<br>
				  Vertical Scrolling<br>
				  Page Fade<br>
				  Stairs (down right)<br>
				  Stairs (down left)<br>
				  Page Squeeze<br>
				  Icon Collection<br>
				  Icon Scatter<br>
				  Carousel<br>
				  Flippy<br>
				  Page Zoom<br>
				  Pac-Man<br>
				  Merry-Go-Round</p>
				<p>New effects are still being developed. There is also an option to turn the effects off. Configure options from your Settings app. No new icons will be added to your home screen, everything is entirely configurable from the Settings app.</p>
				
			</li>
			<li data-role="list-divider">Changes:</li>
			<li>
				<p>Fixed missing PrefrenceLoader dependency on the previous release </p>
			</li>
			<li data-role="list-divider">Compatibility:</li>
			<li>
				<p>NOT FOR iPad on iOS 3.2</p>
			</li>
		</ul>
        </div>
</div>





<!-- SCREENSHOTS -->
<div data-role="page" id="screens" class="depiction" data-title="Screenshots">
	<div data-role="content">
		<center>
        <img class="ss" src="_ss/barrel1.png" width="90%" />
		<img class="ss" src="_ss/barrel2.png" width="90%" />
		<img class="ss" src="_ss/barrel3.png" width="90%" /></center>
        </div>
</div>





<!-- VIDEOS -->
<div data-role="page" id="video" class="depiction" data-title="Video">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
		    <li data-role="list-divider">Demo:</li>
		    <li>
			<div class="video-container">
			  <iframe id="iframe" src="http://www.youtube.com/embed/lLJjcNukwf0?rel=0"></iframe>
			</div>			
		    </li>
		</ul>
        </div>
</div>




<!-- STATISTICS -->
<div data-role="page" id="stats" class="depiction" data-title="Statistics">
	<div data-role="content">
	    <ul data-role="listview" data-inset="true">
		    <li>
			  <center>
			  Downloads:
<?php

include "../config.php";

$sql="SELECT filename, stats, dldate FROM download WHERE filename = 'repo/downloads/com.nzb4you.barrel.deb ' ";
     $res=mysql_query($sql) or die(mysql_error()); 
     $daten=mysql_fetch_array($res);  
	 
      echo  $daten['stats'] . "<BR><BR>Last Download: "; 
      echo  $daten['dldate'] . "<BR>"; 
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
			<li><a href="http://www.nzb4you.com/" target="_blank">
				<h1>Forum</h1>
				<p>Visit our forum for general support.</p>
			</a></li>
			<li><a href="http://www.nzb4you.com/member.php?action=register" target="_blank">
				<h1>Registration</h1>
				<p>To acces our forum you need to register, you can register from here.</p>
			</a></li>
		</ul>
		<ul data-role="listview" data-inset="true">
		  <li data-role="list-divider">Discussion</li>
			<li><a href="http://www.nzb4you.com/forumdisplay.php?fid=77" target="_blank">
				<h1>Thread</h1>
				<p>More instructions and pro tips</p>
				<p>Here you can discus ask anything about the repo, cydia, tweaks etc etc....</p>
			</a></li>
			<li><a href="http://www.nzb4you.com/showthread.php?tid=17695" target="_blank">
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
				<p>Theres no way that nzb4you.com is responsible for any damage both software and hardware, using the repo is at your own risk.</p>
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
			<h2>4you</h2>
			<p>Admin, Repo Manager, iFreak etc etc...</p>
		</li>
		<li><a href="mailto:nzb4yourepo@gmail.com" target="_blank"><img src="_img/mail.svg" alt="Info" class="ui-li-icon"> Questions?? Ask me.</a></li>
		<li><a href="http://www.nzb4you.com" target="_blank"><img src="_img/al.svg" alt="Info" class="ui-li-icon"> NZB4you.com</a></li>
	</ul>            
    </div>
</div>





<!-- CONTRIBUTE -->
<div data-role="page" id="contribute" class="depiction" data-title="Social">
	<div data-role="content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">We are Social</li>
            <li><a href="http://twitter.com/share?text=NZB4you%20Cydia%20Repo&url=http://www.nzb4you.com/repo" target="_blank"><img src="_img/twitter.svg" alt="Info" class="ui-li-icon">Tweet</a></li>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.nzb4you.com/repo" target="_blank"><img src="_img/facebook.svg" alt="Info" class="ui-li-icon">Share with friends</a></li>
			</li>
		</ul>
        </div>
</div>




</body>
</html>
