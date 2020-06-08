<?php
	include "connect.php";

?>
<!DOCTYPE html>

<html>
	<head>
		
		<title>Visualisation</title>
		<link rel="stylesheet" type="text/css" href="css/styling.css"> <!-- links to css-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
		
	</head>
	<body onload="javascript:spain();">
	
	<div class="wrapper">
	<div class="header"> 
		<a href="vis.php"><img src="myTravels.png" alt="MyTravels Logo"</a>
	</div>

	
	<div class="menu" id="mobileMenu"> <!--display the css menu, if width is below 480 px display mobile menu code used from https://www.w3schools.com/howto/howto_js_topnav_responsive.asp-->
		<a href="" class="">Home</a> <!-- https://www.w3schools.com/css/css_navbar.asp Navigation bar -->
		<a href="vis.php">Visualisation</a>
		<a href="report.php">Report</a>
		
	</div>
	
	
	<br><br>
	<div class="content"> <!-- used for main content-->
	
		
		
		<center>
			<div class="radioCountry" onclick= "">
				<input type="radio" id="spain" value="spain" name="country" onchange="javascript:spain()" checked>
				<label for="spain">Spain</label>
				<input type="radio" id="thailand" value="thailand" name="country" onchange="javascript:thailand()" >
				<label for="thailand">Thailand</label>
				<input type="radio" id="australia" value="australia" name="country" onchange="javascript:australia()">
				<label for="australia">Australia</label>
			</div>
		</center>
			
			<div id="container">
				<div id = "weatherDiv" style="position: relative; width: 40vw; height: 60vh; display:inline-block; left:5%;">
					<canvas id="weatherChart" class="canvas">
							

					</canvas>
				</div>
				<div id="tourismDiv" style="position: relative; width: 40vw; height: 60vh; display:inline-block; left: 5%">				
					<canvas id = "tourismChart" class="canvas">
					</canvas>
				</div>	
				
				<div class="weatherRadio" style="left: 20%; position:relative;">
						<input type="radio" id="temp" value="temperature" name="weather" onchange="javascript:collectData();" checked>
						<label for="temp">Temperature</label>
						<input type="radio" id="rain" value="rain" name="weather" onchange="javascript:collectData();">
						<label for="rain">Rainfall</label>
		</div>
				<center><div id="row" style="display:inline-block; ">
			</div>&nbsp;<button name="button" onclick="javascript:collectData()" style="width:150px; height:60px; background-color:#AFCEDD">Update Chart</button> 	</center>
			</div>	
			
	

	<br>
	<div class="footer"> <!--footer-->
	
	
	
	&copy; 2020 Tomasz Dobrowolski All Rights Reserved   &nbsp;
	
	</div>
	</div>
	
	
	</body>
