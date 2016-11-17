<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

class InterfaceDiscovery extends Main
{

    static function init()
    {

        self::registerMethods(array(
            'discoverInterface' => array('dataType' => 'POST', 'section' => 'discovery'),
            'getInterfaces' => array('dataType' => 'GET', 'section' => 'device'),
            'getCategoryList' => array('dataType' => 'GET', 'section' => 'device'),
            'getInterfaceSummary' => array('dataType' => 'GET', 'section' => 'device')
        ));


    }


}