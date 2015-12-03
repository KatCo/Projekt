<?php
//Registrieren
//doppelte Benutzernamen�berpr�fung funktioniert noch nicht vollst�ndig

/*
=== Feedback Alpers, Dez 3 ===

Hier w�re wichtig, dass Sie kurz erl�utern, was genau an der doppelten Benutzernamenpr�fung nicht funktioniert.
Erstellen Sie dazu einige Testf�lle, also Eingaben bzw. Datenbankbest�nde.
Nun untersuchen Sie, in welchen F�llen die Pr�fung funktioniert und in welchen F�llen sie nicht funktioniert.
Erg�nzen Sie au�erdem an mehreren Stellen im Programm Asugaben, also Programmzeilen, die 
den aktuellen Stand des Array und den Wert der aktuellen Variablen ausgeben.
So k�nnen Sie durch Vergleiche meist schnell herausfinden, in welcher/n Programmzeile/n die
Ursache f�r das Problem liegt.

=== Feedback Alpers, Ende ===
*/

//Variablen abfragen
$name = $_POST["name"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$geb = $_POST["birthdateuser"];

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
		include ("reg.html");
	}
	else {
		$eintrag = "$name".";"."$pass".";"."$geb".";"; //Name und Passwort werden mit einem ";" getrennt und in eine Variable gespeichert
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
			include("reg.html");
}

?>