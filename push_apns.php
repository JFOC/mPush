<?php include("header.php"); 
if (isset($_GET['appid'])) $appid = $_GET['appid'];
?>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $appid; ?> - Push Notifications</h5>
                <span>Send out push notifications to your users devices</span>
            </div>
         
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
                
       <!-- Form -->
        <form id="validate" action="" class="form">
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Send Apple Push Notification (APNS)</h6></div>
                    
                    <div class="formRow">
                        <label><img src="images/icons/color/balloon-ellipsis.png" alt="" class="labelImg tipS" title="Main notification text for the push message" />Notification Text:</label>
                        <div class="formRight"><textarea id="pushMessage" rows="8" cols="" name="growingTextarea" class="autoGrow lim validate[required]">Thank you for downloading our app!</textarea></div>
                        <div class="clear"></div>
                    </div>
                    
                    <!--<div class="formRow">
                        <label><img src="images/icons/color/star.png" alt="" class="labelImg tipS" title="Icon used for notifcation" />Select Badge Icon:</label>
                        <div class="formRight">
                            <select name="select2" id="badgeNumber">
                                <option value="1">Badge Icon 1</option>
                                <option value="2">Badge Icon 2</option>
                                <option value="3">Badge Icon 3</option>
                                <option value="4">Badge Icon 4</option>
                                <option value="5">Badge Icon 5</option>
                                <option value="6">Badge Icon 6</option>
                                <option value="7">Badge Icon 7</option>
                                <option value="8">Badge Icon 8</option>
                            </select>           
                        </div>             
                        <div class="clear"></div>
                    </div>-->
                    
                    
                    <div class="formRow">
                        <label><img src="images/icons/color/hand-point-090.png" alt="" class="labelImg tipS" title="This button opens your application when clicked" />Action Button Text:</label>
                        <div class="formRight"><input id="actionText" type="text" value="View Special Offers!" class="validate[required]"/>
                        <input id="appID" type="hidden" value="<?php echo $appid; ?>"></div>
                        <div class="clear"></div>
                    </div>
                    
                                          
                    
                    <!--<div class="formRow">
                        <label><img src="images/icons/control/16/phone.png" alt="" class="labelImg tipS" title="This is a unique id for the users device" />Device ID:</label>
                        <div class="formRight"><input id="deviceID" type="text" value="ea69617d0b24f5d9e42bf4b071fb7c6c68b4892392aa981a84a12459e1ce73d4" class="validate[required]"/></div>
                        <div class="clear"></div>
                    </div>-->
               
                    
                    <!-- Buttons with icons -->
                    <div class="body textC">
                        
                        <a href="#" id="sendApplePush" title="" class="button greenB" style="margin: 5px;"><img src="images/icons/light/dialog.png" alt="" class="icon" /><span>Send Push Notifications!</span></a>
                    </div>
            
            </fieldset>
            
            
        </form>
        
        <br />
        <div id="loading" align="center"></div>
    
    </div>
    
<?php include("footer.php"); ?>