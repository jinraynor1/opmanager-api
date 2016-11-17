<?php
namespace Jinraynor1\OpManager\Api\Methods;
use Jinraynor1\OpManager\Api\Main;

class Admin extends Main {

    static function init(){

        self::registerMethods(array(

            'getCredentialDetails'=>array('dataType' => 'GET', 'section' => 'admin'),
            'addSNMPV1Credential'=>array('dataType' => 'POST', 'section' => 'admin'),
        ));
    }

  

}
