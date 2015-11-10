<?php
$db = file("csvformular.csv"); //CSV-Tabelle in Variable gespeichert

$id = fopen($db, "r"); //Datei öffnen

while ($data = fgetcsv($id, filesize($db))) //Schleife
	$table[] = $data; //setzt jede Zeile der Tabelle in ein Array
	fclose($id); //schließt die Datei
	
if 
