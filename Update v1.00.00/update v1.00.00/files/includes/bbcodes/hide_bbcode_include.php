<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: hide_bbcode_include.php
| Author: Wooya
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------+
| Modified by Patrick Kruse (Chrome)
| Moderator function by Patrick Kruse (Chrome)
| Copyright by Patrick Kruse (Chrome)
| http://chrome-fusion.de
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

if (iMODERATOR) {
	$text = preg_replace('#\[hide\](.*?)\[/hide\]#si', '<div class=\'quote\'><strong>'.$locale['bb_hide'].'</strong><br /><span style=\'color:red;font-weight:bold\'>\1</span></div>', $text);
} else {
	$text = preg_replace('#\[hide\](.*?)\[/hide\]#si', '', $text);
}
?>