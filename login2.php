<?php
//Variablen abfragen
$name = $_POST["username"];
$pass = $_POST["password"];
$temp = 0; //Hilfsvariable

$benutzerdatei = fopen ("benutzer.csv", "r"); //Datei wird ge�ffnet
while (!feof($benutzerdatei)){  //Inhalt wird Zeile f�r Zeile gelesen
	$zeile = fgetcsv($benutzerdatei, 500);
	
	//Fehler! Muss noch dran gearbeitet werden!
	
	$data = explode(";", "/n", $zeile); //Benutzername und Passwort werden wieder getrennt
	//Pr�fung, ob Benutzername UND Passwort mit Inhalt der Textdatei �bereinstimmen
	if ($data[0] == $name && $pass){  // Stimmen Name UND Passwort �berein, erfolgt die Anmeldung
		echo "Hi, ".$name."!";
		$temp = 1; //Variable wird auf 1 gesetzt, wenn die Benutzerdaten �bereinstimmen		
		}
}
		fclose($benutzerdatei);

if ($temp == 0) { //Ist die Variable noch auf null, wird der User nicht eingeloggt!
	echo "Deine Benutzerdaten sind falsch. Versuche es noch einmal!";
	include("login.html");
}
	


/*
	session_start(); //später mit MySQL
	
	$_logindaten = Array("name"=>"inga", "passwort"=>"12345"); //Speichern im Array, wie die Logindaten lauten müssten
	if (isset($_POST["username"]) && isset($_POST["password"])) //Bedingung: Die Variablen aus dem Formular müssen eingegeben sein
		{
			if ($_logindaten["name"] == $_POST["username"] &&	//Bedingung: Die eingebenen Daten müssen mit den 
				$_logindaten["passwort"] == $_POST["password"]) //vorgegebenen Daten übereinstimmen
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
