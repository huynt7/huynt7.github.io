<?php
require_once ("../style/top2.php");


require_once ("../config.php");
session_start();
if (isset($_SESSION['username']))
{
//Start page 'Rebuild'
?>
<!--START OF HTML CODE-->
<style type="text/css">
<!--
.Stil1 {
	font-size: 24px;
	font-weight: bold;
}
a:link {
	color: #FF0000;
}
a:visited {
	color: #FF0000;
}
a:hover {
	color: #FF0000;
}
a:active {
	color: #FF0000;
}
-->
</style>

<div align="center">
  <p align="center"><span class="Stil1">Upload Files</span></p>
  <p align="center"><br />
  </p>
  <p align="center">&nbsp;</p>
  
  <p align="center">    
    <input type="submit" name="Submit" value="Edit Release" onclick="location.href='../../editrelease.php'" style="width:100px; height:50px;" />
    <input type="submit" name="Submit2" value="upload files" onclick="location.href='../../deb.php'" style="width:100px; height:50px;" />
    <input type="submit" name="Submit3" value="rebuild package" onclick="location.href='../../rebuild.php?mode=rebuild'" style="width:100px; height:50px;" />
	<input type="submit" name="Submit4" value="Delete Files" onclick="location.href='../../delete.php'" style="width:100px; height:50px;" />
	<input type="submit" name="Submit5" value="DL-Stats" onclick="location.href='../../downloads.php'" style="width:100px; height:50px;" />
<br>
<input type="submit" name="Submit6" value="show Release" onclick="location.href='../../srel.php'" style="width:100px; height:50px;" />
<input type="submit" name="Submit7" value="show Package" onclick="location.href='../../spack.php'" style="width:100px; height:50px;" />
<input type="submit" name="Submit8" value="edit control/file" onclick="location.href='../../downloads/exdeb.php'" style="width:100px; height:50px;" />
<input type="submit" name="Submit9" value="depiction maker" onclick="location.href='../../depiction.php'" style="width:100px; height:50px;" />

  </p>
 
<hr />
<h1 align="center">Now you can edit the Control file </h1>
<h2 align="center"><a href="makedeb.php" target="_self">after saving the new Control file click here to convert it to a DEB file </a></h2>
</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <!-- END FIRST HTML -->
<?php

    $file = $_GET['file'];
	
if (isset($file))
    {
	   
       system("mkdir extract");
	   echo "extracting... " . $file . "<br>";
       $fol = system("dpkg-deb -f $file Package");
       system("dpkg-deb -x $file ./extract/$fol");
	   system("dpkg-deb -e $file ./extract/$fol/DEBIAN");
	   system("cp edit.php ./extract/$fol/DEBIAN");
	 //  $fol2 = ("./$fol/DEBIAN/edit.php");
	  echo '<iframe src="extract/'.$fol.'/DEBIAN/edit.php" height="500" width="500"></iframe>'; 
	   // include ("'.$fol.'/DEBIAN/edit.php");
	   //Start rebuild packages
	  exit; 
    }
	


 
    // create a handler to read the directory contents
    $handler = opendir(".");
 
    echo "Please choose a file to unzip: " . "<br>";
 
    // A blank action field posts the form to itself
    echo '<FORM action="" method="get">';
 
    $found = FALSE; // Used to see if there were any valid files
 
    // keep going until all files in directory have been read
    while ($file = readdir($handler))
    {
        if (preg_match ("/.deb$/i", $file))
        {
            echo '<input type="radio" name="file" value=' . $file . '> ' . $file . '<br>';
            $found = true;
        }
    }
	
	
    closedir($handler);
	
	
 
    if ($found == FALSE)
        echo "No files ending in .zip found<br>";
    else
        echo '<br>Warning: Existing files will be overwritten.<br><br><INPUT type="submit" value="extract!">';
 
    echo "</FORM>";

	



}
//Require template file: pagebottom_tablebottom
require_once ("../style/bottom2.php");

?>
</p>
</form>

</td>