</html>
		<?php
			$tableName = array ("temperaturemin", "temperaturemax", "rainfall");
			$city =  array ("Barcelona", "Madrid", "Seville", "Bangkok", "Chiang Mai", "Phuket", "Sydney", "Melbourne", "Perth");
			$country = array("Spain", "Thailand", "Australia");
			
			$monthArray = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

			$label = "'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'";

			$avgArray = array ();
			$weather00 = "";
			$weather01 = "";
			$weather02 = "";
			$weather03 = "";
			$weather04 = "";
			$weather05 = "";
			$weather06 = "";
			$weather07 = "";
			$weather08 = "";
			$weather10 = "";
			$weather11 = "";
			$weather12 = "";
			$weather13 = "";
			$weather14 = "";
			$weather15 = "";
			$weather16 = "";
			$weather17 = "";
			$weather18 = "";
			$weather20 = "";
			$weather21 = "";
			$weather22 = "";
			$weather23 = "";
			$weather24 = "";
			$weather25 = "";
			$weather26 = "";
			$weather27 = "";
			$weather28 = "";
			
			$tourism0 = "";
			$tourism1 = "";
			$tourism2 = "";
			
			for ($i = 0; $i < 3; $i++){
				for ($j = 0; $j < 9; $j++ ){	
					for ($k = 0; $k < 12; $k++){
						$sqlWeather =  "SELECT * FROM ".$tableName[$i]." WHERE City = '".$city[$j]."';";
						$result = mysqli_query($con, $sqlWeather);
						$row = mysqli_fetch_array($result);
						${"weather$i$j"} = ${"weather$i$j"}."'".$row[$monthArray[$k]]."',";
						
					}
					${"weather$i$j"} = trim(${"weather$i$j"},",");
						
				}
			}
			
			
			
			for ($l = 0; $l < 3; $l++){
				for ($m = 0; $m < 12; $m++){
					$sqlTourism = "SELECT * FROM tourism WHERE Country = '".$country[$l]."';";
					$result = mysqli_query($con, $sqlTourism);
					$row = mysqli_fetch_array($result);
					${"tourism$l"} = ${"tourism$l"}."'".$row[$monthArray[$m]]."',";
				}
				${"tourism$l"} = trim(${"tourism$l"},",");
			}
			
				$c = 0;
				$d = 1;
				/*for ($e = 0; $e < 9; $e++){
					$av = (${"weather$c$e"} + ${"weather$d$e"});
					$avg = $av/2;
				}*/
		
			
		
		?>
		
		<script type="text/javascript" >
			
			cityArray = ["Barcelona", "Madrid", "Seville", "Bangkok", "Chiang Mai", "Phuket", "Sydney", "Melbourne", "Perth"];
			
			function spain(){
				document.getElementById("row").innerHTML = "<select id='cities' style='width:150px; height: 60px;'><option value='Barcelona'>Barcelona</option><option value='Madrid'>Madrid</option><option value='Seville'>Seville</option></select>"
				collectData();
			}
			function thailand(){
				document.getElementById("row").innerHTML = "<select id='cities' style='width:150px; height: 60px;'><option value='Bangkok' >Bangkok</option><option value='Chiang Mai'>Chiang Mai</option><option value='Phuket'>Phuket</option></select>"
				collectData();
			}
			function australia(){
				document.getElementById("row").innerHTML = "<select id='cities' style='width:150px; height: 60px;'><option value='Sydney'>Sydney</option><option value='Melbourne'>Melbourne</option><option value='Perth'>Perth</option>";
				collectData();
			}
			
			
			function collectData(){
				city = document.getElementById("cities").value;
				
				
				if (city == "Barcelona"){
					data1 = [<?php echo $weather00?>];
					data2 = [<?php echo $weather10?>];
					data3 = [<?php echo $weather20?>];
					data4 = [<?php echo $tourism0?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','blue','blue','blue','red','blue','blue'];
					colour4 = ['green','green','green','green','green','green','green','red','green','green','green','green'];
				}
				else if (city == "Madrid"){
					data1 = [<?php echo $weather01?>];
					data2 = [<?php echo $weather11?>];
					data3 = [<?php echo $weather21?>];
					data4 = [<?php echo $tourism0?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','blue','blue','blue','red','blue','blue'];
					colour4 = ['green','green','green','green','green','green','green','red','green','green','green','green'];
				
				}
				if (city == "Seville"){
					data1 = [<?php echo $weather02?>];
					data2 = [<?php echo $weather12?>];
					data3 = [<?php echo $weather22?>];
					data4 = [<?php echo $tourism0?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','blue','blue','blue','red','blue','blue'];
					colour4 = ['green','green','green','green','green','green','green','red','green','green','green','green'];
				
				}
				else if (city == "Bangkok"){
					data1 = [<?php echo $weather03?>];
					data2 = [<?php echo $weather13?>];
					data3 = [<?php echo $weather23?>];
					data4 = [<?php echo $tourism1?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','blue','blue','red','blue','blue','blue'];
					colour4 = ['green','green','green','green','green','green','green','green','green','green','green','red'];
				
				}
				else if (city == "Chiang Mai"){
					data1 = [<?php echo $weather04?>];
					data2 = [<?php echo $weather14?>];
					data3 = [<?php echo $weather24?>];
					data4 = [<?php echo $tourism1?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','blue','red','blue','blue','blue','blue'];
					colour4 = ['green','green','green','green','green','green','green','green','green','green','green','red'];
				
				}
				else if (city == "Phuket"){
					data1 = [<?php echo $weather05?>];
					data2 = [<?php echo $weather15?>];
					data3 = [<?php echo $weather25?>];
					data4 = [<?php echo $tourism1?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','blue','blue','red','blue','blue','blue'];
				
					colour4 = ['green','green','green','green','green','green','green','green','green','green','green','red'];
				
				}
				else if (city == "Sydney"){
					data1 = [<?php echo $weather06?>];
					data2 = [<?php echo $weather16?>];
					data3 = [<?php echo $weather26?>];
					data4 = [<?php echo $tourism2?>];
					colour3 = ['blue','blue','blue','blue','blue','red','blue','blue','blue','blue','blue','blue'];
					colour4 = ['green','green','green','green','green','green','green','green','green','green','green','red'];
				
				}
				else if (city == "Melbourne"){
					data1 = [<?php echo $weather07?>];
					data2 = [<?php echo $weather17?>];
					data3 = [<?php echo $weather27?>];
					data4 = [<?php echo $tourism2?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','blue','blue','blue','blue','red','blue'];
				
					colour4 = ['green','green','green','green','green','green','green','green','green','green','green','red'];
				
				}
				else if (city == "Perth"){
					data1 = [<?php echo $weather08?>];
					data2 = [<?php echo $weather18?>];
					data3 = [<?php echo $weather28?>];
					data4 = [<?php echo $tourism2?>];
					colour3 = ['blue','blue','blue','blue','blue','blue','red','blue','blue','blue','blue','blue'];
		
					colour4 = ['green','green','green','green','green','green','green','green','green','green','green','red'];
				
				}
				
				
				if (document.getElementById("rain").checked){
					rainChart(data3);
				}
				else{
					tempChart(data1, data2);
				}
				tourismChart(data4);
				
			}
			
			
			function tempChart(data1, data2){
				weatherSize = document.getElementById("weatherChart");
			
			
			
				document.getElementById("weatherChart").innerHTML = "";
			
				if (typeof(temperaChartF) !== 'undefined'){
					temperaChartF.destroy();
				}
				if (typeof(rainedFinal) !== 'undefined'){
					rainedFinal.destroy();
				}
				
				
				var tempedChart = document.getElementById('weatherChart').getContext('2d');
				var tempData = {
					type: 'line',
					data: {
						labels: [<?php echo $label?>],
						datasets: [{
							label: 'Min Temperature',
							data: data1,
							fill: false,
							backgroundColor: 'blue',
							borderColor : 'blue',
							 
						},
						{
							label: 'Max Temperature',
							data: data2,
							fill: false,
							backgroundColor: 'red',
							borderColor : 'red',
						},
						
						],
					},
					options: {
						responsive: true,
						maintainAspectRatio: true,
						title: {
							display: true,
							text: 'Average Temperature Per Month (degrees celsius)',
							fontSize: 20,
						},
						legend:{
							display: true,
						
						},
						scales:{
							yAxes:[{
								scaleLabel: {
								display: true,
								labelString: 'Average Temperature (degrees celsius)',
								fontSize: 15,
								},
								ticks: {
									beginAtZero: true,
									
								}
							}],
							xAxes:[{
								scaleLabel: {
								display: true,
								labelString: 'Month',
								fontSize: 15,
								},
							}]
						}
						
					}
					
				
					
				}
			
				
				Chart.defaults.global.defaultFontFamily = 'Sans Seriff';

				 temperaChartF = new Chart(tempedChart, tempData);

			
		
			}
			
			function rainChart(data3){
				weatherSize = document.getElementById("weatherChart");
			
			
				document.getElementById("weatherChart").innerHTML = "";
				if (typeof(temperaChartF) !== 'undefined'){
					temperaChartF.destroy();
				}
				if (typeof(rainedFinal) !== 'undefined'){
					rainedFinal.destroy();
				}
				
				
					var rainedChart = document.getElementById('weatherChart').getContext('2d');
					var rainData = {
						type: 'bar',
						data: {
							labels: [<?php echo $label?>],
							datasets: [{
								label: 'Rain',
								data: data3,
								backgroundColor: colour3, borderWidth: 2,
								borderColour : 'grey', hoverBorderColor: 'black'
							},
			
							
							],
						},
						options: {
						responsive: true,
							maintainAspectRatio: true,
							title: {
								display: true,
								text: 'Average Rainfall Per Month (mm)',
								fontSize: 20,
							},
							legend:{
								display: true,
							
							},
							scales:{
								yAxes:[{
								scaleLabel: {
								display: true,
								labelString: 'Average Rainfall (mm)',
								fontSize: 15,
								},
								ticks: {
									beginAtZero: true,
									
								}
							}],
							xAxes:[{
								scaleLabel: {
								display: true,
								labelString: 'Month',
								fontSize: 15,
								},
							}]
						}
							
						}
					}
				Chart.defaults.global.defaultFontFamily = 'Sans Seriff';

				rainedFinal =  new Chart(rainedChart, rainData);
				
			
			
			}
			
			function tourismChart(data4){
				tourismSize = document.getElementById("tourismChart");
			
					tourismSize.style.position = "relative";
					tourismSize.style.height = "40vh";
					tourismSize.style.width = "60vw";
				
				if (typeof(tourismFinal) !== 'undefined'){
					tourismFinal.destroy();
				}
				
					var tourismChart = document.getElementById('tourismChart').getContext('2d');
					var tourData = {
						type: 'bar',
						data: {
							labels: [<?php echo $label?>],
							datasets: [{
								label: 'Tourists',
								data: data4,
								backgroundColor: colour4, borderWidth: 2,
								borderColour : 'grey', hoverBorderColor: 'black'
							},
			
							
							],
						},
						options: {
							responsive: true,
							maintainAspectRatio: true,
							title: {
								display: true,
								text: 'Average Number of Tourists Per Month',
								fontSize: 20,
							},
							legend:{
								display: true,
							
							},
							scales:{
								yAxes:[{
								scaleLabel: {
								display: true,
								labelString: 'Average Number of Tourists',
								fontSize: 15,
								},
								ticks: {
									beginAtZero: true,
									
								}
							}],
							xAxes:[{
								scaleLabel: {
								display: true,
								labelString: 'Month',
								fontSize: 15,
								},
							}]
						}
							
						}
					}
				Chart.defaults.global.defaultFontFamily = 'Sans Seriff';

				tourismFinal = new Chart(tourismChart, tourData);
				
			
			
			}
			
		</script>
		<script type="text/javascript" src="js/Style.js">
			
		</script>
		
		
