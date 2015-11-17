<?php
//Variablen abfragen
$name = $_POST["username"];
$pass = $_POST["password"];
$passv = md5($pass); //Passwort verschlüsseln
$temp = 0; //Hilfsvariable

$benutzerdatei = fopen ("benutzer.txt", "r"); //Datei wird geöffnet
while (!feof($benutzerdatei)){  //Inhalt wird Zeile für Zeile gelesen
	$zeile = fgets($benutzerdatei, 500);
	$data = explode("|", $zeile); //Benutzername und Passwort werden wieder getrennt
	
	//Prüfung, ob Benutzername UND Passwort mit Inhalt der Textdatei übereinstimmen
	if ($data[0]==$name && $passv ==trim($data[1])){ //Zeilenumbrüche werden entfernt, da Passwörter mit Zeilenumbruch gespeichert werden
		echo "Hi, ".$name;
		$temp = 1; //Variable wird auf 1 gesetzt, wenn die Benutzerdaten übereinstimmen
		
	}
}
fclose($benutzerdatei);

if ($temp == 0) { //Ist die Variable noch auf null, wird der User nicht eingeloggt!
	echo "Deine Benutzerdaten sind falsch. Versuche es noch einmal!";
}



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
