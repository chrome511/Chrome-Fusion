EINLEITUNG
-------------------------------------------------------------------------------------------------------------------- 
Chrome-Fusion ist ein unkompliziertes Inhaltsverarbeitungssystem (Content Management System � CMS), das in PHP 5 geschrieben ist.Es benutzt eine MySQL Datenbank um die
Inhalte deiner Seite zu speichern, und es verf�gt �ber ein einfaches, aber umfassendes, Administrations (Verwaltungs) System. Chrome-Fusion verf�gt �ber die
gebr�uchlicheren Bestandteile, die man von vielen anderen CMS-Paketen her kennt und erwartet.

Diese Software ist frei: es ist erlaubt sie weiterzugeben und/oder sie zu modifizieren gem�� den Bestimmungen der GNU Affero General Public License (AGPL),
wie man sie ver�ffentlicht findet von der Free Software Foundation (FSF) � entweder in der Version 3 oder (nach eigenem Optionen) in einer sp�teren Version.

Diese Software wird verbreitet in der Hoffnung, dass sie sich als n�tzlich erweist, allerdings wird daf�r KEINE GEW�HR �bernommen.
Es wird auch keine Gew�hr f�r die Marktg�ngigkeit oder die Eignung f�r einen bestimmten Zweck dienen. Man lese die AGPL f�r mehr Details. 

Du solltest eine Kopie der GNU AGPL zusammen mit diesem Software-Paket erhalten haben; falls nicht, gehe auf www.fsf.org !

Wichtiger Hinweis: Du bist nicht berechtigt, die folgende Copyright-Fu�noten zu entfernen:

Powered by Chrome-Fusion copyright � 2016 by Patrick Kruse (Chrome). 
Powered by PHP-Fusion copyright � 2002 � 2011 by Nick Jones.
Released as free software without warranties under GNU Affero GPL v.3.�

Hinsichtlich der M�glichkeiten das Copyright zu entfernen, siehe unsere Lizenzinformation auf www.php-fusion.co.uk UND www.chrome-fusion.de



INSTALLATION
-------------------------------------------------------------------------------------------------------------------- 
Vor der Installation von Chrome-Fusion sind die folgenden Voraussetzungen dieser Version zu �berpr�fen:

PHP 5.1.2 oder h�her
MySQL 4.1 oder h�her

Du musst eine MySQL Datenbank anlegen. Dies kann entweder �ber dein Web-Hosting Control Panel (Verwaltung deines Hosts) oder �ber phpMyAdmin erfolgen. 
Vergewissere dich, dass du deine MySQL-Zugangsdaten bereit h�ltst: Hostname, Benutzername, Passwort und den Namen der Datenbank, da diese Angaben w�hrend der
Einrichtung verlangt werden.

1. Bevor du die Dateien hochl�dst, benenne die Datei _config.php (befindet sich im Dateienordner) in config.php um.

2. Lade den Inhalt des Ordners mit den Dateien auf deinen Web-Server hoch.

3. Falls du Chrome-Fusion nicht auf einem lokalen Server betreibst, werden folgende Rechte (CHMOD 777) f�r die folgenden Ordner und Dateien ben�tigen:

 
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
indem du deine vollst�ndige Internetadresse angibst gefolgt von /setup.php
Beispiel: http://www.yourdomain.com/setup.php 

5. Vervollst�ndige den Installationsprozess, indem du allen Bildschirmanweisungen (on-screen prompts) folgst.

6. Unmittelbar nach Beendigung der Installation von Chrome-Fusion musst du die  
Datei config.php auf CHMOD 644 zur�cksetzen UND die Datei setup.php von deinem Web-Server l�schen. 
Andernfalls k�nnte jemand unbefugt die Kontrolle �ber deine Seite �bernehmen.  
