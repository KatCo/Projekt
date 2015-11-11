<?php
// Anzeigen der CSV-Inhalte
$datei = fopen("csvformular.csv", "r"); //Datei zum lesen öffnen
$csv = array(); 						//anlegen eines Arrays
while(($data = fgetcsv($datei, 1000, ";")) !== FALSE) { //while-schleife zum befüllen des Arrays mit den Daten
	 $csv[] = $data;
	//var_dump($data); 					//Inhalte des Arrays anzeigen
}
			//Ausgabe durch Ansprechen des entsprechenden Array-Indexes 
			echo "<p>Steckbrief</p>";
			echo "<p>Name: ".$csv[0][0]."</p>";
			echo "Nachname: ".$csv[0][1]."</p>";
			echo "Geburtstag: ".$csv[0][2]."</p>";
	
    

 fclose($datei); // Schließen der Datei

  
?>