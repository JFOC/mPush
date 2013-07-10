<?php 
session_start();
if(!isset($_SESSION['loggedin']))
{
    die("To access this page, you need to <a href='index.php'>LOGIN</a>"); // Make sure they are logged in!
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

$page = substr(strrchr($_SERVER['PHP_SELF'], "/"), 1);
if (isset($_GET['appid'])) $appid = $_GET['appid'];

include_once 'functions.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0," />
<meta name="robots" content="noindex, nofollow"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="touch-icon-ipad-retina.png" />

<title>Dashboard</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>

<script type="text/javascript" src="js/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="js/plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

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

<script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="js/plugins/tables/datatable.js"></script>
<script type="text/javascript" src="js/plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="js/plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="js/plugins/calendar.min.js"></script>
<script type="text/javascript" src="js/plugins/elfinder.min.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/charts/chart.js"></script>

<!-- Disable links going to safari in web app mode -->
<script type="text/javascript">
var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName("a");for(var i=0;i<a.length;i++){if(a[i].className.match("noeffect")){}else{a[i].onclick=function(){window.location=this.getAttribute("href");return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}
</script>

</head>

<body>
<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="dash.php?appid=<?php echo $appid; ?>"><img src="apps/<?php echo $appid; ?>/icons/icon-72@2x.png" alt="" width="130" /></a></div>
    
    <div class="sidebarSep mt0"></div>
    
    <!-- Search widget -->
    <!--<form action="" class="sidebarSearch">
        <input type="text" name="search" placeholder="search..." id="ac" />
        <input type="submit" value="" />
    </form>-->
    
    <!--<div class="sidebarSep"></div>-->

    <!-- General balance widget -->
    <!--<div class="genBalance">
        <a href="#" title="" class="amount">
            <span>General balance:</span>
            <span class="balanceAmount">$10,900.36</span>
        </a>
        <a href="#" title="" class="amChanges">
            <strong class="sPositive">+0.6%</strong>
        </a>
    </div>-->
    
    <!-- Next update progress widget -->
    <!--<div class="nextUpdate">
        <ul>
            <li>Next update in:</li>
            <li>23 hrs 14 min</li>
        </ul>
        <div class="pWrapper"><div class="progressG" title="78%"></div></div>
    </div>-->
    
    <!--<div class="sidebarSep"></div>-->
    
    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li class="dash"><a href="dash.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='index.php') echo 'class="active"'; ?> ><span>Dashboard</span></a></li>
        <li class="settings"><a href="settings.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='settings.php') echo 'class="active"'; ?> ><span>Settings</span></a></li>
        <li class="devices"><a href="devices.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='devices.php') echo 'class="active"'; ?> ><span>Devices</span></a></li>
     <!--   <li class="charts"><a href="stats.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='stats.php') echo 'class="active"'; ?>><span>Statistics and charts</span></a></li> -->
        
        <li class="pushnotifications"><a href="#" title="" <?php if ($page=='pushapple.php' || $page=='pushgoogle.php') echo 'class="active exp" id="current"'; ?>class="exp"><span>Push Notifications</span><strong>2</strong></a>
            <ul class="sub">
                <li <?php if ($page=='pushapple.php') echo 'class="this"' ?>><a href="pushapple.php?appid=<?php echo $appid; ?>" title="Send to Apple Devices">Apple (iPhone & iPad)</a></li>
                <li <?php if ($page=='pushgoogle.php') echo 'class="this last"'; echo 'class="last"'; ?>class="last"><a href="#" title="Send to Android Devices">Google (Android)</a></li>
            </ul>
        </li>
        
       <!-- <li class="cal"><a href="calendar.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='calendar.php') echo 'class="active"'; ?>><span>Calendar</span></a></li>
        <li class="gal"><a href="gallery.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='gallery.php') echo 'class="active"'; ?>><span>Image Gallery</span></a></li> -->
        <li class="applist"><a href="applist.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='applist.php') echo 'class="active"'; ?>><span>My Apps</span></a></li>
        
    </ul>
</div>


<!-- Right side -->
<div id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Hello, <?php echo $_SESSION['username']; ?></span></div>
            <div class="userNav">
                <ul>
                
                <li class="dd"><a title="" class="noeffect"><img src="images/icons/light/computer.png" alt="" /><span>My Apps</span></a>
                	 <ul class="userDropdown">
                     <?php 
					 
                     $result = mysql_query('SELECT * FROM apps') or die(mysql_error());

					 while ($row = mysql_fetch_row($result))
						echo '<li><a href="'.$page.'?appid='.$row[0].'" title="" class="sApp">'.$row[0].'</a></li>';
					?>
			
                     </ul>
                </li>
                    <!--<li><a href="#" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/topnav/tasks.png" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="images/icons/topnav/messages.png" alt="" /><span>Messages</span><span class="numberTop">8</span></a>
                        <ul class="userDropdown">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>-->
                    
                    <li><a href="logout.php" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                    
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="dash.php?appid=<?php echo $appid; ?>" title=""><img src="apps/<?php echo $appid; ?>/icons/icon-72@2x.png" alt="" width="130" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="images/icons/light/home.png" alt="" />Client Dashboard</span>
            <ul class="smallDropdown">
            
            
            <li class="dash"><a href="dash.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='index.php') echo 'class="active"'; ?> ><span>Dashboard</span></a></li>
        <li class="devices"><a href="devices.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='devices.php') echo 'class="active"'; ?> ><span>Devices</span></a></li>
     <!--   <li class="charts"><a href="stats.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='stats.php') echo 'class="active"'; ?>><span>Statistics and charts</span></a></li> -->
        
        <li class="pushnotifications"><a href="#" title="" <?php if ($page=='pushapple.php' || $page=='pushgoogle.php') echo 'class="active exp" id="current"'; ?>class="exp"><span>Push Notifications</span><strong>2</strong></a>
            <ul class="sub">
                <li <?php if ($page=='pushapple.php') echo 'class="this"' ?>><a href="pushapple.php?appid=<?php echo $appid; ?>" title="Send to Apple Devices">Apple (iPhone & iPad)</a></li>
                <li <?php if ($page=='pushgoogle.php') echo 'class="this last"'; echo 'class="last"'; ?>class="last"><a href="#" title="Send to Android Devices">Google (Android)</a></li>
            </ul>
        </li>
        
       <!-- <li class="cal"><a href="calendar.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='calendar.php') echo 'class="active"'; ?>><span>Calendar</span></a></li>
        <li class="gal"><a href="gallery.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='gallery.php') echo 'class="active"'; ?>><span>Image Gallery</span></a></li> -->
        <li class="applist"><a href="applist.php?appid=<?php echo $appid; ?>" title="" <?php if ($page=='applist.php') echo 'class="active"'; ?>><span>My Apps</span></a></li>
        
        
                <!--<li><a href="index.html" title=""><img src="images/icons/light/home.png" alt="" />Dashboard</a></li>
                <li><a href="charts.html" title=""><img src="images/icons/light/stats.png" alt="" />Statistics and charts</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/pencil.png" alt="" />Forms stuff<strong>4</strong></a>
                    <ul>
                        <li><a href="forms.html" title="">Form elements</a></li>
                        <li><a href="form_validation.html" title="">Validation</a></li>
                        <li><a href="form_editor.html" title="">WYSIWYG and file uploader</a></li>
                        <li class="last"><a href="form_wizards.html" title="">Wizards</a></li>
                    </ul>
                </li>
                <li><a href="ui_elements.html" title=""><img src="images/icons/light/users.png" alt="" />Interface elements</a></li>
                <li><a href="tables.html" title="" class="exp"><img src="images/icons/light/frames.png" alt="" />Tables<strong>3</strong></a>
                    <ul>
                        <li><a href="table_static.html" title="">Static tables</a></li>
                        <li><a href="table_dynamic.html" title="">Dynamic table</a></li>
                        <li class="last"><a href="table_sortable_resizable.html" title="">Sortable &amp; resizable tables</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/fullscreen.png" alt="" />Widgets and grid<strong>2</strong></a>
                    <ul>
                        <li><a href="widgets.html" title="">Widgets</a></li>
                        <li class="last"><a href="grid.html" title="">Grid</a></li>
                    </ul>
                </li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/alert.png" alt="" />Error pages<strong>6</strong></a>
                    <ul class="sub">
                        <li><a href="403.html" title="">403 page</a></li>
                        <li><a href="404.html" title="">404 page</a></li>
                        <li><a href="405.html" title="">405 page</a></li>
                        <li><a href="500.html" title="">500 page</a></li>
                        <li><a href="503.html" title="">503 page</a></li>
                        <li class="last"><a href="offline.html" title="">Website is offline</a></li>
                    </ul>
                </li>
                <li><a href="file_manager.html" title=""><img src="images/icons/light/files.png" alt="" />File manager</a></li>
                <li><a href="#" title="" class="exp"><img src="images/icons/light/create.png" alt="" />Other pages<strong>3</strong></a>
                    <ul>
                        <li><a href="typography.html" title="">Typography</a></li>
                        <li><a href="calendar.html" title="">Calendar</a></li>
                        <li class="last"><a href="gallery.html" title="">Gallery</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    