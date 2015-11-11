<?php
// Anzeigen der CSV-Inhalte
$datei = fopen("csvformular.csv", "r"); //Datei zum lesen öffnen
$csv = array(); 						//anlegen eines Arrays

while(($data = fgetcsv($datei, 1000, ";")) !== FALSE) { //while-schleife zum befüllen des Arrays
	 $csv[] = $data;					//Mehrdimensionales Array
	//var_dump($data); 					//Inhalte des Arrays anzeigen
}
			//Ausgabe durch Ansprechen des entsprechenden Array-Indexes/ Erste Stelle bezieht sich auf den Datensatz/ zweite Stelle auf jeweilige Variable im Datensatz
			//Hier fehlt noch die Schleife!
			echo "<p>Steckbrief</p>";
			echo "<p>Name: ".$csv[0][0]."</p>";
			echo "<p>Geburtstag: ".$csv[0][1]."</p>";
			echo "Interessen: ".$csv[0][2]."</p>";
			echo "Anmerkungen: ".$csv[0][3]."</p>";
	
    

 fclose($datei); // Schließen der Datei

  
?>