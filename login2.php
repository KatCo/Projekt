<?php 

	session_start(); //sp�ter mit MySQL
	
	$_logindaten = Array("name"=>"inga", "passwort"=>"12345"); //Speichern im Array, wie die Logindaten lauten m�ssten
	if (isset($_POST["username"]) && isset($_POST["password"])) //Bedingung: Die Variablen aus dem Formular m�ssen eingegeben sein
		{
			if ($_logindaten["name"] == $_POST["username"] &&	//Bedingung: Die eingebenen Daten m�ssen mit den 
				$_logindaten["passwort"] == $_POST["password"]) //vorgegebenen Daten �bereinstimmen
				{
					$_SESSION["login"] = 1; //Sind die Daten richtig, wird der User eingeloggt
					echo("Du bist eingeloggt!");
					include("home.html");
				}
			else 
			{
				echo ("Anmeldung fehlgeschlagen. Versuche es erneut!");
				include("login.html");
				exit;
			}
		}
//$username = $_POST ["username"];
//echo($username.", du bist eingeloggt!");
?>