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
		<a href="vis.php"><img src="myTravels.png" alt="MyTravels Logo"></a>
	</div>

	
	<div class="menu" id="mobileMenu"> <!--display the css menu, if width is below 480 px display mobile menu code used from https://www.w3schools.com/howto/howto_js_topnav_responsive.asp-->
		<a href="" class="">Home</a> <!-- https://www.w3schools.com/css/css_navbar.asp Navigation bar -->
		<a href="vis.php">Visualisation</a>
		<a href="report.php">Report</a>
		 
		</div>
		
	
	
	<br>
	<div class="content"> <!-- used for main content-->
	<center><h1>Report</h1>	</center>
	
		<h2>Contents</h2>
		<ul style = "list-style-type: none; font-size: 20px;">
			<li><b><a href="report.php#Goal">Goal</a></b></li>
			<li><b><a href="report.php#Requirements">Requirements</a></b></li>
			<li><b><a href="report.php#Audience">Audience</a></b></li>
			<li><b><a href="report.php#UserP">User Personas</a></b></li>
			<li><b><a href="report.php#UserJ">User Journeys</a></b></li>
			<li><b><a href="report.php#Design">Design Choices</a></b></li>
		
		</ul>
	
	<h2 id="Goal">Goal</h2>
		<b>To show that a countries tourism is directly related to the weather through data visualisation, in-order to help users identify when and where is the best time to travel.</b><br>
	<h2>Objectives</h2>
	<ol>
		<li><b>To have a user-friendly website.</b></li>
		<ol>
			<li>1. Create a website which is accessible to everyone.</li>
			<ul>
				<li>Create a responsive website with content that adjusts to screen size.</li>
				<li>Use colours which pass Website Content Accessibility Guideline tests.</li>
				<li>Use different colours for each chart to make the data easy to read</li>
				<li>Use alt tags for images.</li>
			</ul>
			<li>2. Provide feedback to the user.</li>
				<ul>
					<li>Use input buttons which provide feedback through a change in charts.</li>
				</ul>
		</ol>
		<br>
		<li><b>To guide the user towards understanding why tourism is popular during certain months through comparitive charts.</b></li>
				<ol>
					<li>Create compartive charts for weather and tourism for multiple countries.</li>
					<ul>
						<li> Create a chart for average monthly rainfall for countries.</li>
						<li> Create a chart for average monthly temperature for countries.</li>
						<li> Create a chart for average monthly tourism for countries.</li>
					</ul>
				</ol>
		</ol>
	</ol>
	<br>
	
	<h2 id="Requirements">Functional Requirements</h2>
	<b>F1. Create 3 comparitive charts for 3 different countries</b><br>
	<b>Need</b> - To provide the user with enough visual data to allow them to identify the trend between the weather and tourism.<br>
	<b>Verification</b> - Once three seperate charts are created for three different countries.
	<br><br>
	
	<b>F2. Allow for user input between each chart to change to 3 different cities within the country.</b><br>
	<b>Need</b> - To provide the user with enough visual data for each country to decide what city is most appropriate for them to visit.<br>
	<b>Verification</b> - If a user can select buttons to change the chart to 3 different cities for each country.<br>
	<br>
	<b>F3. Create 2 User Journeys</b><br>
	<b>Need</b> - To understand the steps each user may take when navigating the website.<br>
	<b>Verification</b> - Verified once two user journeys have been created.<br>
	<br>
	
	<h2> Non-Functional Requirements</h2>
	<b>NF1. Data visualisations are responsive to every screen size.</b><br>
	<b>Need</b> - To allow users to access the website on any device.<br>
	<b>Verification</b> - Once all charts adjust to a change in screensize.<br>
	<br>
	
	<b>NF2. To provide a response to user input within 10 seconds</b><br>
	<b>Need</b> - Enables efficient interaction between the user and the website.<br>
	<b>Verification</b> - If 5 seperate interactions provide a response to user input within 10 seconds.<br>
	<br>
	
	<h2 id="Audience">Audience</h2>
	
	The audience for the outlined goal are users who are deciding the best time to visit a country. They have the freedom to go on holiday at any time of the year. They will be aiming to understand why popular destinations are popular at certain times of the year.
	Some of the ideal audience members will be looking at the visualisations to see when is the least popular time to visit, to get cheaper and less busy holidays, although the visualisations will aim to show why it may not be a good time to visit a specific country/city
	at a specific time of the year.
	<br>
	The audience member will be unsure on what destination they would like to visit within a specific country and would like to see information on different cities within a country.
	They will be of any age range although the user will be someone who is organised and likes to do their research before selecting a holiday destination.
	<br>
	
	<h3>Behaviour patterns, psychology or characteristics of the user?</h3>
	
	The patterns of this user will be someone who likes to save money on their holidays, they also hate big crowds of people at their holiday destination and will therefore come to the dashboard to 
	gain an understanding as to when are the busiest times of the year. They do not mind going on holiday at any month of the year, as long as the weather is good as they want to use their opportunity to be in the sun.
	They have a motivation to find a holiday that provides good value for money.
	<br>
	
	<h3>User Needs</h3>
	
	<ul>
		<li>To be able to find a holiday that is not during the busiest time of the year but does not comprimise with the weather.</li>
		<li>To explore options between multiple countries and multiple cities to help with making a decision on the best holiday destination.</li>
		<li>To gain an understanding as to why certain countries/cities are busy during particular months.</li>
	</ul>
	
		
	<h3> User Issues</h3>
	<ul>
		<li>Over-crowded tourist destinations.</li>
		<li>Bad weather on holiday.</li>
		<li>Not knowing the best time of the year to visit a country/city.</li>
	</ul>
	<br>
	
	<h3 id="UserP">User Personas</h3>
	<center><img src="UP1.png" alt="User Persona 1" style="width:1300px; ">
	<br><br>
	<img src="UP2.png" alt="User Persona 2" style="width:1300px; "></center>
	
	
	
	<br>
	<h2 id="UserJ"> User Journeys</h2>
	In order to be able to design a dashboard, it is important to understand the journey each user will take when interacting with the website.<br>
	
	<h3>User Journey 1 - Anne </h3>
	Anne's user journey begins by accessing the home page where she selects the 'Visualisation' tab. She then proceeds to click on the 'Thailand' button and decides what country she would like to visit Phuket in Thailand by comparing the tourism
	and weather for each month. <br><br>
	
	<center><img src="User Journey 1.1.png" alt="User Journey 1 Part 1" style="width:500px; ">&nbsp;<img src="User Journey 1.2.png" alt="User Journey 1 Part 2" style="width:500px; " ></center>
		<br><br>
	<h3> User Journey 2 - Tom </h3>
	Tom's user journey commences through access to the home page where he selects the 'Visualisation' tab. He then selects the button for 'Spain' and compares the weather wit the tourist charts. 
	After searching he understands that he is unable to find a month where there is minimal rain and tourism. Therefore settles to visit Seville in May which has a small amount of rainfall, with slightly less tourism.
	<br><br><center><img src="User Journey 2.1.png" alt="User Journey 2 Part 1" style="width:500px; " >&nbsp;<img src="User Journey 2.2.png" alt="User Journey 2 Part 2"  style="width:500px; border:"></center>
	<br>
	<h2 id="Design">Design Choices</h2>
	This section will show a wireframe design of the website with an explanation of all the design choices.<br>
	<br>
	<h3>Wireframe</h3>
	<center><img src="wireframe.PNG" alt="Wireframe of dashboard" style="width:1000px; "></center>
	<br>
	<h3>Explanation of context and choices of dashboard design</h3>
	The dashboard was created with the goal: <b>To show that a countries tourism is directly related to the weather through data visualisation, in-order to help users identify when and where is the best time to travel.</b>	<br><br>
	<b>Charts</b><br><br>
	There was a design choice to always have two charts displayed at the same time to allow comparison of data to occur easily, therefore a user can quickly understand a correlation between weather and tourism, 
	without many steps. The charts were designed to be placed horizontally against each other to allow for comparison to be done easily on one screen, without the need for scrolling.<br>
	A choice to divide weather into multiple charts was made as weather contains many variables such as temperature and rainfall. For example with Thailand, the country has a warm climate but this is not the only factor
	for weather as the months which contain a low number of tourism, the country experiences a high amount of rainfall, therefore by providing data on rainfall, the user sees the whole picture.
	<br><br>
	All data was presented as an average over the years for each country, as temperature, rainfall and tourism varies over the months each year, therefore to most accurately present the information it was relevant to present data as an average.
	<br><br>
	With the temperature charts it was necessary to provide multiple plot points, displaying the minimum and maximum temperature for a month as temperature fluctuates throughout the month and it is important for users to understand the potential of change for temperature in each city.
	A decision was made to ensure the tourism chart is always on display on the dashboard, to allow the user to compare between different variables of the weather with the tourism numbers, as this was the main comparitive focus that was aimed to be established towards the user.
	To allow for the temperature chart and rainfall chart to be easily switched between each other, radio buttons were put in place. The design choice to use radio buttons was made to only allow the user to select one weather chart.
	<br><br>
	Each bar chart displays a value which is coloured in a contrasting red colour to make it easily identifiable to the user which month had the largest value for rainfall and tourism. To further aid this, a design choice to label the chart thoroughly was made to enable the user to understand
	each axis of the chart, containing the value in which the axis was being measured in, for example degrees celsius for temperature. Each chart contained a large title to make it easy for the user to distinguish between the charts and their data.
	<br>
	As the data which is displayed within the charts is quite large and could be difficult to see, a feature was implemented to allow users to see the exact number for each month by hovering over the plot point. This was implemented to make data easier to distinguish.
	<br><br>
	There was a legend provided for each chart, to enable users to understand the difference between data, particularly in the temperature chart which has two values, minimum and maximum temperature allowing for the two data sets to be easily distinguished. The legend was also designed to be
	interactive to allow for users to remove data points. For example if a user would like to only see the maximum temperature for a chart, they can press the value for minimum temperature in the legend to remove it temporarily from the chart.
	<br><br>
	Finally to improve user-friendliness and make the dashboard accessible, responsiveness was included throughout the dashboard. At first this responsiveness was coded using Javascript although this caused an error which
	made the charts blurry (see vis2.php in code folder for creation). Therefore the main dashboard was created using CSS inline styling (see Visualisation tab).
	Implementing the design choice to enable responsiveness allows users to access the website using multiple different devices.
	<br>
	<br>
	<b>Countries and Cities</b>
	<br><br>
	As part of the goal was to enable users to select a holiday destination with a time of year in mind, it was important to input multiple holiday destinations for the user to compare data against and to ultimately make their choice.
	To do this, a choice of three different countries was input, with each country containing data on three different cities.
	The user is presented with a choice of countries using radio buttons which have been styled using CSS to appear as buttons with the intention to make the dashboard more visually pleasing.
	Once the user has selected a country the dropdown box  populates the cities related to the country selected. The user will have a choice to select a city from the dropdown box to change their option and selecting 
	the 'Update Chart' button. <br>
	The design choice for the dropdown box was to allow the user to only choose one city, while varying the elements from using another set of radio buttons.
	<br><br>
	<b>Data Storage</b>
	<br><br>
	Data was stored using a SQL database to allow for data to be managed easily through SQL queries which are loaded through PHP which establishes a connection with the database. This also allows data to be stored securely through the use of password protection.<br>
	Another reason for the decision is also to allow for rapid scalability if the dashboard increases in the number of charts used.
	<br><br>
	<b>Website Design</b>
	<br><br>
	The website was designed to contain a simple theme to allow the users attention to draw towards the dashboard and the charts. All text, as well as the logo and the menu buttons were created in a left justified format, to comply with the standards of the English language of reading from left to right.
	<br>


	<br>
	<div class="footer"> <!--footer-->
	
	
	
	&copy; 2020 Tomasz Dobrowolski All Rights Reserved   &nbsp;
	
	</div>
	</div>
	
	
	</body>
</html>
		
		
		
