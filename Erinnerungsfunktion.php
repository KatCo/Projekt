<?php
//date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$datum = date("d.m.Y", $timestamp);
$datei = fopen("csvformular.csv", "r");

while($zeile = fgets($datei, 1024)){
	$spalten = explode(";", $zeile);

	echo $spalten[2];
}
	


	
fclose($datei);

  
?>
  
  
	

