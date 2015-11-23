<?php
//Variablen abfragen
$name = $_POST["username"];
$pass = $_POST["password"];
$temp = 0; //Hilfsvariable

$benutzerdatei = fopen ("benutzer.csv", "r"); //Datei wird ge�ffnet
while  ($data = fgetcsv($benutzerdatei, 1000, ";")) { //Inhalt wird Zeile f�r Zeile gelesen

		$dat =	array_pop($data);
		var_dump($data);

	if ($data[0] == $name && $data[1] == $pass){  // Stimmen Name UND Passwort �berein, erfolgt die Anmeldung
	//	echo "Hi, ".$name."!";
		$temp = 1; //Variable wird auf 1 gesetzt, wenn die Benutzerdaten �bereinstimmen
		break;
	
		}
}

		fclose($benutzerdatei);

if ($temp = 1) { //Ist die Variable noch auf null, wird der User nicht eingeloggt!
	echo "Hi, $name du bist eingeloggt!";
}
 else {
	echo "Deine Nutzerdaten sind falsch. Versuche es noch einmal!";
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