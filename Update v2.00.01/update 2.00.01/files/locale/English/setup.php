<?php
/*-------------------------------------------------------+
| Modified by Patrick Kruse (Chrome)
| Moderator function by Patrick Kruse (Chrome)
| Siteadminemail function by Patrick Kruse (Chrome)
| Copyright by Patrick Kruse (Chrome)
| http://chrome-fusion.de
+--------------------------------------------------------*/
$locale['title'] = "Chrome-Fusion v2.00.02 Setup";
$locale['sub-title'] = "Chrome-Fusion v2.00.02 Setup";

$locale['xml_lang'] = "en";
$locale['charset'] = "iso-8859-1";

// Neue Ausgabe der Texte bei der Installation
$locale['500'] = "Chrome-Fusion v2.00.02";
$locale['501'] = "Welcome to the installation of Chrome-Fusion."; 
$locale['501'] .= "<br>In the following steps, Chrome Fusion will be installed on your webspace.";
$locale['502'] = "Start installation";
$locale['503'] = "Current version 2.00.02 German/English";
$locale['504'] = "If you have any questions or problems, please contact the team of <a target='_blank' href='http://www.chrome-fusion.de' style='color:#fff;'>Chrome-Fusion</a>.";
$locale['505'] = "Chrome-Fusion 2.00.02 installation";
$locale['506'] = "Prepare the system";
$locale['507'] = "Check the Write permissions of folders and files";
$locale['508'] = "Infobox";
$locale['509'] = "In this step of the installation, the write permissions of the files and folders are checked.<br /><br />";
$locale['509'] .= "If red crosses appear here, the corresponding write permissions are not set correctly.<br /><br />";
$locale['509'] .= "Please give the files/folders the necessary write permissions and click on \"Check again\".<br /><br />";
$locale['509'] .= "The required write permissions are: For Folder: 777 <br /> For Files: 666<br /><br />";
$locale['509'] .= " If all fields are green click on \"Next\" ";
$locale['510'] = "Database connection";
$locale['511'] = "Connect to the database";
$locale['512'] = "Enter the database data of your MySQL database in these fields. <br /><br />";
$locale['512'] .= "The database prefix and cookie prefix are filled with random values, but you can also enter your own values here. <br /><br />";
$locale['512'] .= "After all fields have been filled out, click on \"Next\".";
$locale['513'] = "Connect to the MySQL database";
$locale['514'] = "Database host:";
$locale['515'] = "Database username:";
$locale['516'] = "Database password:";
$locale['517'] = "Database name:";
$locale['518'] = "Database prefix:";
$locale['518a'] = "DB access method:";
$locale['519'] = "Cookie prefix:";
$locale['520'] = "Successful";
$locale['521'] = "The connection to the database was successful";
$locale['522'] = "connection log: ";
$locale['523'] = "Error";
$locale['524'] = "An error has occurred!";
$locale['525'] = "The following error occurred: ";
$locale['526'] = "Create an administrator account";
$locale['527'] = "Create administrator";
$locale['528'] = "Create the administrator account for your new website on this page. <br /><br />";
$locale['528'] .= "Please use secure passwords of letters and numbers. <br /><br />";
$locale['528'] .= "The site administrator has access to all areas of the site after installation. ";
$locale['529'] = "Create an administrator account for the website ";
$locale['530'] = "User name:";
$locale['531'] = "Password:";
$locale['532'] = "Repeat password:";
$locale['533'] = "Admin passwort:";
$locale['534'] = "Repeat admin passwort:";
$locale['535'] = "System e-mail address:<br /><br />
INFO:<br />The system e-mail is used to send the system e-mails.<br />
If a SMTP server is used, please enter the SMTP e-mail here.<br />
Otherwise, please enter your e-mail address (for example: noreply@YOUR-HOST.de or user@YOUR-HOST.de).";
$locale['535a'] = "Site administrator e-mail adress:<br /><br />
INFO:<br />Your private e-mail address.<br />
This e-mail address will be displayed in your profile and as the contact e-mail address in the contact form.)";
$locale['536'] = "Congratulation";
$locale['537'] = "Chrome-Fusion was successfully installed!";
$locale['538'] = "Installation Complete ";
$locale['539'] = "The installation of Chrome Fusion v2.00.02 is now complete. You can now use your new website.<br /><br />";
$locale['539'] .= "As soon as you click on \"next to the website \" below, your new homepage will be opened.<br /><br />";
$locale['539'] .= "ATTENTION: After entering your homepage, delete the setup.php from your server and set the write permissions (CHMOD) of the config.php back to 0644! Otherwise a security gap arise.<br /><br />";
$locale['539'] .= "Thank you for choosing Chrome-Fusion. ";
$locale['540'] = " to the website";

