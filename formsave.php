

<?php
//Speichern von Formularinhalten in einer Tabelle, also csv-Datei(sp�ter in der Datenbank)
$vname = $_POST["vname"];
$zname = $_POST["zname"];
$alter = $_POST["alter"];

$handle = fopen("csvformular.csv", "a+");//Datei wird ge�ffnet, Modus a+ = Lesen und Schreiben, Datei wird automatisch erstellt, Inhalte werden nicht �berschrieben(Dateizeiger am Ende)
	if (!$handle)
	{
	echo "Datei konnte nicht zum Schreiben ge�ffnet werden<p>"; //Konnte die Datei nicht ge�ffnet werden, erscheint ein Fehler
	exit; //Programm wird beendet
	}
	
	//Variablen sp�ter an HTML-Formular anpassen
	fwrite ($handle, $vname . ";" //Daten werden in die Datei geschrieben
					. $zname . ";"
					. $alter . ";\n");
	
			
	fclose($handle); //Datei wird wieder geschlossen
	
	echo("Danke, der Steckbrief von ".$vname." wurde gespeichert!");


?>