
<?php

error_reporting(0);

$path = '/public_html/downloads/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

?>


<?php


require_once "File/Archive.php";

$domain = getenv("HTTP_HOST");
 


//echo ("http://" . $domain);

//echo '</br>';

unlink('../Packages');

//unlink('output');

//mkdir('output');

$tmp = 'output';

foreach (glob("*.deb") as $t1) {
   
$fname = ("./downloads/" . $t1);

$md5 = md5_file($t1);
//echo "creating md5 sum";

$sha1 = sha1_file($t1);
//echo "creating sha1 hash";

//$sha256 = sha256_file($t1);

//echo "creating sha256 hash";

$size = filesize($t1);


File_Archive::extract(
  File_Archive::read($t1.'/control.tar.gz/'),
    File_Archive::toFiles($tmp)

);

rename("output/control", "output/" . $t1);


?>


