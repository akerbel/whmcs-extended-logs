<?php


if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

function ExtendedLogs_config() {
    $configarray = array(
    "name" => "Extended Logs",
    "description" => "",
    "version" => "1.0",
    "author" => "Anton Kerbel",
    "language" => "english",
    "fields" => array(
		//"droptable" => array ("FriendlyName" => "Удалить таблицу", "Type" => "yesno", "Description" => "Удалить таблицу модуля при деактивации", "Default" => false),
	));
    return $configarray;
}
    include_once(ROOTDIR."/modules/addons/".$module.'/vendor/autoload.php');

function ExtendedLogs_output($vars) {

	global $module;
    include_once(ROOTDIR."/modules/addons/".$module.'/src/output.php'); 
}