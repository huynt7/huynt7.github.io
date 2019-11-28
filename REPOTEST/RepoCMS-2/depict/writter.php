<?php 
ob_start();
session_start();

require_once ("../config.php");


if (isset($_SESSION['admin']) === true) 
{
include("header.php");
}
else 
{
}

if (isset($_SESSION['mod']) === true)
{
include("header2.php");
}
else
{
}

if (isset($_SESSION['admin']) or ($_SESSION['mod']))

{

?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Create Depiction</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                  <?php
$work_directory = getcwd();

if(isset($_POST['process'])&& (!empty($_POST['action']))){
    //if(!empty($_POST['action'])){
        $action = $_POST['action'];
    //}
    if($action == 2){
        $newFileName = $_POST['fname'];
        $newFileType = $_POST['ftype'];
        $thisNewFile = $work_directory."/".$newFileName.".".$newFileType;
        if (!file_exists($thisNewFile)) {
           $filler = "";
          switch ($newFileType){
            case "php":
            $filler .='<?php ';
            $filler .="\n\n";
            $filler .='##fileName: '.$newFileName.'.'.$newFileType.'##';
            $filler .="\n\n";
            $filler .='echo "hello World";';
            $filler .="\n\n";
            $filler .='?>';
            break;
            case "html":
            $filler .='<!DOCTYPE html>';
            $filler .="\n";
            $filler .='<html>';
            $filler .="\n\n";
            $filler .='<!-- '.$newFileName.'.'.$newFileType.'-->';
            $filler .="\n\n";
            $filler .='<head>';
            $filler .="\n\n";
            $filler .='</head>';
            $filler .="\n\n";
            $filler .='<body>';
            $filler .="\n\n";
            $filler .='<!-- Type your html tags below -->';
            $filler .="\n\n";
            $filler .='</body>';
            $filler .="\n\n";
            $filler .='</html>';
            break;
            default:
            $filler .= "## type your codes here";
            break;
        }
         $writeThisFile = fopen($thisNewFile,"w");
         fwrite($writeThisFile,$filler);
         fclose($writeThisFile); 
      } 
     
      $fileToRead = $newFileName.".".$newFileType;
      $fileLink = $newFileName.".".$newFileType;
    }
  
    elseif($action == 1){
        $thisNewFile = $work_directory."/".$_POST['editFile'];
        $fileLink = $_POST['editFile'];
        $fileToRead = $fileLink;
    }

if (file_exists($thisNewFile)) {
//$thisFile = $thisNewFile; 
$readThisFile = $fileToRead;
$thisNewFileLink = $fileLink;
}
}
//$loadcontent = $readThisFile; 
    if(isset($_POST['submit'])) {
     $readThisFile = $_POST['nFile'];
     $thisNewFileLink = $_POST['nFile'];
     $codesUpdate = $_POST['string'];
         $codesUpdate = stripslashes($codesUpdate);
        $fp = @fopen($readThisFile, "w");
        if ($fp) {
            fwrite($fp, $codesUpdate);
            fclose($fp);
                               }
                }
    $fp = @fopen($readThisFile, "r");
        $readThisFile = fread($fp, filesize($readThisFile));
        $readThisFile = htmlspecialchars($readThisFile);
        fclose($fp);
?>

<html>
<head>
<style>
textarea{
    width: 700px;
    color: #000000;
    border: 3px solid grey;
    padding: 5px;
    font-family: Tahoma, sans-serif;
    background: #ffffff;
}
</style>
</head>
<body>
<center>
<p><img src="_img/nzb1.png"/></p><br>
<div>
<br/>
<form method=post action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="hidden" name="nFile" value="<?php echo $thisNewFileLink;?>">
<input type="hidden" name="thisFile" value="<?php echo $readThisFile?>">
<pre class="brush: php; highlight: [5, 15]; html-script: true">
<textarea name="string" cols="70" rows="40"><?php echo $readThisFile ?></textarea>
<br>
<input type="submit" name="submit" value="Save Changes">  
<p>
<a href="<?php echo $thisNewFileLink;?>" target="_Blank">PREVIEW</a>
</form>
<p>
<a href="http://www.nzb4you.com/repo/depict/edit.php">GO BACK</a> | <a href="http://www.nzb4you.com/repo/admin.php">HOME</a>
</div>
</center>
</body>				
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  

		  
       
<?php 

}

else {
header("Location: login.php");
}
ob_end_flush();

include('footer.php'); ?>
