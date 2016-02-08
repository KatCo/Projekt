<!DOCTYPE html>
<html lang=de>

	<head>
	
		<meta charset=utf-8>
		<link rel=stylesheet href=projekt.css>
		<title>Geschenke Manager</title>
	</head>
		<body>
			
			<header class="wrapper clearfix" onclick="window.href='index.php';" />
			
			<main>
				
					<h1>Die Steckbriefe deine Freunde</h1>
						<ul>
			
							
							
											<details>
												  <summary>Ein paar Infos</summary>
												  <p>Du siehst hier die Auswahl von deinen erstellten Steckbriefen. In der Kategorie Freunde</p>
												  
				  <!--
				  === Feedback Alpers, Jan 15 ===
				  
				  Momentan würde dieser <details>-Container bewirken, dass Nutzer
				  eine Erklärung für die Zeile "Eine paar Infos" erhalten,
				  die aus dem o.a. Absatz besteht. Das macht aber nur wenig Sinn.
				  
				  Denn entweder wird hier eine Auswahl der erstellten Steckbriefe
				  angezeigt (was die Beschreibung überflüssig macht) oder
				  Nutzer erwarten nach dem Anwählen von "Ein paar Infos", dass
				  tatsächlich ein paar Infos angezeigt werden.
				  
				  === Feedback Alpers, Ende ===
				  -->
												  
												  
											</details>
											
											
											<?php
												SESSION_START();
												// Anzeigen der CSV-Inhalte
												$datei = fopen("csvformular.csv", "r"); //Datei zum lesen öffnen
												$csv = array(); 						//anlegen eines Arrays

					?>
					<!--
					=== Feedback Alpers, Jan 15 ===
					
					Kommentare dienen dazu, um zu erklären, warum bestimmte Programmteile
					enthalten sind. Wenn ein Kommentar nur das beinhaltet, was ohnehin schon
					klar ist (z.B. dass die Methode fopen() z.B. eine Datei öffnet), dann
					ist er überflüssig.
					
					Hier stellt sich vielmehr die Frage, warum Sie in einem HTML-Dokument
					aus einer Datei, deren Name darauf verweist, dass sie ein Formular enthält,
					lauter Daten auslesen lassen, die dann aber im HTML-Dokument nicht verwendet werden.
					
					=== Feedback Alpers, Ende ===
					-->
					<?php
												while(($data = fgetcsv($datei, 1000, ";")) !== FALSE) { //while-schleife zum befüllen des Arrays
												$csv[] = $data;											//Mehrdimensionales Array
												//var_dump($data); 										//Inhalte des Arrays anzeigen
											    }
												
					?>
					<!--
					=== Feedback Alpers, Jan 15 ===
					
					Bitte achten Sie darauf, dass der Inhalt eines Rumpfes
					(hier der Inhalt der while-Schleife) ein wenig eingerückt ist,
					damit leicht erkennbar ist, wo der Rumpf beginnt und wo er endet.
					
					=== Feedback Alpers, Ende ===
					-->
					<?php
												
												foreach ($csv as list($csv2)) { 						//Auslesen der ersten Variable des jeweiligen Datensatzes
												//	foreach ($csv2 as $csv3) { 							//Auslesen des kompletten Arrays
												$_SESSION['name'] = $csv2;								// Variable in Session speichern um sie auf Folgeseite wieder abrufen zu können
																										//Dort wird die gespeicherte Namenvariable mit den Namen in der Datenbank verglichen und
																										//anschließend soll der dazugehörige Datensatz wieder ausgegeben werden(Steckbriefseite)
												echo "<a href='steckbrief2.php'><img src='images/logo.gif' alt='startbild'/></a>"; 				//Ausgeben eines Logos, Verlinkung auf Steckbrief
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