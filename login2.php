<?php
//Variablen abfragen
$name = $_POST["name"];
$pass = $_POST["pass"];
$temp = 0; //Hilfsvariable

$benutzerdatei = fopen ("benutzer.csv", "r"); //Datei wird geöffnet
while  ($data = fgetcsv($benutzerdatei, 1000, ";")) { //Inhalt wird Zeile für Zeile gelesen

		$dat =	array_pop($data);
	//	var_dump($data);
		
	if ($data[0] == $name && $data[1] == $pass){  // Stimmen Name(Index0) UND Passwort(Index1) überein
		$temp =1;								 // wird die Hilfsvariable auf 1 gesetzt
		break;									//die Schleife wird beendet
		}
}
		if ($temp == 1) {						//ist $temp 1, so erscheint ein Login-Hinweis
			echo "Hi, $name du bist eingeloggt!";
			include("auswahl.html");
		}
		else {									//Andernfalls müssen die Benutzerdaten erneut eigegeben werden
			echo "Deine Nutzerdaten sind falsch. Versuche es noch einmal!";
			include("index.html");

		}
	


		fclose($benutzerdatei); // Die Datei wird wieder geschlossen

		
//Alter Login
/*if ($temp = 1) { //Ist die Variable noch auf null, wird der User nicht eingeloggt!
	echo "Hi, $name du bist eingeloggt!";
}
 */
	


/*
	session_start(); //spÃ¤ter mit MySQL
	
	$_logindaten = Array("name"=>"inga", "passwort"=>"12345"); //Speichern im Array, wie die Logindaten lauten mÃ¼ssten
	if (isset($_POST["username"]) && isset($_POST["password"])) //Bedingung: Die Variablen aus dem Formular mÃ¼ssen eingegeben sein
		{
			if ($_logindaten["name"] == $_POST["username"] &&	//Bedingung: Die eingebenen Daten mÃ¼ssen mit den 
				$_logindaten["passwort"] == $_POST["password"]) //vorgegebenen Daten Ã¼bereinstimmen
				{
					$_SESSION["login"] = 1; //Sind die Daten richtig, wird der User eingeloggt
					echo("Du bist eingeloggt!");
					include("home.html");
				}
		else // Ist der User nicht eingeloggt, wird die "login.html"-SEite aufegrufen
			{
				echo ("Anmeldung fehlgeschlagen. Versuche es erneut!");
				include("login.html");
				exit;
			}
		}
//$username = $_POST ["username"];
//echo($username.", du bist eingeloggt!");
 
 */
	?>
	
<!--
=== Feedback Alpers, Jan 15 ===

Wie schon in freunde.php geschrieben ist es wichtig, dass Sie an der Einrückung von Inhalten von Rümpfen arbeiten,
sonst werden Sie bei umfangreichen Projekten nicht einmal den eigenen Quellcode lesen können.

Bitte löschen Sie auch alles, was nicht mehr verwendet werden soll. Wenn Sie alten Code nachschlagen wollen, können
Sie bei Git einfach ins Repository gehen und frühere Versionen wieder aufrufen.

=== Feedback Alpers, Ende ===
-->