

<?php
//Speichern von Formularinhalten in einer Tabelle, also csv-Datei(später in der Datenbank)
$vname = $_POST["vname"];
$zname = $_POST["zname"];
$alter = $_POST["alter"];

$handle = fopen("csvformular.csv", "a+");//Datei wird geöffnet, Modus a+ = Lesen und Schreiben, Datei wird automatisch erstellt, Inhalte werden nicht überschrieben(Dateizeiger am Ende)
	if (!$handle)
	{
	echo "Datei konnte nicht zum Schreiben geöffnet werden<p>"; //Konnte die Datei nicht geöffnet werden, erscheint ein Fehler
	exit; //Programm wird beendet
	}
	
	//Variablen später an HTML-Formular anpassen
	fwrite ($handle, $vname . ";" //Daten werden in die Datei geschrieben
					. $zname . ";"
					. $alter . ";\n");
	
			
	fclose($handle); //Datei wird wieder geschlossen
	
	echo("Danke, der Steckbrief von ".$vname." wurde gespeichert!");


?>