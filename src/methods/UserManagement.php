<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

class UserManagement extends Main
{


    static function init()
    {

        self::registerMethods(array(

            'addUser' => array('dataType' => 'POST', 'section' => 'admin'),
            'listUsers' => array('dataType' => 'GET', 'section' => 'admin'),
            'deleteUser' => array('dataType' => 'POST', 'section' => 'admin'),

        ));


    }

}