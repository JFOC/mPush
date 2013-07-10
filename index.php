<?php
session_start();

ob_start();
include 'functions.php';

if (isset($_SESSION['loggedin'])) {
	//echo "<strong>You are already logged in... </strong><br><br><a href='logout.php'>Logout?</a>";
	header("Location: alreadyloggedin.html");
	die();
}
if (isset($_GET['login'])) {
	$name = mysql_real_escape_string($_GET['login']);
	$pass = mysql_real_escape_string($_GET['password']);

	$query = mysql_query("SELECT * FROM users WHERE name = '{$name}' AND pass = '{$pass}'");
	if (mysql_num_rows($query) < 1) {
		//echo "<h1>PASSWORD INCORRECT!</h1><a href='index.php'>Try Again</a>";
		header("location: wrongpass.html");
		die();
		
	}
	$_SESSION['loggedin'] = "YES";
	$_SESSION['username'] = $name;
	header("Location: applist.php");
	//die("You are now logged in!");	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />  
	<link rel="apple-touch-icon" href="touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="touch-icon-ipad-retina.png" />

	<title>Admin Login</title>
	<link href="css/main.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

	<script type="text/javascript" src="js/plugins/forms/uniform.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/autogrowtextarea.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/chosen.jquery.min.js"></script>

	<script type="text/javascript" src="js/plugins/wizard/jquery.form.js"></script>
	<script type="text/javascript" src="js/plugins/wizard/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/plugins/wizard/jquery.form.wizard.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

	<!-- Disable links going to safari in web app mode -->
	<script type="text/javascript">
		var iWebkit;
		if(!iWebkit){
			iWebkit=window.onload=function(){
				function fullscreen(){
					var a=document.getElementsByTagName("a");
					for(var i=0;i<a.length;i++){
						if(a[i].className.match("noeffect")){}
						else{
							a[i].onclick=function(){
								window.location=this.getAttribute("href");
								return false
							}
						}
					}
				}
				function hideURLbar(){
					window.scrollTo(0,0.9)
				}
				iWebkit.init=function(){
					fullscreen();
					hideURLbar()
				};
				iWebkit.init()
			}
		}
	</script>

</head>

<body class="nobg loginPage">

<!-- Top fixed navigation -->
<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <li><a href="http://vmedia.vn" title="">
					<img src="images/icons/topnav/mainWebsite.png" alt="" />
					<span>Main website</span></a>
				</li>
           <!-- <li><a href="#" title="">
					<img src="images/icons/topnav/profile.png" alt="" />
					<span>Contact admin</span></a>
				</li>
                <li><a href="#" title="">
					<img src="images/icons/topnav/messages.png" alt="" />
					<span>Support</span></a>
				</li>
                <li><a href="login.html" title="">
					<img src="images/icons/topnav/settings.png" alt="" />
					<span>Settings</span></a>
				</li>-->
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>


<!-- Main content wrapper -->
<div class="loginWrapper">
    <div class="loginLogo"><img src="images/login.png" width="320" alt="" /></div>
    <div class="widget">
        <div class="title">
			<img src="images/icons/dark/files.png" alt="" class="titleIcon" />
			<h6>Login panel</h6>
		</div>
        <form action="index.php" id="validate" class="form">
            <fieldset>
                <div class="formRow">
                    <label for="login">Username:</label>
                    <div class="loginInput">
						<input type="text" name="login" class="validate[required]" id="login" />
					</div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">Password:</label>
                    <div class="loginInput">
						<input type="password" name="password" class="validate[required]" id="pass" />
					</div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <div class="rememberMe">
						<input type="checkbox" id="remMe" name="remMe" />
						<label for="remMe">Remember me</label>
					</div>
                    <input type="submit" value="Login" class="dredB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>    

<!-- Footer line -->
<div id="footer">
    <div class="wrapper">Copyright 2013 <a href="http://vmedia.vn">Vmedia</a>. All rights reserved</div>
</div>


</body>
</html>

<? ob_flush(); ?>