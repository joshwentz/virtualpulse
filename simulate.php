<html>
<h1>VirtualPULSE</h1>

<hr />
<p>SIMULATION STATUS</p>

<?php
	//CONNECT TO DATABASE
	require 'connection.php';
	
	echo '<pre>';
	
	//ADD USER
	$userQuery = "INSERT INTO users (eMail) VALUES('$_POST[eMail]')";
	if (!mysql_query($userQuery,$con))
	{
		die('Error: ' . mysql_error());
	}
	echo "<p>User Added [to database]<p/>";

	$result = mysql_query("SELECT * FROM users WHERE eMail='$_POST[eMail]'");
	$row = mysql_fetch_array($result);
	$userID = $row['userID'];

	//ADD BUILDING
	$buildingQuery = "INSERT INTO buildings (buildingName, userSubmitted, locationID, functionID, roofMaterial, wallMaterial, floors, floorArea, windowPercent)
	VALUES ('$_POST[buildingName]', $userID, $_POST[locationID], $_POST[functionID], NULL, NULL, $_POST[floors], $_POST[floorArea], $_POST[windowPercent])";
	if (!mysql_query($buildingQuery,$con))
	{
		die('Error: ' . mysql_error());
	}
	echo "<p>Building Added [to database]<p/>";
	
	//SELECT WEATHER FILE
	$result = mysql_query("SELECT * FROM locations WHERE locationID='$_POST[locationID]'");
	$row = mysql_fetch_array($result); 
	$city = $row['weatherFile'];
	echo "<p>Weather File: ".$city.".epw [from database]<p/>";
	
	$result = mysql_query("SELECT * FROM buildings WHERE buildingName='$_POST[buildingName]'");
	$row = mysql_fetch_array($result); 
	$building = $row['buildingName'];
	
	//CREATE NEW IDF FILE
	require 'newIDF.php';
	
	//RUN ENERGYPLUS (SHELL CODE)
	echo "<p>EnergyPlus Terminal Output...<p/>";
	ini_set('max_execution_time', 120); //120 seconds = 2 minutes

	echo '<hr />';

	chdir('EnergyPlus-7-1-0');
	chdir('bin');

	echo shell_exec('./runenergyplus ../../Buildings/' . $IDFfile . '.idf ../../Weather/' . $city . '.epw');
	
	echo '<hr />';
	echo '</pre>';
	
	// End Shell Code

	mysql_close($con);
	
	echo "<br/>";

	//DISPLAY SIMULATION RESULTS (ENERGYPLUS OUTPUT)
	echo "<a href='/V2/Buildings/Output/". $IDFfile ."Table.html' target='_blank'>Simulation Results</a>";
	echo "<br/>";

?>


</html>