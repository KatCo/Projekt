

<?php
//Speichern von Formularinhalten in einer Tabelle, also csv-Datei(sp�ter in der Datenbank)
$name = $_POST["firstname"];
$geb = $_POST["birthdate"];
$hobby = $_POST["hobbys"];
$note = $_POST["note"];

$handle = fopen("csvformular.csv", "a+");//Datei wird ge�ffnet, Modus a+ = Lesen und Schreiben, Datei wird automatisch erstellt, Inhalte werden nicht �berschrieben(Dateizeiger am Ende)
	if (!$handle)
	{
	echo "Datei konnte nicht zum Schreiben ge�ffnet werden<p>"; //Konnte die Datei nicht ge�ffnet werden, erscheint ein Fehler
	exit; //Programm wird beendet
	}
	
	//Variablen sp�ter an HTML-Formular anpassen
	fwrite ($handle, $name . ";" //Daten werden in die Datei geschrieben
					. $geb . ";"
					. $hobby . ";"
					. $note . ";\n");
			
			
	
			
	fclose($handle); //Datei wird wieder geschlossen
	
	echo("Danke, der Steckbrief von ".$name." wurde gespeichert!");


?>

<!--
=== Feedback Alpers, Dez 3 ===

Sehr sch�n, dass Sie sich �ber die Inhalte der Veranstaltung hinaus mit dem Thema besch�ftigt haben.
Sie haben damit, mit Ihrer Dokumentation und mit den entwickelten Programmen gezeigt, dass Sie
im Stande sind, als vollwertiges Mitglied in einem Team zur Softwareentwicklung zu arbeiten.

=== Feedback Alpers, Ende ===