$timestamp = time();
$datum = date("Y");

// Welcome message
$locale['230'] = "Welcome to your site!";

// The steps
$locale['001'] = "Step 1: Locale";
$locale['002'] = "Step 2: File and Folder Permissions Test";
$locale['003'] = "Step 3: Database Settings";
$locale['004'] = "Step 4: Config / Database Setup";
$locale['005'] = "Step 5: Primary Admin Details";
$locale['006'] = "Step 6: Final Settings";
$locale['007'] = "Next";
$locale['008'] = "Back";
$locale['009'] = "Next";

// Step 1
$locale['010'] = "Please select the required locale (language):";
$locale['011'] = "Download more locales from <a href='http://chrome-fusion.de'>Chrome-Fusion.de</a>";

// Step 2
$locale['020'] = "In order for setup to continue, the following files/folders must be writable:";
$locale['021'] = "Write permissions check passed, click Next to continue.";
$locale['022'] = "Write permissions check failed, please give the selected files/folders the required write permissions.";
$locale['023'] = "Passed";
$locale['024'] = "Failed";
$locale['025'] = "Refresh";

// Step 3 - Access criteria
$locale['030'] = "Please enter your MySQL database access settings.";
$locale['031'] = "Database Hostname:";
$locale['032'] = "Database Username:";
$locale['033'] = "Database Password:";
$locale['034'] = "Database Name:";
$locale['035'] = "Table Prefix:";
$locale['036'] = "Cookie Prefix:";
$locale['037'] = "DB access method:";

// Step 4 - Database Setup
$locale['040'] = "Database connection established.";
$locale['041'] = "Config file successfully written.";
$locale['042'] = "Database tables created.";
$locale['043'] = "Error:";
$locale['044'] = "Unable to connect with MySQL.";
$locale['045'] = "Please ensure your MySQL username and password are correct.";
$locale['046'] = "Unable to write config file.";
$locale['047'] = "Please ensure config.php is writable.";
$locale['048'] = "Unable to create database tables.";
$locale['049'] = "Please specify your database name.";
$locale['050'] = "Unable to connect with MySQL database.";
$locale['051'] = "The specified MySQL database does not exist.";
$locale['052'] = "Table prefix error.";
$locale['053'] = "The specified table prefix is already in use.";
$locale['054'] = "Could not write or delete MySQL tables.";
$locale['055'] = "Please make sure your MySQL user has read, write and delete permission for the selected database.";
$locale['056'] = "Empty fields.";
$locale['057'] = "Please make sure you have filled out all the MySQL connection fields.";

// Step 5 - Super Admin login
$locale['060'] = "Primary Super Admin login details";
$locale['061'] = "Username:";
$locale['062'] = "Login Password:";
$locale['063'] = "Repeat Login password:";
$locale['064'] = "Admin Password:";
$locale['065'] = "Repeat Admin password:";
$locale['066'] = "System email address:<br />
(Used for sending System emails.<br />
When using SMTP for sending emails,<br />
enter the SMTP email adress.<br />
Otherwise enter your email adress.)";
$locale['066a'] = "Site Administrator email address:<br />
(Your email adress.<br />
This email adress is shown as the contact email.)";

// Step 6 - User details validation
$locale['070'] = "User name contains invalid characters.";
$locale['070b'] = "User name field can not be left empty.";
$locale['071'] = "Your two login passwords do not match.";
$locale['072'] = "Invalid login password, please use alpha numeric characters only.<br />Password must be a minimum of 8 characters long.";
$locale['072b'] = "Login password fields can not be left empty";
$locale['073'] = "Your two admin passwords do not match.";
$locale['074'] = "Your user password and admin password must be different.";
$locale['075'] = "Invalid admin password, please use alpha numeric characters only.<br />Password must be a minimum of 8 characters long.";
$locale['075b'] = "Admin password fields can not be left empty.";
$locale['076'] = "Your email address does not appear to be valid.";
$locale['076b'] = "Email field can not be left empty.";
$locale['077'] = "Your user settings are not correct:";

