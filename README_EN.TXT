INTRODUCTION
----------------------------------------------------
Chrome-Fusion is a light-weight open-source content management system (CMS) written in PHP 5. It utilises a MySQL database to store your site content and includes a simple,
comprehensive administration system. Chrome-Fusion includes the most common features you would expect to see in many other CMS packages.

This software package is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License (AGPL) as published by the
Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This software package is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
FITNESS FOR A PARTICULAR PURPOSE. See the Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along with this software package. If not, see www.fsf.org.

Important Note: You are not permitted to remove the footer copyright notice:

Powered by Chrome-Fusion copyright © 2016 by Patrick Kruse.
Powered by PHP-Fusion copyright © 2002 - 2011 by Nick Jones.
Released as free software without warranties under GNU Affero GPL v3.

For copyright removal options please refer to our license information page at www.php-fusion.co.uk and www.chrome-fusion.de.



INSTALLATION
----------------------------------------------------
Before installing Chrome-Fusion you need to check the requirements for this version:

- PHP 5.1.2 or higher
- MySQL 4.1 or higher

You have to create a MySQL database. You can do this via your web-hosting control panel or phpMyAdmin. Make sure you have your mysql access details at hand including
the hostname, username, password and database name as you will need to specify these during setup.

1. Before you upload the files, rename the file _config.php (located in the files folder) to config.php.

2. Upload the contents of the files folder to your web server.

3. Unless you run Chrome-Fusion on a local server, in most cases you will need to CHMOD the following files and folders to 777:

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

Note: Some hosts doesn't allow CHMOD 777, in that case you can use CHMOD 755 if CHMOD 777 fails.

4. Go to your website where setup.php should start automatically. If not, you should run setup.php manually by entering your full site url followed by /setup.php.
Example: http://www.yourdomain.com/setup.php.

5. Complete the setup process by following all on-screen prompts.

6. Immediately after completing the installation of Chrome-Fusion you must CHMOD config.php back to 644 AND delete setup.php from your web server. Failure to do so could
lead to someone else taking control of your site.