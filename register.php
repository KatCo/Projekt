<?php
//Registrieren
//Variablen abfragen
$name = $_POST["name"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];

//�berpr�fen, ob die eingetragenen Passw�rter identisch sind
if ($pass == $pass2) {
	$user_2 = array();	//Wenn sie identisch sind, �berpr�fen, ob Benutzername schon einmal verwendet wurde ==>leeres Array
	$pass = md5($pass); //Verschl�sselung des Passwortes
	
	$benutzerdatei = fopen ("benutzer.txt", "r"); //�ffnen der Datei mit den Benutzernamen
	while (!feof($benutzerdatei)) {				// Datei wird St�ck f�r St�ck ausgelesen
		$zeile = fgets($benutzerdatei, 500);
		$data = explode("|", $zeile);
		array_data ($user_2, $data[0]);			//Der Benutzername wird ins Array abgelegt
	}
	fclose($benutzerdatei); //Datei wird wieder geschlossen
}
else {
	//Stimmen die Passw�rter nicht �berein, erscheint ein Hinweis
	echo "Die eingegebenen Passw�rter stimmen nicht �berein. 
			Bitte versuche es noch einmal!";
			include("form.html");
}




?>