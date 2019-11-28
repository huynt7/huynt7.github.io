<?php

error_reporting(-1); 
    ini_set('display_errors', true); 

$tmp = './output/';

$tmp2 = '../';

unlink('../Packages');


foreach (glob($tmp . "*.deb") as $t1) 

{
echo $t1;

$var = implode("",file($t1));


$userdatei2 = fopen("../Packages", "a+");

fputs($userdatei2,$var);

echo $userdatei2;

echo "</p>";

fclose($userdatei2);


; }

// Name of the file we are compressing
$file = "../Packages";

echo "creating Package file";
echo "</p>";
echo $file;
echo "</p>";


// Name of the gz file we are creating
$gzfile = "../Packages.gz";

echo "gzip Package file";
echo "</p>";
echo $gzfile;
echo "</p>";

// Open the gz file (w9 is the highest compression)
$fp = gzopen ($gzfile, 'w9');

echo "setting attributes";
echo "</p>";

echo "</p>";

// Compress the file
gzwrite ($fp, file_get_contents($file));

// Close the gz file and we are done
gzclose($fp);

echo "Finish";
echo "</p>";

echo "</p>";


?>