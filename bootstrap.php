<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', - 1);

if(':' == PATH_SEPARATOR){

	$currentWorkingDirectory = '.';
	$phpUnitPath = '/usr/local/zend/share/pear/';

	set_include_path($phpUnitPath . ';' . $currentWorkingDirectory . ';' . get_include_path());
}

date_default_timezone_set('Europe/London');