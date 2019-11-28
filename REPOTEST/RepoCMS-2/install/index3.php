 <?php 
ob_start();

session_start();
include('header.php'); 

include('../config.php');

?>


<div></div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i>Installer 4 - 4 </h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">Welcome at the Cydia Repo CMS Installer
					 <div class="clearfix"></div>
					 </div>
					 </div>
					 </div>
					




<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$usertype = "admin";
$nickname = $_POST['nickname'];
$website = getenv("HTTP_HOST");



$txt = array(nickname => $nickname, website => $website, email => $email);

$url = "http://damar1st.de/post.php";






    //init curl
    $ch = curl_init();

    //optionen f\374r curl
    curl_setopt($ch,CURLOPT_URL,"http://www.damarist.de/post.php");  //URL zum login
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);        // ergebnis zur\374ckschicken
    curl_setopt($ch,CURLOPT_HEADER, true);        //Header mitnehmen
    curl_setopt($ch,CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:27.0) Gecko/20100101 Firefox/27.0"); //Useragent
    
curl_setopt($ch, CURLOPT_POST, 1);
        
curl_setopt($ch, CURLOPT_POSTFIELDS, $txt);

curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);


    //cURL ausf\374hren
    $result = curl_exec($ch);

    


        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 

        $password = hash('sha256', $password . $salt); 

        for($round = 0; $round < 65536; $round++) 

        { 

            $password2 = hash('sha256', $password . $salt); 

        }

        

                



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



        

echo "</br>";

echo "Click <a href=".'"'."../admin/index.php".'"'.">here</a> to go to the login. Don't forget  to delete the install folder.";





include('footer.php');

//curl schlie\337en
    curl_close($ch);

    //Ausgabe
    return $result;



?>