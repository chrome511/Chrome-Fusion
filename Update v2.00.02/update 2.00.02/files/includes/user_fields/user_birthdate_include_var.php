<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_birthdate_include_var.php
| Author: Digitanium
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
| Modified and compatible to PHP 7.2
| Copyright by Patrick Kruse (Chrome)
| http://chrome-fusion.de
+--------------------------------------------------------*/

if (!defined("IN_FUSION")) { die("Access Denied"); }

// Version of the user fields api
$user_field_api_version = "1.01.00";

$user_field_name = $locale['uf_birthdate'];

$user_field_desc = $locale['uf_birthdate_desc'];
$user_field_dbname = "user_birthdate";
$user_field_group = 2;
$user_field_dbinfo = "VARCHAR(10) NOT NULL DEFAULT '0000-00-00'";
?>