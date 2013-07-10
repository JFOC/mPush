
<?PHP

include_once 'functions.php';

//example URL:
//http://localhost/1box/DASHBOARD/savedevice.php?task=register&appname=devtest&appversion=1.0&deviceuid=9aa169690098de7fa0d2d686850ae4e02b004761&devicetoken=ea69617d0b24f5d9e42bf4b071fb7c6c68b4892392aa981a84a12459e1ce73d4&devicename=1box%25E2%2580%2599s%2520iPod&devicemodel=iPod%2520touch&deviceversion=6.0.1&pushbadge=enabled&pushalert=enabled&pushsound=enabled


//$_GET = json_decode(stripslashes(json_encode($_GET)), true);

echo $devicetoken = $_GET['devicetoken']; echo "<br>";
echo $appname = $_GET['appname']; echo "<br>";
echo $appversion = $_GET['appversion']; echo "<br>";
echo $deviceuid = $_GET['deviceuid']; echo "<br>";
//echo $devicename = str_replace('%27', "\'", urldecode($_GET['devicename'])); echo "<br>";
echo $devicename = urldecode($_GET['devicename']); echo "<br>";
echo $devicemodel = urldecode($_GET['devicemodel']); echo "<br>";
echo $deviceversion = $_GET['deviceversion']; echo "<br>";
echo $pushbadge = $_GET['pushbadge']; echo "<br>";
echo $pushalert = $_GET['pushalert']; echo "<br>";
echo $pushsound = $_GET['pushsound']; echo "<br>";
echo $devicewidth = $_GET['devicewidth']; echo "<br>";
echo $deviceheight = $_GET['deviceheight']; echo "<br>";


if (isset($devicetoken))
{
	$query = "INSERT INTO devices_ios 
		(token, appname, appver, uid, name, model, sysver, badge, alert, sound, devicewidth, deviceheight, installdate) VALUES(
		'$devicetoken', '$appname', '$appversion', '$deviceuid', '$devicename', '$devicemodel', '$deviceversion', '$pushbadge', '$pushalert', '$pushsound', '$devicewidth', '$deviceheight', NOW())";
		
	$results = mysql_query($query);
	if (!$results) die(mysql_error());
}

?>
