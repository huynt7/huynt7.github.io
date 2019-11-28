
<?php

/**
/**
 * Debian/Packages Generator
 *
 * PHP versions 4 and 5
 *
 * @category   php
 * @package    System
 * @author     damar1st <info@damarist.de>
 * @copyright  2014 The Authors
 * @since      File available since Release 1.0.1
 *
 * 
 * File/Archieve manipulation
 *
 * PHP versions 4 and 5
 *
 * @category   pear
 * @package    System
 * @author     Tomas V.V.Cox <cox@idecnet.com>
 * @copyright  1997-2009 The Authors
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @version    CVS: $Id: System.php 313024 2011-07-06 19:51:24Z dufuz $
 * @link       http://pear.php.net/package/PEAR
 * @since      File available since Release 0.1
 */

/**
 * base class
 */




error_reporting(0);
ini_set('display_errors', '1');


$path = '/public_html/downloads/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

?>


<?php

set_time_limit(200);

require_once "File/Archive.php";

$domain = getenv("HTTP_HOST");


unlink('../Packages');

foreach (glob("output/*.deb") as $con) {
		unlink($con);
					}

$tmp = 'output';

foreach (glob("*.deb") as $t1) {
    
    $fname = ("./downloads/" . $t1);
    
    $md5 = md5_file($t1);
    
    $sha1 = sha1_file($t1);
    
    $size = filesize($t1);
    
    
    File_Archive::extract(File_Archive::read($t1 . '/control.tar.gz/'), File_Archive::toFiles($tmp));
    
    
    $aFileLines = file("./output/control", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $pack       = end(preg_grep('/^Package\:.*$/i', $aFileLines));
    $ver        = end(preg_grep('/^Version\:.*$/i', $aFileLines));
    $arch       = end(preg_grep('/^Architecture\:.*$/i', $aFileLines));
    $main       = end(preg_grep('/^Maintainer\:.*$/i', $aFileLines));
    $pdep       = end(preg_grep('/^Pre-Depends\:.*$/i', $aFileLines));
    $dep        = end(preg_grep('/^Depends\:.*$/i', $aFileLines));
    $aut        = end(preg_grep('/^Author\:.*$/i', $aFileLines));
    $home       = end(preg_grep('/^Homepage\:.*$/i', $aFileLines));
    $desc       = end(preg_grep('/^Description\:.*$/i', $aFileLines));
    //$pri = end( preg_grep( '/^Priority\:.*$/i', $aFileLines ));
    $tag        = end(preg_grep('/^Tag\:.*$/i', $aFileLines));
    $dev        = end(preg_grep('/^dev\:.*$/i', $aFileLines));
    $icon       = end(preg_grep('/^Icon\:.*$/i', $aFileLines));
    $sec        = end(preg_grep('/^Section\:.*$/i', $aFileLines));
    $isize      = end(preg_grep('/^Installed-Size\:.*$/i', $aFileLines));
    $conf       = end(preg_grep('/^Conflicts\:.*$/i', $aFileLines));
    $rep        = end(preg_grep('/^Replaces\:.*$/i', $aFileLines));
    $prov       = end(preg_grep('/^Provides\:.*$/i', $aFileLines));
    $ess        = end(preg_grep('/^Essenial\:.*$/i', $aFileLines));
    $name       = end(preg_grep('/^Name\:.*$/i', $aFileLines));
    //$depic = end( preg_grep( '/^Depiction\:.*$/i', $aFileLines ));
    
    
    if (empty($pack)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $pack . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($ver)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $ver . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($arch)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $arch . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($main)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $main . "\n");
        fclose($fh);
    }
    
    
    
    
    if (empty($pdep)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $pdep . "\n");
        fclose($fh);
    }
    
    
    
    
    if (empty($dep)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $dep . "\n");
        fclose($fh);
    }
    
    
    
    
    if (empty($aut)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $aut . "\n");
        fclose($fh);
    }
    
    
    
    
    if (empty($isize)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $isize . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($home)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $home . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($desc)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $desc . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($fname)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        $stringData = "Filename: ";
        fwrite($fh, $stringData);
        fwrite($fh, $fname . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($pri)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $pri . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($tag)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $tag . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($dev)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $dev . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($icon)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $icon . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($size)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        $stringData = "Size: ";
        fwrite($fh, $stringData);
        fwrite($fh, $size . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($sec)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $sec . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($conf)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $conf . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($rep)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $rep . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($prov)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $prov . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($ess)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $ess . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($md5)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        $stringData = "MD5sum: ";
        fwrite($fh, $stringData);
        fwrite($fh, $md5 . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($sha1)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        $stringData = "SHA1: ";
        fwrite($fh, $stringData);
        fwrite($fh, $sha1 . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($sha256)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        $stringData = "SHA256: ";
        fwrite($fh, $stringData);
        fwrite($fh, $sha256 . "\n");
        fclose($fh);
    }
    
    
    
    if (empty($name)) {
        
    } else {
        $myFile = "../Packages";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $name . "\n");
        fclose($fh);
    }
    
    
    
    $myFile = "../Packages";
    $fh = fopen($myFile, 'a') or die("can't open file");
    $stringData = "Depiction: ";
    fwrite($fh, $stringData);
    $stringData = "http://";
    fwrite($fh, $stringData);
    fwrite($fh, $domain);
    $stringData = "/html/";
    fwrite($fh, $stringData);
    fwrite($fh, $t1);
    $stringData = ".php\n";
    fwrite($fh, $stringData);
    fclose($fh);
    
    
    
    
    $myFile = "../Packages";
    $fh = fopen($myFile, 'a') or die("can't open file");
    fwrite($fh, "\n");
    fclose($fh);
    
    
    
    rename("output/control", "output/" . $t1);
    
    ;
}


$file = "../Packages";
echo "extracting files";
echo '</br>';
echo "creating Package file";
echo '</br>';
$gzfile = "../Packages.gz";

echo "gzip Package file";
echo '</br>';

$fp = gzopen($gzfile, 'w9');

echo "setting attributes";

gzwrite($fp, file_get_contents($file));


gzclose($fp);
echo '</br>';
echo "Finish";
echo "</p>";



$directory = "./";
if (glob($directory . "*.deb") != false) {
    $filecount = count(glob($directory . "*.deb"));
    //echo "Deb files: " . $filecount;
} else {
    echo 0;
}


//echo "</p>";


$directory = "./output/";
if (glob($directory . "*.deb") != false) {
    $filecount2 = count(glob($directory . "*.deb"));
    //echo "control files: " . $filecount2;
} else {
    echo 0;
}

echo "</p>";

//echo "Packages File Entries: ";

$file = file_get_contents('../Packages');


$wort = "Package:";

$file2 = substr_count($file, "Version:");


if (($filecount == $filecount2) == $file2)

{

echo "Packages successfully builded";

}
else
{
echo "Something went wrong, try it again";

echo"</br>";
echo "error codes:";
echo "</br>";
echo $filecount;
echo "</br>";
echo $filecount2;
echo "</br>";
echo $file2;
}


