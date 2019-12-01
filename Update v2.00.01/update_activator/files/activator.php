<?php
/*-------------------------------------------------------+
| Chrome-Fusion Content Management System
| Copyright (C) 2016 - 2016 Patrick Kruse
| http://www.chrome-fusion.de/
+--------------------------------------------------------+
| Filename: activator.php
| Author: Patrick Kruse (Chrome)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
require_once "maincore.php";

require_once THEMES."templates/header.php";

if (iSUPERADMIN && (iUSER_RIGHTS !="" || iUSER_RIGHTS!="C")) {
    opentable("Sprache/Language");
      echo "W&auml;hle deine Sprache<br>";
      echo "(Please select your language)";
      echo "<form name='language' method='post' action='".FUSION_SELF."'>
            <input type='hidden' name='action' value='german'>
            <input type='submit' name='german' value='Deutsch' class='button'></form>";
      echo "<form name='language' method='post' action='".FUSION_SELF."'>
            <input type='hidden' name='action' value='english'>
            <input type='submit' name='english' value='English' class='button'></form>";
    closetable();
    
if (isset($_POST['action']) && ($_POST['action'] == "german")) {
    opentable("Update Funktion aktivieren");
    echo "Dieses kleine Script aktiviert die Update Funktion von Chrome-Fusion v2.00.01 um auf Chrome-Fusion v2.00.02 zu aktualisieren.<br>";
    echo "Nach erfolgreicher Ausf&uuml;hrung des Scripts wird die Update Funktion aktiviert/hinzugef&uuml;gt und folgende Datenbankeintr&auml;ge aktualisiert/hinzugef&uuml;gt:<br>";
    echo "<ul><li>die Updatefunktion im Administrationsmen&uuml;</li><br>
              <li>der Datenbankeintrag Update in der Datenbank <b>DB_ADMIN</b></li><br>
              <li>Die Updaterechte <b>(U)</b> in der Datenbank <b>DB_USERS Tabelle user_rights</b></li></ul>";
    echo "Nach erfolgreicher Ausf&uuml;hrung und abschlusses des Scripts, wird die Datei <b>activator.php</b> automatisch vom Server entfernt.";  
    echo "<form name='activate' method='post' action='".FUSION_SELF."'>
          <input type='hidden' name='action' value='activate-de'>
          <input type='submit' name='activate-de' value='aktivieren' class='button'></form>";
    closetable();  
  }
  
if (isset($_POST['action']) && ($_POST['action'] == "english")) {
    opentable("Activate update function");
    echo "This small script activates the update function in Chrome-Fusion v2.00.01 in order to upgrade to Chrome-Fusion v2.00.02.<br>";
    echo "After successful execution of the script, the update function has been activated/added and the following database entries have been updated/added:<br>";
    echo "<ul><li>the update function in the administration menu</li><br>
              <li>the database entry <b>upgrade</b> in the database <b>DB_ADMIN</b></li><br>
              <li>the update permission <b>(U)</b> in the database <b>DB_USERS table user_rights</b></li></ul>";
    echo "After succesful execution and completion of the script, the file <b>activator.php</b> has been automatically removed from the server";
    echo "<form name='activate' method='post' action='".FUSION_SELF."'>
          <input type='hidden' name='action' value='activate-en'>
          <input type='submit' name='activate-en' value='activate' class='button'></form>";
    closetable();  
  }

if (isset($_POST['action']) && ($_POST['action'] == "activate-de")) {
  if(isset($_POST['activate-de'])) {
  $result = dbquery("INSERT INTO ".DB_ADMIN." (admin_rights, admin_image, admin_title, admin_link, admin_page) VALUES ('U', 'upgrade.gif', 'Update', 'upgrade.php', '3')");
  if ($result) {
 			$result = dbquery("SELECT user_id, user_rights FROM ".DB_USERS." WHERE user_level='105'");
   		while ($data = dbarray($result)) {
			$result2 = dbquery("UPDATE ".DB_USERS." SET user_rights=REPLACE(user_rights, '.UL.', '.UL.U.') WHERE user_id='".$data['user_id']."'");
		}
	};
  redirect(FUSION_SELF."?aktivieren_ok"); die;
  }
}

if (isset($_POST['action']) && ($_POST['action'] == "activate-en")) {
  if(isset($_POST['activate-en'])) {
  $result = dbquery("INSERT INTO ".DB_ADMIN." (admin_rights, admin_image, admin_title, admin_link, admin_page) VALUES ('U', 'upgrade.gif', 'Upgrade', 'upgrade.php', '3')");
  if ($result) {
 			$result = dbquery("SELECT user_id, user_rights FROM ".DB_USERS." WHERE user_level='105'");
   		while ($data = dbarray($result)) {
			$result2 = dbquery("UPDATE ".DB_USERS." SET user_rights=REPLACE(user_rights, '.UL.', '.UL.U.') WHERE user_id='".$data['user_id']."'");
		}
	};
  redirect(FUSION_SELF."?activate_ok"); die;
  }
}

if (isset($_GET['aktivieren_ok'])) {
    opentable("Ergebniss:");
    echo "Die Updatefunktion von Chrome-Fusion v2.00.01 wurde erfolgreich aktiviert.<br>";
    echo "Chrome-Fusion v2.00.01 kann nun aktualisiert werden.<br>";
    echo "Die Datei activator.php wurde erfolgreich vom Server entfernt.<br>";
    unlink("activator.php");
    echo "<meta http-equiv='Content-Type' content='text/html; charset=".$locale['charset']."' />\n";
    echo "<meta http-equiv='refresh' content='5; url=".$settings['siteurl']."administration/upgrade.php' />\n";        
    echo "Sie werden in 5 Sekunden automatisch zur upgrade.php weitergeleitet.";
    echo "Sollte die Weiterleitung nicht funktionieren klicke bitte <a href='".BASEDIR."/administration/upgrade.php'>hier</a>.";
    closetable();
}

if (isset($_GET['activate_ok'])) {
    opentable("Result:");
    echo "The update function of Chrome-Fusion v2.00.01 has been succesfully activated.<br>";
    echo "Chrome-Fusion v2.00.01 can now be upgraded to Chrome-Fusion v2.00.02.<br>";
    echo "The file <b>activator.php</b> has been removed from the server.<br>";
    echo "<a href='".BASEDIR."index.php'>back to main page</a>";
    unlink("activator.php");
    echo "<meta http-equiv='Content-Type' content='text/html; charset=".$locale['charset']."' />\n";
    echo "<meta http-equiv='refresh' content='5; url=".$settings['siteurl']."administration/upgrade.php' />\n";        
    echo "You will be automatically redirected to upgrade.php in 5 seconds.";
    echo "If the redirect does not work please click <a href='".BASEDIR."/administration/upgrade.php'>here</a>.";
    closetable();
  }  
}    
require_once THEMES."templates/footer.php";
?>