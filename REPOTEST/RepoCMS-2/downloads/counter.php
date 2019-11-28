<?php

  /*****************************************************
  ** Title........: REPO Counter File
  ** Filename.....: counter.php
  ** Author.......: damar1st
  ** Homepage.....: http://damarist.de/
  ** Contact......: info@damarist.de
  ** Version......: 0.8
  ** Last changed.: 01.03.2012
  ** Last change..:
  *****************************************************/

include "../config.php"; 	// einfÃ¼gen der Verbindung zur SQL

$filename = mysql_real_escape_string($_GET['file']);
$path = $_SERVER['DOCUMENT_ROOT']."/";                    //Pfad zur Datei
$fullPath = $path.$filename;                             //Pfad zur Downloaddatei
$ip  =$_SERVER['REMOTE_ADDR'];
$firmware = $_SERVER['HTTP_X_FIRMWARE'];
$udid = $_SERVER['HTTP_X_UNIQUE_ID'];
$device = $_SERVER["HTTP_X_MACHINE"];
$agent = $_SERVER["HTTP_USER_AGENT"];
$filetypes = array("deb","zip");              // UnterstÃ¼tzte Dateitypen

if (!in_array(substr($filename, -3), $filetypes)) {
	echo "You do not have permission to access this document.";
	exit;
}

if ($fd = fopen ($fullPath, "r")) {
	//add download stat
	$result = mysql_query("SELECT COUNT(*) AS countfile FROM download
	WHERE filename='" . $filename . "'");
	$data = mysql_fetch_array($result);
	$q = "";
	
	if ($data['countfile'] > 0) {
		$q = "UPDATE download SET device = '$device', firmware = '$firmware', agent = '$agent', ip = '$ip', udid = '$udid', dldate = NOW(), stats = stats + 1 WHERE
		filename = '" . $filename . "'";
	} else {
		$q = "INSERT INTO download (filename, dldate, stats, ip, udid, agent, firmware, device) VALUES
		('" . $filename . "',NOW(), 1, '$ip', '$udid', '$agent', '$firmware', '$device')";
				
	}
	$statresult = mysql_query($q);
	
	//der nÃ¤chste Teil fÃ¼hrt die Datei aus

	$fsize = filesize($fullPath);
	$path_parts = pathinfo($fullPath);

	header("Content-type: application/octet-stream");
	header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
	header("Content-length: $fsize");
	header("Cache-control: private");              //Ã¶ffnen der Downloaddatei
	while(!feof($fd)) {
		$buffer = fread($fd, 2048);
		echo $buffer;
	}
}
fclose ($fd);
exit;

?>