
<?PHP

include_once 'functions.php';

echo "<h1>TOOLBOX Setup</h1><hr />";

echo "<h3>Creating table 'devices'...";
$query = "CREATE TABLE IF NOT EXISTS `devices` (
  `token` varchar(255) NOT NULL,
  `appname` varchar(127) NOT NULL,
  `appver` varchar(32) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(127) NOT NULL,
  `model` varchar(127) NOT NULL,
  `sysver` varchar(32) NOT NULL,
  `badge` tinyint(8) NOT NULL,
  `alert` varchar(127) NOT NULL,
  `sound` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$results = mysql_query($query);
if (!$results) die(mysql_error());
else echo "Done.</h3>";


echo "<h3>Creating table 'apps'...";
$query = "CREATE TABLE IF NOT EXISTS `apps` (
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`name`),
  KEY `app_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$results = mysql_query($query);
if (!$results) die(mysql_error());
else echo "Done.</h3>";


echo "<h3>Adding table 'users'...";
$query = "CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$results = mysql_query($query);
if (!$results) die(mysql_error());
else echo "Done.</h3>";

echo "<h3>Adding users 'admin & demo' to table 'users'...";
$query = "INSERT IGNORE INTO `users` (`name`, `pass`, `fullname`, `email`) VALUES 
('admin', 'passpush@07102013', 'Administrator', 'hieubd@gamesv.vn');";
$results = mysql_query($query);
if (!$results) die(mysql_error());
else echo "Done.</h3>";




echo "<hr /><p>Setup Finished.</p>";

?>
