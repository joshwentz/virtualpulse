<?php
	require 'connection.php';
?>
<html>
	<body>
		<h1>VirtualPULSE</h1>
		
		<form action="simulate.php" method="post">
		<fieldset>
		<legend>USER</legend>
		Email: <input type="text" name="eMail" /><br/>
		Building (name): <input type="text" name="buildingName" /><br/>
		</fieldset>
		<br/>
		
		<fieldset>
		<legend>LOCATION</legend>
		City, State: 
		<select name="locationID">
		<?php
			$result = mysql_query("SELECT * FROM locations ORDER BY Enabled DESC, State, City");
			while($row = mysql_fetch_array($result))
			{
				if ($row['Enabled'] == 1)
				{
					echo "\t<option value=" . $row['locationID'] . ">" . $row['city'] . ", " . $row['state'] . "</option>\n";
				}
				else
				{
					echo "\t<option value=" . $row['locationID'] . " disabled=\"disabled\">" . $row['city'] . ", " . $row['state'].  " - Unavailable"  . "</option>\n";
				}
			}
		?>
		</select><br/>
		</fieldset>
		<br/>
		
		<fieldset>
		<legend>FUNCTION &amp SIZE</legend>
		Type:
		<select name="functionID">
		<?php
			$result = mysql_query("SELECT * FROM functions ORDER BY Enabled DESC, functionType");
			while($row = mysql_fetch_array($result))
			{
				if ($row['Enabled'] == 1)
				{
					echo "\t<option value=" . $row['functionID'] . ">" . $row['functionType'] . "</option>\n";
				}
				else
				{
					echo "\t<option value=" . $row['functionID'] . " disabled=\"disabled\">" . $row['functionType'] . " - Unavailable" . "</option>\n";
				}
			}
		?>
		</select><br/>
		Floors: <input type="text" name="floors" /><br/>
		Area (total floor) [m<sup>2</sup>]: <input type="text" name="floorArea" /><br/>
		</fieldset>
		<br/>
		
		<fieldset>
		<legend>MATERIALS</legend>
		Roof:
		<select name="roofMaterial" disabled>
		</select><br/>
		Wall:
		<select name="wallMaterial" disabled>
		</select><br/>
		% Windows: <input type="text" name="windowPercent" /><br/>
		</fieldset>
		<br/>
		
		<input type="submit" />
		</form>

	</body>
</html>
<?php
	mysql_close($con);
?>