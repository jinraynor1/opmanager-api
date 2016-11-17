<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

class Alerts extends Main
{

    static function init()
    {

        self::registerMethods(array(

            'listAlarms' => array('dataType' => 'GET', 'section' => 'alarm'),
            'alarmProperties' => array('dataType' => 'GET', 'section' => 'alarm'),

        ));

    }


}
