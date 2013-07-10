<?php include 'header.php'; ?>
    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Push Notifications</h5>
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
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Send Google Push Notification (GCM)</h6></div>
                    
                    <div class="formRow">
                        <label><img src="images/icons/color/balloon-ellipsis.png" alt="" class="labelImg tipS" title="Main notification text for the push message" />Notification Text:</label>
                        <div class="formRight"><textarea id="pushMessage" rows="8" cols="" name="growingTextarea" class="autoGrow lim validate[required]">Thank you for downloading our app!</textarea></div>
                        <div class="clear"></div>
                    </div>
                    
                   <div class="formRow">
                        <label><img src="images/icons/control/16/phone.png" alt="" class="labelImg tipS" title="This is a unique id for the users device" />Device ID:</label>
                        <div class="formRight"><input id="deviceID" type="text" value="APA91bENoyEOVGN4hFM581n3gTFvyIM5yrSGWodQV1g9vL-F9zHeJH8NkzeA19MbdCjr3_LzTSO5o_ihcn5ySxxasIthJwX6NDTj7cYJYhm2R3m2hIWrEbXGNw_ACN93CkpQEjH3kDF6" class="validate[required]" /></div>
                        <div class="clear"></div>
                    </div>
                    
                    
                    
                    <!-- Buttons with icons -->
                
                    <div class="body textC">
                        
                        <a id="sendGooglePush" title="" class="button greenB" style="margin: 5px;"><img src="images/icons/light/dialog.png" alt="" class="icon" /><span>Send Push Notifications!</span></a>
                    </div>
            
                
                   
            </fieldset>
            
            
        </form>
    
    </div>
    
<?php include 'footer.php'; ?>