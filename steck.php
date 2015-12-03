<?php
SESSION_START();
// Anzeigen der CSV-Inhalte
$datei = fopen("csvformular.csv", "r"); //Datei zum lesen �ffnen
$csv = array(); 						//anlegen eines Arrays

while(($data = fgetcsv($datei, 1000, ";")) !== FALSE) { //while-schleife zum bef�llen des Arrays
	 $csv[] = $data;					//Mehrdimensionales Array
	//var_dump($data); 					//Inhalte des Arrays anzeigen

			
			
}
//Schleife mit Namen und Logo funktioniert --> Speichern der Variable in SESSION noch nicht (zeigt auf Folgeseite immer den Namen des letzten Datensatzes an)

/*
=== Feedback Alpers, Dez 3 ===

Der Grund f�r das Problem ist relativ simpel: Zwar haben Sie das Konditional f�r die Iteration richtig gesetzt,
aber danach weisen Sie die gesamte Datei bis zum n�chsten Semikolon (in anderen Worten eine Zeile des CSV-Dokuments)
als Wert $csv[] zu.

Mich wundert hier vielmehr, dass nicht jedes Mal die letzte (statt der ersten) Zeile des Array in $csv[] gespeichert wird.

Ein passendes Beispiel, dass Sie fast 1:1 kopieren k�nnen finden Sie hier:
http://php.net/manual/de/function.fgetcsv.php

=== Feedback Alpers, Ende ===
*/

foreach ($csv as list($csv2)) { 				//Auslesen der ersten Variable des jeweiligen Datensatzes
//	foreach ($csv2 as $csv3) { 					//Auslesen des kompletten Arrays
		$_SESSION['name'] = $csv2;				// Variable in Session speichern um sie auf Folgeseite wieder abrufen zu k�nnen
												//Dort wird die gespeicherte Namenvariable mit den Namen in der Datenbank verglichen und
												//anschlie�end soll der dazugeh�rige Datensatz wieder ausgegeben werden(Steckbriefseite)
		echo "HTML-CODE mit Logo und Verlinkung"; //Ausgeben eines Logos, Verlinkung auf Steckbrief
		echo	"<p>$csv2</p>"; 				//Ausgeben der ersten Variable -> Name
		
	}
	
/*
=== Feedback Alpers, Dez 3 ===

Typischer Anf�ngerfehler bez�glich der Nutzung von Kommentaren in Quellcode:
Kommentare sollen hier verdeutlichen, welche Aufgabe ein Teil des Programms �bernimmt.
Das die foreach-Iteration beispielsweise in der ersten Zeile eine Variable ausliest ist jedem Softwareentwickler klar.
Wenn dagegen nicht eindeutig erkennbar ist, warum es diese Iteration �berhaupt gibt, dann sollte das in einem kurzen Kommentar
dazu geschrieben werden.

Kommentare wie Ihre finden sich meist in Lehrb�chern, damit Einsteiger den Ablauf eines Algorithmuses leichter
nachvollziehen k�nnen.

=== Feedback Alpers, Ende ===
*/

//Ausgabe durch Ansprechen des entsprechenden Array-Indexes/ Erste Stelle bezieht sich auf den Datensatz/ zweite Stelle auf jeweilige Variable im Datensatz
/*			echo "<p>Steckbrief</p>";
			echo "<p>Name: ".$csv[0][0]."</p>";
			echo "<p>Geburtstag: ".$csv[0][1]."</p>";
			echo "<p>Interessen: ".$csv[0][2]."</p>";
			echo "<p>Anmerkungen: ".$csv[0][3]."</p>";
	
    
*/
 fclose($datei); // Schlie�en der Datei

  
?>