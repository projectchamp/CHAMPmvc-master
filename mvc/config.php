<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', 'http://127.0.0.1/mvc');
define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'psitsoft');
define('DB_USER', 'root');
define('DB_PASS', '');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');