<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

class Inventory extends Main
{


    static function init()
    {

        self::registerMethods(array(
            'listDevices' => array('dataType' => 'GET', 'section' => 'device'),
            'fetchDevicesList' => array('dataType' => 'GET', 'section' => 'device'),
            'fetchInterfacesList' => array('dataType' => 'POST', 'section' => 'device'),
            'getDevicePackageList' => array('dataType' => 'GET', 'section' => 'device'),
            'getVendorList' => array('dataType' => 'GET', 'section' => 'device'),


        ));


    }


}