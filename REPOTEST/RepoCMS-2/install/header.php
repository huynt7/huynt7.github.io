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
	<link id="bs-css" href="../admin/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="../admin/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../admin/css/charisma-app.css" rel="stylesheet">
	<link href="../admin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='../admin/css/fullcalendar.css' rel='stylesheet'>
	<link href='../admin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='../admin/css/chosen.css' rel='stylesheet'>
	<link href='../admin/css/uniform.default.css' rel='stylesheet'>
	<link href='../admin/css/colorbox.css' rel='stylesheet'>
	<link href='../admin/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='../admin/css/jquery.noty.css' rel='stylesheet'>
	<link href='../admin/css/noty_theme_default.css' rel='stylesheet'>
	<link href='../admin/css/elfinder.min.css' rel='stylesheet'>
	<link href='../admin/css/elfinder.theme.css' rel='stylesheet'>
	<link href='../admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='../admin/css/opa-icons.css' rel='stylesheet'>
	<link href='../admin/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
	<div align="left">
	  <?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	  <!-- topbar starts -->
	  <span class="btn-group pull-right theme-container">
	    
      </span>
</div>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<div align="left"><a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span> </a>
				    <a class="brand" href="index.php"> <img alt="Repo CMS Logo" src="img/logo20.png" /> <span>Repo CMS</span></a>
				  
				    <!-- theme selector starts -->
				    <span class="top-nav nav-collapse"><span class="btn-group pull-right theme-container"><a class="btn dropdown-toggle" data-toggle="dropdown" href="http://damar1st.de/updates/cms102.zip"></a></span></span>
			    </div>
			  <div class="btn-group pull-right theme-container" >
					<div align="left"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
				          <i class="icon-tint"></i></a></div>
			  </div>
				<div align="left">
				  <!-- theme selector ends -->
				  
				  <!-- user dropdown starts -->
			  </div>
				<div class="btn-group pull-right" >
					<div align="left"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
				          <i class="icon-user"></i></a></div>
			  </div>
				<div align="left">
				  <!-- user dropdown ends -->
				  
			    </div>
			  <div class="top-nav nav-collapse">
			      <div align="left">
			        <ul class="nav">
                    </ul>
		        </div>
			  </div>
				<div align="left">
				  <!--/.nav-collapse -->
			        </div>
		  </div>
		</div>
	</div>
	<div align="left">
	  <!-- topbar ends -->
	  <?php } ?>
	  <div class="container-fluid">
	  <div class="row-fluid">
	  <?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
	  
	  <!-- left menu starts -->
</div>
	<div class="span2 main-menu-span">
	  <div class="well nav-collapse sidebar-nav"></div>
				<div align="left">
				  <!--/.well -->
	      </div>
	</div>
	<div align="left">
	  <!--/span-->
	  <!-- left menu ends -->
	  
	  <noscript>
      </noscript>
</div>
	<noscript><div class="alert alert-block span10">
		<h4 align="left" class="alert-heading">&nbsp;</h4>
			</div>
			</noscript>
			
			<div id="content" class="span10">
			<div align="left">
			  <!-- content starts -->
			  <?php 
			} 
			ob_end_flush();
			?>
            </div>
