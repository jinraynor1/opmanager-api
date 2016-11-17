<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;


class Maps extends Main
{

    static function init()
    {

        self::registerMethods(array(
            'addBusinessView' => array('dataType' => 'POST', 'section' => 'discovery'),
            'addDeviceToBV' => array('dataType' => 'POST', 'section' => 'discovery'),
            'getBusinessView' => array('dataType' => 'GET', 'section' => 'businessview'),
            'getBusinessDetailsView' => array('dataType' => 'GET', 'section' => 'businessview'),
        ));


    }


}
