<?php
// Anzeigen der CSV-Inhalte
$datei = fopen("csvformular.csv", "r"); //Datei zum lesen �ffnen
$csv = array(); 						//anlegen eines Arrays

while(($data = fgetcsv($datei, 1000, ";")) !== FALSE) { //while-schleife zum bef�llen des Arrays
	 $csv[] = $data;					//Mehrdimensionales Array
	//var_dump($data); 					//Inhalte des Arrays anzeigen

			
			
}

foreach ($csv as list($csv2)) { //Auslesen der ersten Variable des jeweiligen Datensatzes
//	foreach ($csv2 as $csv3) { //Auslesen des kompletten Arrays
		echo "HTML-CODE mit Logo und Verlinkung"; //Ausgeben eines Logos, Verlinkung auf Steckbrief
		echo	"<p>$csv2</p>"; //Ausgeben der ersten Variable -> Name
		
	}

//Ausgabe durch Ansprechen des entsprechenden Array-Indexes/ Erste Stelle bezieht sich auf den Datensatz/ zweite Stelle auf jeweilige Variable im Datensatz
/*			echo "<p>Steckbrief</p>";
			echo "<p>Name: ".$csv[0][0]."</p>";
			echo "<p>Geburtstag: ".$csv[0][1]."</p>";
			echo "<p>Interessen: ".$csv[0][2]."</p>";
			echo "<p>Anmerkungen: ".$csv[0][3]."</p>";
	
    
*/
 fclose($datei); // Schlie�en der Datei

  
?>