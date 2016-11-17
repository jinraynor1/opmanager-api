<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

/**
 * Metodos del api que no aparecen en la documentacion =/
 *
 */
class HiddenMethods extends Main
{

    static function init()
    {

        self::registerMethods(array(
            'queryDeviceForSysOID' => array('dataType' => 'GET', 'section' => 'admin'),
            'getDeviceAssociatedMonitors' => array('dataType' => 'GET', 'section' => 'device'),
            'associateIntfTemplateToDevices' => array('dataType' => 'POST', 'section' => 'admin'),
            'applyIntfTemplateToDevices' => array('dataType' => 'POST', 'section' => 'admin'),


        ));


    }


}

