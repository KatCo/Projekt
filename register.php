<?php
//Registrieren
//doppelte Benutzernamen�berpr�fung funktioniert noch nicht vollst�ndig
//Variablen abfragen
$name = $_POST["name"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];

//�berpr�fen, ob die eingetragenen Passw�rter identisch sind
if ($pass == $pass2) {
	$name_2 = array();	//Wenn sie identisch sind, �berpr�fen, ob Benutzername schon einmal verwendet wurde ==>leeres Array

	
	$benutzerdatei = fopen ("benutzer.csv", "a+"); //�ffnen der Datei mit den Benutzernamen
	while (!feof($benutzerdatei)) {				// Datei wird St�ck f�r St�ck ausgelesen
		$zeile = fgets($benutzerdatei, 500);
		$data = explode(";", $zeile);
		array_push ($name_2, $benutzerdatei[0]);			//Der Benutzername wird ins Array abgelegt
	}
	fclose($benutzerdatei); //Datei wird wieder geschlossen
	
	if (in_array($name, $name_2)) { //Ist der Benutzername schon vorhanden, erscheint ein Hinweis
		echo "Der Benutzername ist leider schon vorhanden. Bitte gib� einen neuen Namen ein!";
		include ("form.html");
	}
	else {
		$eintrag = "$name".";"."$pass"; //Name und Passwort werden mit einem ";" getrennt und in eine Variable gespeichert
		$benutzerdatei = fopen ("benutzer.csv", "a"); //Datei wird ge�ffnet
		fwrite($benutzerdatei, "$eintrag;\n"); //Name und Passwort wird in die Datei geschrieben
		fclose($benutzerdatei); //Datei wird geschlossen
		
		echo $name.", deine Anmeldung war erfolgreich! Jetzt kannst du loslegen! ";
	}
	
}
else {
	//Stimmen die Passw�rter nicht �berein, erscheint ein Hinweis
	echo "Die eingegebenen Passw�rter stimmen nicht �berein. 
			Bitte versuche es noch einmal!";
			include("form.html");
}

?>