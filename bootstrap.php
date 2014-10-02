<?php

error_reporting(E_ALL | E_STRICT);

if(':' == PATH_SEPARATOR){

	$currentWorkingDirectory = '.';
	$phpUnitPath = '/usr/local/zend/share/pear/';

	set_include_path($phpUnitPath . ';' . $currentWorkingDirectory . ';' . get_include_path());
}

date_default_timezone_set('Europe/London');