// Step 6 - Admin Panels
$locale['080'] = "Administrators";
$locale['080a'] = "Moderators";
$locale['081'] = "Article Categories";
$locale['082'] = "Articles";
$locale['083'] = "Banners";
$locale['084'] = "BB Codes";
$locale['085'] = "Blacklist";
$locale['086'] = "Comments";
$locale['087'] = "Custom Pages";
$locale['088'] = "Database Backup";
$locale['089'] = "Download Categories";
$locale['090'] = "Downloads";
$locale['091'] = "FAQs";
$locale['092'] = "Forums";
$locale['093'] = "Images";
$locale['094'] = "Infusions";
$locale['095'] = "Infusion Panels";
$locale['096'] = "Members";
$locale['097'] = "News Categories";
$locale['098'] = "News";
$locale['099'] = "Panels";
$locale['100'] = "Photo Albums";
$locale['101'] = "PHP Info";
$locale['102'] = "Polls";
$locale['103'] = "";
$locale['104'] = "Site Links";
$locale['105'] = "Smileys";
$locale['106'] = "Submissions";
$locale['107'] = "Upgrade";
$locale['108'] = "User Groups";
$locale['109'] = "Web Link Categories";
$locale['110'] = "Web Links";
$locale['111'] = "Main";
$locale['112'] = "Time and Date";
$locale['113'] = "Forum";
$locale['114'] = "Registration";
$locale['115'] = "Photo Gallery";
$locale['116'] = "Miscellaneous";
$locale['117'] = "Private Message";
$locale['118'] = "User Fields";
$locale['119'] = "Forum Ranks";
$locale['120'] = "User Field Categories";
$locale['121'] = "News";
$locale['122'] = "User Management";
$locale['123'] = "Downloads";
$locale['124'] = "Items per Page";
$locale['125'] = "Security";
$locale['126'] = "News Settings";
$locale['127'] = "Downloads Settings";


$locale['128'] = "Administrator Password Reset";
$locale['128a'] = "Moderator Password Reset";
$locale['129'] = "Error Log";
$locale['129a'] = "User Log";
$locale['129b'] = "robots.txt";

// Step 6 - Navigation Links
$locale['130'] = "Home";
$locale['131'] = "Articles";
$locale['132'] = "Downloads";
$locale['133'] = "FAQ";
$locale['134'] = "Discussion Forum";
$locale['135'] = "Contact Me";
$locale['136'] = "News Categories";
$locale['137'] = "Web Links";
$locale['138'] = "Photo Gallery";
$locale['139'] = "Search";
$locale['140'] = "Submit Link";
$locale['141'] = "Submit News";
$locale['142'] = "Submit Article";
$locale['143'] = "Submit Photo";
$locale['144'] = "Submit Download";

// Stage 6 - Panels
$locale['160'] = "Navigation";
$locale['161'] = "Online Users";
$locale['162'] = "Forum Threads";
$locale['163'] = "Latest Articles";
$locale['164'] = "Welcome Message";
$locale['165'] = "Forum Threads List";
$locale['166'] = "User Info";
$locale['167'] = "Members Poll";
$locale['168'] = "";

// Stage 6 - News Categories
$locale['180'] = "Bugs";
$locale['181'] = "Downloads";
$locale['182'] = "Games";
$locale['183'] = "Graphics";
$locale['184'] = "Hardware";
$locale['185'] = "Journal";
$locale['186'] = "Members";
$locale['187'] = "Mods";
$locale['188'] = "Movies";
$locale['189'] = "Network";
$locale['190'] = "News";
$locale['191'] = "Chrome-Fusion";
$locale['192'] = "Security";
$locale['193'] = "Software";
$locale['194'] = "Themes";
$locale['195'] = "Windows";

// Stage 6 - Sample Forum Ranks
$locale['200'] = "Super Admin";
$locale['201'] = "Admin";
$locale['202'] = "Moderator";
$locale['202a'] = "Super Moderator";
$locale['202b'] = "Forum Moderator";
$locale['203'] = "Newbie";
$locale['204'] = "Junior Member";
$locale['205'] = "Member";
$locale['206'] = "Senior Member";
$locale['207'] = "Veteran Member";
$locale['208'] = "Fusioneer";

// Stage 6 - Sample Smileys
$locale['210'] = "Smile";
$locale['211'] = "Wink";
$locale['212'] = "Sad";
$locale['213'] = "Frown";
$locale['214'] = "Shock";
$locale['215'] = "Pfft";
$locale['216'] = "Cool";
$locale['217'] = "Grin";
$locale['218'] = "Angry";

// Stage 6 - User Field Categories
$locale['220'] = "Contact Information";
$locale['221'] = "Miscellaneous Information";
$locale['222'] = "Options";
$locale['223'] = "Statistics";

// Final message
$locale['240'] = "Setup is complete, Chrome-Fusion v2.00.02 is now ready for use.<br />
Click Finish to go to your Chrome-Fusion powered site.<br />
<strong>Note:</strong> After you enter your site you should delete setup.php from
your server and chmod your config.php back to 644 for security purposes.<br /><br />
Thank you for choosing Chrome-Fusion.";

// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['shortdate'] = "%d.%m.%y";
$locale['longdate'] = "%B %d %Y %H:%M:%S";
$locale['forumdate'] = "%d-%m-%Y %H:%M";
$locale['newsdate'] = "%B %d %Y";
$locale['subheaderdate'] = "%B %d %Y %H:%M:%S";
?>