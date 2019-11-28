<?php 
ob_start();
error_reporting(0);
session_start();

require_once ("../config.php");




if (!isset ($_SESSION['mod']) && !isset($_SESSION['admin'])) {

echo "please login";

}

else

{

if (isset($_SESSION['admin']) === TRUE)
{
include("header.php");

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
						<h2><i class="icon-info-sign"></i>Edit Depiction</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <?php
 
$ext = array('.php','.html','.css');
$work_directory = ("../depict/");
function dump($dir,$ext) {
$d = dir($dir);
while (false!== ($file = $d->read()))
{
$extension = substr($file, strrpos($file, '.'));
if ((array_search($extension, $ext) !== FALSE)){
$d_files[$file] = $file;
}
}
$d->close();
asort($d_files);
return $d_files;
}
?>
<form method = "post" action ="writter.php">
<p>
<label>Select Action</label>
<select name ="action">
<option value ="1">Edit File</option>
<option value = "2">Create New file</option>
</select>
</p>
<?php $array = dump($work_directory,$ext);?>
<p>
<label>Select file to Edit </label>
<select name="editFile">
<?php foreach ($array as $key => $file) {
 $td_item= $file;
 ?>
<option >
<?php echo $td_item;?>
</option>
<?php
}
?>
</select>
</p>
<p>
If new file Selected above, Type file name ONLY!
<br/>
<label>File Name   </label>  <input type = "text" name = "fname"/>
</p>
<p>
Select file extension for the above filename.
<br/>
<label>Select File Type</label>
<select name = "ftype" >
<option>php</option>
<option>html</option>
<option>css</option>
</select>
<br/>
</p>
<p>
<input type="submit" name="process" value="Edit/Create">
</p>
<p>&nbsp;</p>
</form>
                    
						<h1>&nbsp;</h1>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				
				</div><!--/span-->
			</div><!--/row-->
				  

		  
       
<?php 
include("footer.php");
 }

if (isset($_SESSION['mod']) === TRUE)
{
include("header2.php");
echo "U need ADMIN rights";
include("footer.php");
}


}
ob_end_flush();

?>
