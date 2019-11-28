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
</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <!-- END FIRST HTML -->
<?php
// Öffnet ein Unterverzeichnis mit dem Namen "daten"
$verzeichnis = openDir("./extract");
// Verzeichnis lesen
while ($file = readDir($verzeichnis)) {
 // Höhere Verzeichnisse nicht anzeigen!
 if ($file != "." && $file != "..") {
 // Link erstellen
 // echo "<a href=\"./$file\">$file</a><br>\n";
  system("dpkg-deb -b extract/$file");
  //system("rm -rf *.zip");
  system("mv extract/*.deb ./");
  system("rm -r extract");
  //system("cp ../../makedeb.php ./");
  //system("cp ../../uploaddeb.php ./");
  echo "copying DEB into DEB - Folder .....";
  echo "FINISH";
 }
}
 // Verzeichnis schließen
closeDir($verzeichnis);

	echo "REBUILD PACKAGES FILE";

//Require template file: pagebottom_tablebottom
require_once ("../style/bottom2.php");	
}
?>
</p>
</form>

</td>