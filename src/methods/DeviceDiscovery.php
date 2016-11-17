<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

class DeviceDiscovery extends Main
{

    static function init()
    {

        self::registerMethods(array(
            'searchDevice' => array('dataType' => 'GET', 'section' => 'discovery'),
            'addDevice' => array('dataType' => 'POST', 'section' => 'discovery'),
            'addPerfomanceMonitors' => array('dataType' => 'POST', 'section' => 'device'),
            'doSearch' => array('dataType' => 'GET', 'section' => 'discovery'),
            'listCredentials' => array('dataType' => 'GET', 'section' => 'admin'),
            'checkDeviceIdentifier' => array('dataType' => 'GET', 'section' => 'admin'),
            'discoverNetwork' => array('dataType' => 'POST', 'section' => 'discovery'),
            'reDiscoverInterfaces' => array('dataType' => 'POST', 'section' => 'discovery'),
            'deleteDevice' => array('dataType' => 'POST', 'section' => 'discovery'),
        ));


    }


}
