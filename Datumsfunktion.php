<?php
//Datum zum Einbinden
setlocale(LC_TIME, "de"); //Festlegen des Sprach-/ und Gebietschemas auf Deutschland
echo "Heute ist ";
echo strftime("%A"); // Ausgeschriebener Name des Wochentages
echo " , der ";
echo strftime ("%x". "."); //Wiedergabe des Datums ohne Zeitangabe
?>