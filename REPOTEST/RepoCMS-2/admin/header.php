<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Repo Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
    <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
    </style>
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<span class="btn-group pull-right theme-container">
	
	</span>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>				</a>
				<a class="brand" href="index.php"> <img alt="Repo CMS Logo" src="img/logo20.png" /> <span>Repo CMS</span></a>
				
				<!-- theme selector starts -->
				<span class="top-nav nav-collapse"><span class="btn-group pull-right theme-container"><a class="btn dropdown-toggle" data-toggle="dropdown" href="http://damar1st.de/updates/cms102.zip">
	<?php


		
		define('REMOTE_VERSION', 'http://damar1st.de/version.txt');
define('VERSION', '200');
$script = file_get_contents(REMOTE_VERSION);
$version = VERSION;
if($version == $script) {
    echo "<div class=success> 
<p>Version 2.0.0-Beta-9</p> 
</div>";
} else {
    echo "<div class=error> 
<p>There is a update available!</p> 
</div>";
}
				?>
				</a></span></span>
			  <div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span><a class="brand" href="index.php"></a>
						<span class="caret"></span>					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
			  </div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="divider"></li>
						<li><a href="login.php?act=logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
			  <div class="top-nav nav-collapse">
			    <ul class="nav">
					 <div align="right"></div>
				</ul>
	          </div>
				<!--/.nav-collapse -->
		  </div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet style1">Main</li>
						<li class="nav-header hidden-tablet"> </li>
						<li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="stats.php"><i class="icon-picture"></i><span class="hidden-tablet"> Statistics</span></a></li>
                        <li><a class="ajax-link" href="file-manager.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager (TestVersion)</span></a></li>
                        <li><a class="ajax-link" href="create.php"><i class="icon-edit"></i><span class="hidden-tablet"> Create Depiction</span></a></li>
                        <li><a class="ajax-link" href="upload.php"><i class="icon-edit"></i><span class="hidden-tablet"> Upload Deb's</span></a></li>
                       <!-- <li><a class="ajax-link" href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet"> Screenshots</span></a></li>-->
						<li><a class="ajax-link" href="Release.php"><i class="icon-edit"></i><span class="hidden-tablet"> Edit Release</span></a></li>
					<!--	<li><a class="ajax-link" href="Blank1.php"><i class="icon-edit"></i><span class="hidden-tablet"> Edit Control Files</span></a></li>-->
                        <li><a class="ajax-link" href="Blank2.php"><i class="icon-folder-open"></i><span class="hidden-tablet"> Rebuild Packages File </span></a></li>
                     <li><a class="ajax-link" href="delete.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Delete Deb's</span></a></li>

                     <li><a class="ajax-link" href="user.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add User</span></a></li>

                        <li class="nav-header hidden-tablet style1">UDID Protected Area </li>
						<li class="nav-header hidden-tablet"> </li>
						<li> <span class="hidden-tablet">Edit Release</span></li>
                        <li> <span class="hidden-tablet">Upload Deb's</span></li>
                        <li><i class="icon-folder-open"></i><span class="hidden-tablet"> Rebuild Packages File </span></li>
                        <li><i class="icon-edit"></i><span class="hidden-tablet"> Create Depiction</span></li>
                     <li> <span class="hidden-tablet">Delete Deb's</span></li>
						<li><span class="hidden-tablet">Protection</span></li>
						<li><span class="nav-header hidden-tablet style1">Logout</span> </li>
						<li><a href="login.php?act=logout"><i class="icon-lock"></i><span class="hidden-tablet"> Logout Page</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
			  </div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php 
			} 
			ob_end_flush();
			?>