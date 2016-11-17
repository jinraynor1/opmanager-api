<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

class Templates extends Main
{

    /**
     * Inicializar metodos del api que modifican las plantillas
     */


    static function init()
    {

        self::registerMethods(array(

            'addDeviceTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'addProcessTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'addVendor' => array('dataType' => 'POST', 'section' => 'admin'),
            'associateDeviceTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'associateProcessTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'deleteDeviceTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'deleteProcessTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'deleteSysoid' => array('dataType' => 'POST', 'section' => 'admin'),
            'editInterfaceTemplates' => array('dataType' => 'POST', 'section' => 'admin'),
            'getProcessTemplateDetails' => array('dataType' => 'GET', 'section' => 'admin'),
            'getVendorMonitors' => array('dataType' => 'GET', 'section' => 'admin'),
            'listDeviceTemplates' => array('dataType' => 'GET', 'section' => 'admin'),
            'listInterfaceTemplates' => array('dataType' => 'GET', 'section' => 'admin'),
            'listProcessTemplates' => array('dataType' => 'GET', 'section' => 'admin'),
            'updateDeviceTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'updateProcessTemplateDetails' => array('dataType' => 'POST', 'section' => 'admin'),
            'viewDeviceTemplate' => array('dataType' => 'GET', 'section' => 'admin'),
            'viewInterfaceTemplates' => array('dataType' => 'GET', 'section' => 'admin'),
            'getAssociatedCredentials' => array('dataType' => 'GET', 'section' => 'device'),
            'deletePerfomanceMonitors' => array('dataType' => 'POST', 'section' => 'device'),
            'updateFileFolderTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'editFileFolderTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'deleteFileFolderTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'saveFolderMonitorTemplates' => array('dataType' => 'POST', 'section' => 'admin'),
            'saveFileMonitorTemplates' => array('dataType' => 'POST', 'section' => 'admin'),
            'showFolderMonitorTemplates' => array('dataType' => 'POST', 'section' => 'admin'),
            'showFileMonitorTemplates' => array('dataType' => 'GET', 'section' => 'admin'),


            'addScritpTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'testNewScriptTemplate' => array('dataType' => 'POST', 'section' => 'admin'),
            'testScriptTemplate' => array('dataType' => 'POST', 'section' => 'admin'),


            'isScriptTemplateExists' => array('dataType' => 'GET', 'section' => 'admin'),

            'deleteScriptTemplate' => array('dataType' => 'POST', 'section' => 'admin'),

            'getScriptTemplateInfo' => array('dataType' => 'GET', 'section' => 'admin'),

        ));


    }

}