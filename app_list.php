<?php include 'template/header.php'; ?>
       <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Applications</h5>
                <span>This is a list of all your applications.</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
  	 <!-- Dynamic table -->
     <?php
		include_once 'functions.php';

		$result = mysql_query('SELECT * FROM apps') or die(mysql_error());

		echo '<div class="widget">
					<div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Application List</h6></div>';
					
		echo '<table cellpadding="0" cellspacing="0" border="0" class="display dTable">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Icon</th>';
			echo '<th>App Name</th>';
			//echo '<th>Comments</th>';
				  
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
		   
			while ($row = mysql_fetch_row($result))
			{
				echo '<tr class="gradeA">';
				echo '<td class="center"><a href="#"><img src="'. $row[2] .'" height="32"/></a></td>';
				echo '<td><a href="dash.php?appid='.$row[0].'"><h5>'. $row[0] .'</h5></a></td>';
				//echo '<td>' . $row[3] . '</td>';
				echo '</tr>';
			}
						
			echo '</tbody>';
			echo '</table>';
		echo '</div>';
					
	?>
    </div>  
    
<?php include("template/footer.php"); ?>