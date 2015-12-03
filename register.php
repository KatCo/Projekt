<?php
//Registrieren
//doppelte Benutzernamenüberprüfung funktioniert noch nicht vollständig

/*
=== Feedback Alpers, Dez 3 ===

Hier wäre wichtig, dass Sie kurz erläutern, was genau an der doppelten Benutzernamenprüfung nicht funktioniert.
Erstellen Sie dazu einige Testfälle, also Eingaben bzw. Datenbankbestände.
Nun untersuchen Sie, in welchen Fällen die Prüfung funktioniert und in welchen Fällen sie nicht funktioniert.
Ergänzen Sie außerdem an mehreren Stellen im Programm Asugaben, also Programmzeilen, die 
den aktuellen Stand des Array und den Wert der aktuellen Variablen ausgeben.
So können Sie durch Vergleiche meist schnell herausfinden, in welcher/n Programmzeile/n die
Ursache für das Problem liegt.

=== Feedback Alpers, Ende ===
*/

//Variablen abfragen
$name = $_POST["name"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$geb = $_POST["birthdateuser"];

//Überprüfen, ob die eingetragenen Passwörter identisch sind
if ($pass == $pass2) {
	$name_2 = array();	//Wenn sie identisch sind, überprüfen, ob Benutzername schon einmal verwendet wurde ==>leeres Array

	
	$benutzerdatei = fopen ("benutzer.csv", "a+"); //öffnen der Datei mit den Benutzernamen
	while (!feof($benutzerdatei)) {				// Datei wird Stück für Stück ausgelesen
		$zeile = fgets($benutzerdatei, 500);
		$data = explode(";", $zeile);
		array_push ($name_2, $benutzerdatei[0]);			//Der Benutzername wird ins Array abgelegt
	}
	fclose($benutzerdatei); //Datei wird wieder geschlossen
	
	if (in_array($name, $name_2)) { //Ist der Benutzername schon vorhanden, erscheint ein Hinweis
		echo "Der Benutzername ist leider schon vorhanden. Bitte gib´ einen neuen Namen ein!";
		include ("reg.html");
	}
	else {
		$eintrag = "$name".";"."$pass".";"."$geb".";"; //Name und Passwort werden mit einem ";" getrennt und in eine Variable gespeichert
		$benutzerdatei = fopen ("benutzer.csv", "a"); //Datei wird geöffnet
		fwrite($benutzerdatei, "$eintrag;\n"); //Name und Passwort wird in die Datei geschrieben
		fclose($benutzerdatei); //Datei wird geschlossen
		
		echo $name.", deine Anmeldung war erfolgreich! Jetzt kannst du loslegen! ";
	}
	
}
else {
	//Stimmen die Passwörter nicht überein, erscheint ein Hinweis
	echo "Die eingegebenen Passwörter stimmen nicht überein. 
			Bitte versuche es noch einmal!";
			include("reg.html");
}

?>