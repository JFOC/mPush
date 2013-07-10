<?php include("header.php"); ?>

    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Push Notifications</h5>
                <span>Send out push notifications to your users devices</span>
            </div>
            <!--<div class="middleNav">
                <ul>
                    <li class="mUser"><a title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                            <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">Closed tickets</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="Or you can use a tooltip" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
                        <ul class="mSub4">
                            <li><a href="#" title="">Pending uploads</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Trash</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>-->
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
    
     <button id="authorize-button" style="visibility: hidden">
        Authorize Analytics</button>

	  <!-- Div element where the Analytics Charts will be placed -->
	  <h2>Region</h2><br />
	  <div id="chart_div" style="width: 95%;"></div><br />
	  <br />
  
	  <h2>Total App Launches</h2><br />
	  <div id='ga_totalvisits'></div><br />
	  <br />


	  <h2>Visits last 30 days</h2><br />
	  <div id='ga_visitors'></div><br />
	  <br />
	  <h2>Mobile device platforms</h2><br />
	  <div id='ga_deviceModel'></div><br />
	  <br />


	  <!-- Load all Google JS libraries -->
	  <script src="https://www.google.com/jsapi"></script>
	  <script src="js/gadash-1.0.js"></script>
	  <script src="https://apis.google.com/js/client.js?onload=gadashInit"></script>
	  <script>
	    // Configure these parameters before you start.
	    var API_KEY = 'AIzaSyDa7RZGCSIDA9fsso6fCde5jF_tUifnXvI';
	    var CLIENT_ID = '497633112750-anbh850rjmjfe5ps1jnm7i5dbtcmkqe1.apps.googleusercontent.com';
	    var TABLE_ID = 'ga:67863861';
	    // Format of table ID is ga:xxx where xxx is the profile ID.
	
	    gadash.configKeys({
	      'apiKey': API_KEY,
	      'clientId': CLIENT_ID
	    });
	
	    // Create a new Chart that queries visitors for the last 30 days and plots
	    // visualizes in a line chart.
	    var chart1 = new gadash.Chart({
	      'type': 'LineChart',
	      'divContainer': 'ga_visitors',
	      'last-n-days':30,
	      'query': {
	        'ids': TABLE_ID,
	        'metrics': 'ga:visitors',
	        'dimensions': 'ga:date'
	      },
	      'chartOptions': {
	        //height:600,
	        width: "95%",
	        title: 'Visits in last 30 days',
	        hAxis: {title:'Date'},
	        vAxis: {title:'Visits'},
	        curveType: 'function'
	      }
	    }).render();
	    
	    // Mobile device platforms
	    var chart2 = new gadash.Chart({
	      'type': 'Table',
	      'divContainer': 'ga_deviceModel',
	      'last-n-days':30,
	      'query': {
	        'ids': TABLE_ID,
	        'metrics': 'ga:visitors',
	        'dimensions': 'ga:mobileDeviceInfo,ga:operatingSystemVersion,ga:screenResolution'
	      },
	      'chartOptions': {
	        //height:600,
	        width: "95%",
	        title: 'Mobile Device Model',
	        hAxis: {title:'Date'},
	        vAxis: {title:'Visits'},
	        curveType: 'function'
	      }
	    }).render();
	    
	    // Mobile device platforms
	    var chart3 = new gadash.Chart({
	      'type': 'LineChart',
	      'divContainer': 'ga_totalvisits',
	      'last-n-days':99,
	      'query': {
	        'ids': TABLE_ID,
	        'metrics': 'ga:visits',
	        'dimensions': 'ga:date'
	      },
	      'chartOptions': {
	        //height:600,
	        width: "95%",
	        title: 'Total App Launches',
	        hAxis: {title:'Date'},
	        vAxis: {title:'Visits'},
	        curveType: 'function'
	      }
	    }).render();
	    
	    
	    
	    google.load('visualization', '1', {'packages': ['geochart']});
     google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 900]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    };
    
	  </script>
  
    
   
    </div>
    
<?php include("footer.php");