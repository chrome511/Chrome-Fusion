EINLEITUNG
-------------------------------------------------------------------------------------------------------------------- 
Chrome-Fusion ist ein unkompliziertes Inhaltsverarbeitungssystem (Content Management System – CMS), das in PHP 5 geschrieben ist.Es benutzt eine MySQL Datenbank um die
Inhalte deiner Seite zu speichern, und es verfügt über ein einfaches, aber umfassendes, Administrations (Verwaltungs) System. Chrome-Fusion verfügt über die
gebräuchlicheren Bestandteile, die man von vielen anderen CMS-Paketen her kennt und erwartet.

Diese Software ist frei: es ist erlaubt sie weiterzugeben und/oder sie zu modifizieren gemäß den Bestimmungen der GNU Affero General Public License (AGPL),
wie man sie veröffentlicht findet von der Free Software Foundation (FSF) – entweder in der Version 3 oder (nach eigenem Optionen) in einer späteren Version.

Diese Software wird verbreitet in der Hoffnung, dass sie sich als nützlich erweist, allerdings wird dafür KEINE GEWÄHR übernommen.
Es wird auch keine Gewähr für die Marktgängigkeit oder die Eignung für einen bestimmten Zweck dienen. Man lese die AGPL für mehr Details. 

Du solltest eine Kopie der GNU AGPL zusammen mit diesem Software-Paket erhalten haben; falls nicht, gehe auf www.fsf.org !

Wichtiger Hinweis: Du bist nicht berechtigt, die folgende Copyright-Fußnoten zu entfernen:

Powered by Chrome-Fusion copyright © 2016 by Patrick Kruse (Chrome). 
Powered by PHP-Fusion copyright © 2002 – 2011 by Nick Jones.
Released as free software without warranties under GNU Affero GPL v.3.”

Hinsichtlich der Möglichkeiten das Copyright zu entfernen, siehe unsere Lizenzinformation auf www.php-fusion.co.uk UND www.chrome-fusion.de



INSTALLATION
-------------------------------------------------------------------------------------------------------------------- 
Vor der Installation von Chrome-Fusion sind die folgenden Voraussetzungen dieser Version zu überprüfen:

PHP 5.1.2 oder höher
MySQL 4.1 oder höher

Du musst eine MySQL Datenbank anlegen. Dies kann entweder über dein Web-Hosting Control Panel (Verwaltung deines Hosts) oder über phpMyAdmin erfolgen. 
Vergewissere dich, dass du deine MySQL-Zugangsdaten bereit hältst: Hostname, Benutzername, Passwort und den Namen der Datenbank, da diese Angaben während der
Einrichtung verlangt werden.

1. Bevor du die Dateien hochlädst, benenne die Datei _config.php (befindet sich im Dateienordner) in config.php um.

2. Lade den Inhalt des Ordners mit den Dateien auf deinen Web-Server hoch.

3. Falls du Chrome-Fusion nicht auf einem lokalen Server betreibst, werden folgende Rechte (CHMOD 777) für die folgenden Ordner und Dateien benötigen:

 
     administration/db_backups/
     downloads/
     downloads/images/
     downloads/submissions/
     downloads/submissions/images/
     forum/attachments/
     ftp_upload/
     images/
     images/imagelist.js
     images/articles/
     images/avatars/
     images/news/
     images/news/thumbs/
     images/news_cats/
     images/photoalbum/
     images/photoalbum/submissions/
     config.php

Hinweis: Einige Anbieter (Hosts) erlauben kein CHMOD 777, in dem Fall benutze CHMOD 755.

4. Gehe auf deine Webseite, wo die setup.php automatisch starten sollte. Falls das nicht der Fall ist, dann starte die setup.php manuell,
indem du deine vollständige Internetadresse angibst gefolgt von /setup.php
Beispiel: http://www.yourdomain.com/setup.php 

5. Vervollständige den Installationsprozess, indem du allen Bildschirmanweisungen (on-screen prompts) folgst.

6. Unmittelbar nach Beendigung der Installation von Chrome-Fusion musst du die  
Datei config.php auf CHMOD 644 zurücksetzen UND die Datei setup.php von deinem Web-Server löschen. 
Andernfalls könnte jemand unbefugt die Kontrolle über deine Seite übernehmen.  
