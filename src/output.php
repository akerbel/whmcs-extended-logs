<?php
namespace ExtendedLogs;
global $module;
include_once(ROOTDIR."/modules/addons/".$module.'/vendor/autoload.php');

$ExtendedLogs = new ExtendedLogsController($vars);
$ExtendedLogs->run();