

<?php
//Speichern von Formularinhalten in einer Tabelle, also csv-Datei(sp�ter in der Datenbank)
$handle = fopen("csvformular.csv", "a+");//Datei wird ge�ffnet, Modus a+ = Lesen und Schreiben, Datei wird automatisch erstellt, Inhalte werden nicht �berschrieben(Dateizeiger am Ende)
	if (!$handle)
	{
	echo "Datei konnte nicht zum Schreiben ge�ffnet werden<p>"; //Konnte die Datei nicht ge�ffnet werden, erscheint ein Fehler
	exit; //Programm wird beendet
	}
	
	fwrite ($handle,  $_POST["vname"] . ";" //Daten werden in die Datei geschrieben
					. $_POST["zname"] . ";"
					. $_POST["m�nnl"] . ";"
					. $_POST["weibl"] . ";"
					. $_POST["alter"] . ";\n"
			

?>