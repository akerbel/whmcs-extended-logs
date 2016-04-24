<?php

namespace ExtendedLogs;

if (!defined('WHMCS')) {
    die('This file cannot be accessed directly');
}

use whmcsEasyAddons;

/**
 * The main ExtendedLogs controller.
 */
class ExtendedLogsController extends whmcsEasyAddons\PageController
{
    /** @var string A default tab */
    public $action = 'modulelogs';

    /** @var array An array of tabs */
    public $menu = array(
        'Module Logs' => 'modulelogs',
        'Activity Logs' => 'activitylogs',
    );

    public function modulelogsAction()
    {
        $log = new whmcsEasyAddons\ItemList(
            array(
                'SELECT' => '*',
                'FROM' => 'tblmodulelog',
            ),
            array(
                array(
                    'name' => 'id', 'value' => $_GET['filter']['id'], 'description' => 'id',
                ),
                array(
                    'name' => 'date', 'value' => $_GET['filter']['date'], 'description' => 'date',
                ),
                array(
                    'name' => 'module', 'value' => $_GET['filter']['module'], 'description' => 'module',
                ),
                array(
                    'name' => 'action', 'value' => $_GET['filter']['action'], 'description' => 'action', 'type' => 'LIKE',
                ),
                array(
                    'name' => 'request', 'value' => $_GET['filter']['request'], 'description' => 'request', 'type' => 'LIKE',
                ),
                array(
                    'name' => 'response', 'value' => $_GET['filter']['response'], 'description' => 'response',
                ),
            )
        );
        $this->view->assign('result', $log->result);
        $this->view->assign('paginator', $log->paginator);
        $this->view->assign('tablehead', $log->tablehead);
        $this->view->assign('filter', $log->filter);
    }

    public function activitylogsAction()
    {
        $log = new whmcsEasyAddons\ItemList(
            array(
                'SELECT' => '*',
                'FROM' => 'tblactivitylog',
            ),
            array(
                array(
                    'name' => 'id', 'value' => $_GET['filter']['id'], 'description' => 'id',
                ),
                array(
                    'name' => 'date', 'value' => $_GET['filter']['date'], 'description' => 'date',
                ),
                array(
                    'name' => 'description', 'value' => $_GET['filter']['description'], 'description' => 'description', 'type' => 'LIKE',
                ),
                array(
                    'name' => 'user', 'value' => $_GET['filter']['user'], 'description' => 'user',
                ),
                array(
                    'name' => 'userid', 'value' => $_GET['filter']['userid'], 'description' => 'userid',
                ),
                array(
                    'name' => 'ipaddr', 'value' => $_GET['filter']['ipaddr'], 'description' => 'ipaddr', 'type' => 'LIKE',
                ),
            )
        );
        $this->view->assign('result', $log->result);
        $this->view->assign('paginator', $log->paginator);
        $this->view->assign('tablehead', $log->tablehead);
        $this->view->assign('filter', $log->filter);
    }
}
