<?php include 'header.php'; 
$appid = $_GET['appid'];
?>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $appid; ?> Dashboard</h5>
                <span>Check statistics, update your calendar and send push notifications.</span>
            </div>
            
            
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Page statistics and control buttons area -->
    <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    
                    <li><a href="stats.php?appid=<?php echo $appid; ?>" title=""><img src="images/icons/control/32/statistics.png" alt="" /><span>Check statistics</span></a></li>
                    <li><a href="pushapple.php?appid=<?php echo $appid; ?>" title=""><img src="images/icons/control/32/comment.png" alt="" /><span>Push Notifications</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/control/32/calendar.png" alt="" /><span>Update Calendar</span></a></li>
                    <li><a href="#" title=""><img src="images/icons/control/32/photography.png" alt="" /><span>Image Gallery</span></a></li>
                    
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
     <form id="validate" action="" class="form">
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Quick Push Notification</h6></div>
                    
                    <div class="formRow">
                        <label><img src="images/icons/color/balloon-ellipsis.png" alt="" class="labelImg tipS" title="Main notification text for the push message" />Notification Text:</label>
                        <div class="formRight"><textarea id="pushMessage" rows="8" cols="" name="growingTextarea" class="autoGrow lim validate[required]">Thank you for downloading our app!</textarea></div>
                        <div class="clear"></div>
                    </div>
                                                            
                    <input id="appID" type="hidden" value="<?php echo $appid; ?>">
                                        
                    <!-- Buttons with icons -->
                    <div class="body textC">
                        
                        <a href="#" id="sendApplePush" title="" class="button greenB" style="margin: 5px;"><img src="images/icons/light/dialog.png" alt="" class="icon" /><span>Send Push Notifications!</span></a>
                    </div>
            </fieldset>
        </form>
       
    
    </div>
    
<?php include("footer.php");