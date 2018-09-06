-------------------------------------------- SYMFONY EINRICHTEN --------------------------------------------
1.	Xampp installieren
a.	https://www.apachefriends.org/de/index.html
2.	Composer installieren 
a.	https://getcomposer.org/download/
b.	Unter Windows Installer die  „Composer-Setup.exe“ herunterladen und ausführen
3.	Symfony einrichten
a.	https://symfony.com/download Kommandozeile kopieren
b.	Im Xampp\htdocs CMD ausführen
c.	Den kopierten Befehl ausführen

-------------------------------------------- BEFEHLE --------------------------------------------
 	Ordner Pfad:
		cd C:\xampp\htdocs\cobs
	Localer Start:
		php -S 127.0.0.1:8000 -t public
	Auf einen Server ausführen
		php bin/console server:start 192.168.1.221:9000

	Datenbank updaten:
		php bin/console make:entity
	Datenbank update bestätigen:
		php bin/console 


	Neuer Controller und Template:
		php bin/console make:controller