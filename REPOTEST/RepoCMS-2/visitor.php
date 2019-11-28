<?php

include "./config.php";	

$filename = mysql_real_escape_string($_GET['file']);
$path = $_SERVER['DOCUMENT_ROOT']."/"; //path of this file
$fullPath = $path.$filename; //path to download file
$ip=$_SERVER['REMOTE_ADDR'];
$firmware=$_SERVER['HTTP_X_FIRMWARE'];
$device=$_SERVER["HTTP_X_MACHINE"];
$agent=$_SERVER["HTTP_USER_AGENT"];
$filetypes = array("gz");

if (!in_array(substr($filename, -2), $filetypes)) {
	echo "Invalid download type.";
	exit;
 }

if ($fd = fopen ($fullPath, "r")) {
	//add download stat
	$result = mysql_query("SELECT COUNT(*) AS countfile FROM visitor
	WHERE filename='" . $filename . "'");
	$data = mysql_fetch_array($result);
	$q = "";
	
	if ($data['countfile'] > 0) {
		$q = "UPDATE visitor SET device = '$device', firmware = '$firmware', agent = '$agent', ip = '$ip', dldate = NOW(), stats = stats + 1 WHERE
		filename = '" . $filename . "'";
	} else {
		$q = "INSERT INTO visitor (filename, dldate, stats, ip, agent, firmware, device) VALUES
		('" . $filename . "',NOW(), 1, '$ip', '$agent', '$firmware', '$device')";
				
	}
	$statresult = mysql_query($q);
	
	//the next part outputs the file
	$fsize = filesize($fullPath);
	$path_parts = pathinfo($fullPath);

	header("Content-type: application/octet-stream");
	header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
	header("Content-length: $fsize");
	header("Cache-control: private"); //use this to open files directly
	while(!feof($fd)) {
		$buffer = fread($fd, 2048);
		echo $buffer;
	}
}
fclose ($fd);

if ($fd = fopen ($fullPath, "r")) {
	//add download stat
	$result = mysql_query("SELECT COUNT(*) AS countfile FROM visitor2
	WHERE ip = '$ip'");
	$data = mysql_fetch_array($result);
	$q = "";
	
	if ($data['countfile'] > 0) {
		$q = "UPDATE visitor2 SET filename = '$filename', device = '$device', firmware = '$firmware', agent = '$agent', ip = '$ip', dldate = NOW(), stats = stats + 1 WHERE
		ip = '$ip'";
	} else {
		$q = "INSERT INTO visitor2 (filename, dldate, stats, ip, agent, firmware, device) VALUES
		('$filename', NOW(), 1, '$ip', '$agent', '$firmware', '$device')";
				
	}
	$statresult = mysql_query($q);
	
	//the next part outputs the file
	$fsize = filesize($fullPath);
	$path_parts = pathinfo($fullPath);

	header("Content-type: application/octet-stream");
	header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
	header("Content-length: $fsize");
	header("Cache-control: private"); //use this to open files directly
	while(!feof($fd)) {
		$buffer = fread($fd, 2048);
		echo $buffer;
	}
}
fclose ($fd);


exit;

?>