<?php
//Variablen abfragen
$name = $_POST["username"];
$pass = $_POST["password"];
$temp = 0; //Hilfsvariable

$benutzerdatei = fopen ("benutzer.csv", "r"); //Datei wird ge�ffnet
while  ($data = fgetcsv($benutzerdatei, 1000, ";")) { //Inhalt wird Zeile f�r Zeile gelesen

		$dat =	array_pop($data);
	//	var_dump($data);
		
	if ($data[0] == $name && $data[1] == $pass){  // Stimmen Name(Index0) UND Passwort(Index1) �berein
		$temp =1;								 // wird die Hilfsvariable auf 1 gesetzt
		break;									//die Schleife wird beendet
		}
}
		if ($temp == 1) {						//ist $temp 1, so erscheint ein Login-Hinweis
			echo "Hi, $name du bist eingeloggt!";
		}
		else {									//Andernfalls m�ssen die Benutzerdaten erneut eigegeben werden
			echo "Deine Nutzerdaten sind falsch. Versuche es noch einmal!";
			include("index.html");

		}
	


		fclose($benutzerdatei); // Die Datei wird wieder geschlossen

/*
=== Feedback Alpers, Dez 3 ===

Drei Hinweise: (Das m�ssen Sie nicht umsetzen, aber der Code w�rde dann besser aussehen.)

1. Schauen Sie doch, ob Sie hier nicht lieber mit einem Dictionary (bei PHP als assoziatives Feld bezeichnet) arbeiten wollen.
Dann k�nnten Sie oben schlicht 
if ($data[$name] == $pass) 
programmieren und h�tten das gleiche Ergebnis wie bei 
if ($data[0] == $name && $data[1] == $pass)

2. Ziehen Sie doch
echo("Hi, ... du bis eingeloggt.");
in die Kontrollstruktur und lassen die Variable $temp komplett weg.

3. Noch besser w�re eine foreach-Schleife. 
N�heres dazu: http://php.net/manual/de/control-structures.foreach.php
Das s�he ungef�hr so aus:

$isLoggedIn = false;

foreach (fgetcsv($benutzerdatei, 1000, ";") as $data)
{
	if (array_pop($data) == $pass) {
		echo "Hi, $name du bist eingeloggt!";
		$isLoggedIn = true;
	}
}

if (!$isLoggedIn) {
	echo "Deine Nutzerdaten sind falsch. Versuche es noch einmal!";
	include("index.html");
}

=== Feedback Alpers, Ende ===
*/
		
		
		
//Alter Login
/*if ($temp = 1) { //Ist die Variable noch auf null, wird der User nicht eingeloggt!
	echo "Hi, $name du bist eingeloggt!";
}
 */
	


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