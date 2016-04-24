<?php

if (!defined('WHMCS')) {
    die('This file cannot be accessed directly');
}

function ExtendedLogs_config()
{
    $configarray = array(
        'name' => 'Extended Logs',
        'description' => '',
        'version' => '1.0',
        'author' => 'Anton Kerbel',
        'language' => 'english',
        'fields' => array(),
    );

    return $configarray;
}

function ExtendedLogs_output($vars)
{
    global $module;
    include_once ROOTDIR.'/modules/addons/'.$module.'/src/output.php';
}
