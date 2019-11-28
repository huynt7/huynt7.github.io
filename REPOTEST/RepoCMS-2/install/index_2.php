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

						<h2><i class="icon-info-sign"></i>Installer 3 - 3 </h2>

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

					



<h1>Add new admin</h1> 

<form action="index3.php" method="post"> 

    <p>Username (Login Name):<br /> 

      <input type="text" name="username" value="" /> 

      <br />
      <br /> 

    E-Mail:<br /> 

    <input type="text" name="email" value="" /> 

    <br />
    <br /> 

    Password:<br /> 

    <input type="password" name="password" value="" /> 

    <br />
    <br /> 

Nickname:<br /> 

    <input type="text" name="nickname" value="" />
  </p>
    <p>Your Nickname and email adress will</p>
    <p>be send to damarist.de for registration.</p>
    <p>It will only be used to information you</p>
    <p>about updates and bugs of the RepoCMS.    </p>
    <p> 
      
      <input type="submit" value="Register" /> 
      
            </p>
</form>



<?php



include('footer.php');



?>