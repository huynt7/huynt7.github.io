<?php

ob_start();

session_start();

require_once ("../config.php");





$no_visible_elements=true;
 


$getaction = $_GET['act'];
if ($getaction == "logout") {
	session_destroy();
	header("Location: login.php");
}


if (isset($_SESSION['admin']) OR ($_SESSION['mod']))
{
header("Location: index.php");
}
else {
?>

<?php

include('header.php');

?>

			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Repo Admin</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					<form method="POST" target="_self">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" name="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
			
<?php 
$submit = $_POST['submit'];
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($submit))
{ $query = "select * from users where username='$username'";
$result = mysql_query($query) ;
$isAuth = false;
while($row = mysql_fetch_array($result))
{
$pass = $row[password];
$salt = $row[salt];
$usertype = $row[usertype];

        $passwd = hash('sha256', $password . $salt); 
        for($round = 0; $round < 65536; $round++) 
        { 
            $password2 = hash('sha256', $passwd . $salt); 
        }




if($password2 === $pass && $usertype == 'admin'){
$isAuth = true;
$_SESSION['admin'] = $username;
}
if($password2 === $pass && $usertype == 'mod'){
$isAuth = true;
$_SESSION['mod'] = $username;
}
}
if($isAuth)

{
print "logged in successfully<br>";
header("Location: index.php");
}

else
print "Wrong username or password";
}
}

ob_end_flush();

include('footer.php'); ?>
