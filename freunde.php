<!DOCTYPE html>
<html lang=de>

	<head>
	
		<meta charset=utf-8>
		<link rel=stylesheet href=projekt.css>
		<title>Geschenke Manager</title>
	</head>
		<body>
			
				<header class="wrapper clearfix" onclick="window.href='index.php';"> </header>
			
			<main>
				
					<h1>Die Steckbriefe deine Freunde</h1>
						<ul>
			
							
							
											<details>
												  <summary>Ein paar Infos</summary>
												  <p>Du siehst hier die Auswahl von deinen erstellten Steckbriefen. In der Kategorie Freunde</p>
											</details>
											
											
											<?php
												SESSION_START();
												// Anzeigen der CSV-Inhalte
												$datei = fopen("csvformular.csv", "r"); //Datei zum lesen öffnen
												$csv = array(); 						//anlegen eines Arrays

												while(($data = fgetcsv($datei, 1000, ";")) !== FALSE) { //while-schleife zum befüllen des Arrays
												$csv[] = $data;											//Mehrdimensionales Array
												//var_dump($data); 										//Inhalte des Arrays anzeigen
											    }
												foreach ($csv as list($csv2)) { 						//Auslesen der ersten Variable des jeweiligen Datensatzes
												//	foreach ($csv2 as $csv3) { 							//Auslesen des kompletten Arrays
												$_SESSION['name'] = $csv2;								// Variable in Session speichern um sie auf Folgeseite wieder abrufen zu können
																										//Dort wird die gespeicherte Namenvariable mit den Namen in der Datenbank verglichen und
																										//anschließend soll der dazugehörige Datensatz wieder ausgegeben werden(Steckbriefseite)
												echo "HTML-CODE mit Logo und Verlinkung"; 				//Ausgeben eines Logos, Verlinkung auf Steckbrief
												echo	"<p>$csv2</p>"; 								//Ausgeben der ersten Variable -> Name
		
												}
												fclose($datei); // Schließen der Datei

  
											?>
							
			
						</ul>
				
				</main>
			
			<footer>
				<ul>
					<li><a href="impr.html" titel="Impressum"> <b>Impressum</b></a></li>
				</ul>
			</footer>
			
			<aside>
			<p><a href="#top">Ein Anker nach oben!</a></p>
			</aside>
		</body>
</html>