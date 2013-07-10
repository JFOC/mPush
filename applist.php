<?php include 'header.php'; ?>
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
     <?php include ("getapps.php"); ?>
    </div>  
    
<?php include("footer.php"); ?>