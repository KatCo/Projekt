
<?php
/*Verbindung mit Datenbank herstellen
 *da die Datenbankverbindung in mehereren Dateien verwendet wird, wird die dbconnect.php in die
 *jeweiigen Datein eingebunden 
 *vor <html> steht dann: 
 *<?php
 *include("dbconnect.php");
 ?>*/

	$db = mysqli_connect("localhost", "Benutzername", "Passwort", "Datenbankname"); //Ergänzung von Servernamen, Benutzernamen, Passwort und Datenbank!
	if(!$db)				
	{
		exit("Fehler: ".mysqli_connect_error()); //tritt ein Fehler auf, erscheint der Fehlercode
	}

?>