<?php
//Registrieren
//Variablen abfragen
$name = $_POST["name"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];

//Überprüfen, ob die eingetragenen Passwörter identisch sind
if ($pass == $pass2) {
	$user_2 = array();	//Wenn sie identisch sind, überprüfen, ob Benutzername schon einmal verwendet wurde ==>leeres Array
	$pass = md5($pass); //Verschlüsselung des Passwortes
	
	$benutzerdatei = fopen ("benutzer.txt", "r"); //öffnen der Datei mit den Benutzernamen
	while (!feof($benutzerdatei)) {				// Datei wird Stück für Stück ausgelesen
		$zeile = fgets($benutzerdatei, 500);
		$data = explode("|", $zeile);
		array_data ($user_2, $data[0]);			//Der Benutzername wird ins Array abgelegt
	}
	fclose($benutzerdatei); //Datei wird wieder geschlossen
}
else {
	//Stimmen die Passwörter nicht überein, erscheint ein Hinweis
	echo "Die eingegebenen Passwörter stimmen nicht überein. 
			Bitte versuche es noch einmal!";
			include("form.html");
}




?>