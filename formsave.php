

<?php
//Speichern von Formularinhalten in einer Tabelle, also csv-Datei(später in der Datenbank)
$handle = fopen("csvformular.csv", "a+");//Datei wird geöffnet, Modus a+ = Lesen und Schreiben, Datei wird automatisch erstellt, Inhalte werden nicht überschrieben(Dateizeiger am Ende)
	if (!$handle)
	{
	echo "Datei konnte nicht zum Schreiben geöffnet werden<p>"; //Konnte die Datei nicht geöffnet werden, erscheint ein Fehler
	exit; //Programm wird beendet
	}
	
	fwrite ($handle,  $_POST["vname"] . ";" //Daten werden in die Datei geschrieben
					. $_POST["zname"] . ";"
					. $_POST["männl"] . ";"
					. $_POST["weibl"] . ";"
					. $_POST["alter"] . ";\n"
			

?>