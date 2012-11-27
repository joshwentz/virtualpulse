<?php
	
	echo '<p>New building input file started. <p/>';
	$IDFfile = $building . $userID;
	
	$fileHandle = fopen('./Buildings/'.$IDFfile.'.idf', "w") or die("VirtualPULSE could not create a building input file.  Please start over.");
	$dataString = 	
"Version, 7.1.0;   \n".
"  \n".
"Building,\n".
"  ".$building.",  !- Name \n".
"  0.0000,  !- North Axis [Sketchup Model North = True North]\n".
"  City,  !- Terrain [IDF Editor Default = City][Sketchup Default = Suburbs]\n".
"  0.0400,  !- Loads Convergence Tolerance Value [Watts]\n".
"  0.2000,  !- Temperature Convergence Tolerance Value [deg C]\n".
"  FullInteriorAndExterior,  !- Solar Distribution [Space must be convex for ext & int] \n".
"  25,  !- Max Number of Warmup Days \n".
"  6;  !- Min Number of Warmup Days \n".
"\n".
"GlobalGeometryRules,  !- Previously called SurfaceGeometry\n".
"  UpperLeftCorner,  !- Starting Vertex Position \n".
"  Counterclockwise,  !- Vertex Entry Direction \n".
"  Relative,  !- Coordinate System [IDF Editor Default = relative][Sketchup Default = WORLD]\n".
"  Relative;  !- Daylighting Reference Point Coordinate System \n".
"\n".
"SimulationControl, !- Previously called UseWeatherFile\n".
"  Yes,  !- Do Zone Sizing Calculation \n".
"  Yes,  !- Do System Sizing Calculation \n".
"  Yes,  !- Do Plant Sizing Calculation \n".
"  No,  !- Run Simulation for Sizing Periods \n".
"  Yes;  !- Run Simulation for Weather File Run Periods \n".
"  \n".
"RunPeriod,\n".
"  ,  !- Name [Default = weather file title]\n".
"  1, !- Begin Month  \n".
"  1, !- Begin Day of Month \n".
"  12, !- End Month \n".
"  31, !- End Day of Month \n".
"  Sunday;  !- Day of Week for Start Day \n".
" \n".
"OutputControl:Table:Style,\n".
"  HTML; !- Column Separator\n".
" \n".
"Output:Table:SummaryReports,\n".
"  AnnualBuildingUtilityPerformanceSummary,  !- Report Name\n".
"  InputVerificationandResultsSummary,  \n".
"  ClimaticDataSummary,         \n";
	
	fwrite($fileHandle, $dataString);
	fclose($fileHandle);
	
	echo "<p>Building Input File: ". $IDFfile . ".idf [created successfully]<p/>";
?>