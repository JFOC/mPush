<?php include ("header.php"); 
$appid = $_GET['appid'];
?>

    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $appid ?> - Installed Devices</h5>
                <span>See whos devices your application is installed on.</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
  <?php

include_once 'functions.php';


$result = mysql_query("SELECT * FROM devices_ios WHERE appname='$appid'") or die(mysql_error());

echo '<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>iPhone & iPad Devices</h6></div>';
			
echo '<table cellpadding="0" cellspacing="0" border="0" class="display dTable">';
	echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
	echo '<th>Model</th>';
    echo '<th>App</th>';
    echo '<th>Ver.</th>';
/*  echo '<th>Token</th>';
	echo '<th>Badge</th>';
	echo '<th>Sound</th>';
	echo '<th>Alert</th>';*/
	echo '<th>Width</th>';
	echo '<th>Height</th>';
	echo '<th>Installed</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
   
    while ($row = mysql_fetch_row($result))
	{
		echo '<tr class="gradeA">';
		echo '<td class="center">'.$row[4].'</td>';
		echo '<td>'.$row[5].'</td>';
		echo '<td>'.$row[1].'</td>';
		echo '<td>'.$row[2].'</td>';
	/*	echo '<td>'.$row[0].'</td>';
		echo '<td>'.$row[7].'</td>';
		echo '<td>'.$row[8].'</td>';
		echo '<td>'.$row[9].'</td>';*/
		echo '<td>'.$row[10].'</td>';
		echo '<td>'.$row[11].'</td>';
		echo '<td>'.$row[12].'</td>';
		echo '</tr>';
	}
	            
    echo '</tbody>';
    echo '</table>';
echo '</div>';



$result = mysql_query("SELECT * FROM devices_android WHERE appname='$appid'") or die(mysql_error());

echo '<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Andoird Devices</h6></div>';
			
echo '<table cellpadding="0" cellspacing="0" border="0" class="display dTable">';
	echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
	echo '<th>Model</th>';
    echo '<th>App</th>';
    echo '<th>Ver.</th>';
	echo '<th>Token</th>';
	
	echo '<th>Badge</th>';
	echo '<th>Sound</th>';
	echo '<th>Alert</th>';
          
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
   
    while ($row = mysql_fetch_row($result))
	{
		echo '<tr class="gradeA">';
		echo '<td class="center">'.$row[4].'</td>';
		echo '<td>'.$row[5].'</td>';
		echo '<td>'.$row[1].'</td>';
		echo '<td>'.$row[2].'</td>';
		echo '<td>'.$row[0].'</td>';
		
		echo '<td>'.$row[7].'</td>';
		echo '<td>'.$row[8].'</td>';
		echo '<td>'.$row[9].'</td>';
		echo '</tr>';
	}
	            
    echo '</tbody>';
    echo '</table>';
echo '</div>';
			
?>
    
    </div>
    
<?php include("footer.php"); ?>