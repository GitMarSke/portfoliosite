<?php

if (preg_match('#^/assets/#', $_SERVER["REQUEST_URI"])) {
	return false;
}

$url = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($url !== '/' && file_exists(__DIR__ . $url)) return false;
$_GET['it'] = $url;
require_once __DIR__.'/index.php';
