<?php

/* auto set base url */
if ($_SERVER['HTTP_HOST']!='localhost'){
	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
} else {
	define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/latihan_mvc/public_html/');
}

/* auto detect konfigurasi database */
if ($_SERVER['HTTP_HOST']!='localhost'){
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'wisnuhaf_db');
	define('DB_USER', 'wisnuhaf_user');
	define('DB_PASS', '(wnCT(9^}L]#^VA;u*');
} else {
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'latihan');
	define('DB_USER', 'root');
	define('DB_PASS', '');
}

/* konfigurasi mvc */
define('DS', DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', __DIR__ . DS . '..' . DS . 'Controller' . DS);
define('VIEW_PATH', __DIR__ . DS . '..' . DS . 'View' . DS);
define('MODEL_PATH', __DIR__ . DS . '..' . DS . 'Model' . DS);
define('ASSETS_URL', BASE_URL.'assets/');
