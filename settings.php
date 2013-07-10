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
    
      <form action="" class="form">
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Google Analytics Settings</h6></div>
                   
                    <?php 
                    $result = mysql_query("SELECT * FROM settings WHERE settings_app='$appid' ORDER BY settings_weight") or die(mysql_error());
                    while ($row = mysql_fetch_row($result))
					{
						echo '<div class="formRow">
									<label>'.$row[4].'</label>
						            <div class="formRight"><input id="'.$row[0].'" type="text" value="'.$row[1].'" /></div>
						            <div class="clear"></div>
						      </div>';
					}
					?>
                    
                </div>
            </fieldset>
            
            <a href="#" id="saveSettings" title="" class="button basic" style="margin: 5px;"><img src="images/icons/updateDone.png" alt="" class="icon" /><span>Save Settings</span></a>
            <div id="loading" align="center"></div>
            
            <!--
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>General Settings</h6></div>

                    
                    <div class="formRow">
                        <label>Usual text input:</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label for="labelFor">Label for attribute</label>
                        <div class="formRight"><input type="text" id="labelFor" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Password input</label>
                        <div class="formRight"><input type="password" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Text input with notice:</label>
                        <div class="formRight"><input type="text" value="" /><span class="formNote">This is a sample note</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Read only input</label>
                        <div class="formRight"><input type="text" readonly="readonly" value="Read only" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Disabled text input</label>
                        <div class="formRight"><input type="text" disabled="disabled" value="Disabled field" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input with placeholder</label>
                        <div class="formRight"><input type="text" placeholder="Text input placeholder attribute" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input field with value</label>
                        <div class="formRight"><input type="text" value="This is the value" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input with tooltip:</label>
                        <div class="formRight"><input type="text" value="" title="Awesome stuff" class="tipN" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input with max characters:</label>
                        <div class="formRight"><input type="text" value="" maxlength="10" placeholder="Max 10 characters here" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                    	<label><img src="images/icons/dark/stats.png" alt="" class="labelImg tipS" title="Some title..." />With icons:</label>
                        <div class="formRight"><input type="text" value="" /><a href="#" title=""><img src="images/icons/dark/download.png" alt="" class="inputImg tipS" title="Some title..." /></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow dnone">
                    	<label>Inputs grid:</label>
                        <div class="formRight">
                            <span class="oneTwo"><input type="text" value="one two" /></span>
                            <span class="oneTwo"><input type="text" value="one two" /></span>
                        </div>
                        <div class="formRight mt12">
                            <span class="oneThree"><input type="text" value="one three" /></span>
                            <span class="oneThree"><input type="text" value="one three" /></span>
                            <span class="oneThree"><input type="text" value="one three" /></span>
                        </div>
                        <div class="formRight mt12">
                            <span class="oneFour"><input type="text" value="one four" /></span>
                            <span class="oneFour"><input type="text" value="one four" /></span>
                            <span class="oneFour"><input type="text" value="one four" /></span>
                            <span class="oneFour"><input type="text" value="one four" /></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Usual textarea:</label>
                        <div class="formRight"><textarea rows="8" cols="" name="textarea"></textarea></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Autogrowing textarea:</label>
                        <div class="formRight"><textarea rows="8" cols="" name="growingTextarea" class="autoGrow"></textarea></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input limiter:</label>
                        <div class="formRight"><textarea rows="8" cols="" name="growingTextarea" class="autoGrow lim" placeholder="Type something"></textarea></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label for="tags">Tags:</label>
                        <div class="formRight"><input type="text" id="tags" name="tags" class="tags" value="these,are,sample,tags" /></div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
            </fieldset>-->
            
      </form>       
    
    </div>
    
<?php include("footer.php");