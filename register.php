<?php
//Registrieren
//Variablen abfragen
$name = $_POST["name"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];

//Überprüfen, ob die eingetragenen Passwörter identisch sind
if ($pass == $pass2) {
	$user_2 = array();	//Wenn sie identisch sind, überprüfen, ob Benutzername schon einmal verwendet wurde
	$pass = md5($pass); //Verschlüsselung des Passwortes
}
else {
	//Stimmen die Passwörter nicht überein, erscheint ein Hinweis
	echo "Die eingegebenen Passwörter stimmen nicht überein. 
			Bitte versuche es noch einmal!";
			include("form.html");
}



?>