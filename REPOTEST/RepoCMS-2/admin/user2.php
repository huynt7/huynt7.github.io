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


<div></div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Add User</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">Add User
					 <div class="clearfix"></div>
					 </div>
					 </div>
					 </div>
					




<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$usertype = $_POST['game'];



    if(!empty($_POST)) 
    { 
        if(empty($username)) 
        { 
            die("Please enter a username."); 
        } 
        if(empty($password)) 
        { 
            die("Please enter a password."); 
        } 
        if(empty($email))
        { 
            die("Invalid E-Mail Address"); 
        } 
        		

		
       
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $password . $salt); 
        for($round = 0; $round < 65536; $round++) 
        { 
            $password2 = hash('sha256', $password . $salt); 
        }
	
		echo $usertype;

mysql_query("INSERT INTO `users` (
`username` ,
`email`,
`password`,
`id`,
`salt`,
`usertype`

)
VALUES (
'$username', 
'$email', 
'$password2', 
'$id', 
'$salt', 
'$usertype'
);")

 or die(mysql_error());  

echo "USER accepted!"; 

        //header("Location: ../admin/index.php"); 
      //  die("Redirecting to ../admin/index.php"); 
    } 
     
include("footer.php");

 }

if (isset($_SESSION['mod']) === TRUE)
{
include("header2.php");
echo "U need ADMIN rights";
include('footer.php');

}

}
ob_end_flush();


?>