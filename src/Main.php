<?php
namespace Jinraynor1\OpManager\Api;

use Jinraynor1\OpManager\Api\Methods as Methods;


/**
 * Wrapper for call methods more easily
 * @package Jinraynor1\OpmManager\Api
 */
class Main
{


    static $methods = array();


    /**
     * Register methods
     * @param array $newMethods
     */
    static function registerMethods($newMethods = array())
    {

        self::$methods = array_merge(self::$methods, $newMethods);

    }

    /**
     * Init client and load methods
     * @param array $params
     */
    static function initialize($params = array())
    {


        Client::initialize(
            array(
                'apiUrl' => $params['apiUrl'],
                'apiKey' => $params['apiKey']

            ));


        // load mapped methods

        $methodsDir = dirname(__FILE__) . '/methods/';
        $dir_handle = opendir($methodsDir);

        while ($file = readdir($dir_handle)) {


            $fileInfo = pathinfo($file);

            // if methods file exists load it
            if ($fileInfo['extension'] == 'php' && file_exists($methodsDir . $fileInfo['basename'])) {

                require_once($methodsDir . $fileInfo['basename']);

                $objName = '\\' . __NAMESPACE__ . '\\methods\\' . substr($fileInfo['basename'], 0, strpos($fileInfo['basename'], '.php'));

                // register method
                if (method_exists($objName, 'init')) {
                    call_user_func(array($objName, 'init'));

                }


            }
        }

    }

    /**
     * Call a method if its mapped
     *
     * @param type $methodRequested Method name
     * @param type $inputParams params of the method
     * @return string Resultado de la operacion
     */
    static function dispatcher($methodRequested, $inputParams = array())
    {
        $response = null;

        if (empty(self::$methods)) {
            trigger_error("Methods are empty, register some methods");

        } else {
            $method_founded = false;

            foreach (self::$methods as $methodName => $methodParams) {

                if ($methodName == $methodRequested) {
                    $method_founded = true;
                    break;
                }

            }


            if ($method_founded) {

                $request = array(
                    'section' => $methodParams['section'],
                    'method' => $methodName,
                    'type' => $methodParams['dataType'],
                    'parameters' => $inputParams);

                $response = Client::doRequest($request);


            } else {
                trigger_error("The requested method was not founded");
            }
        }

        return json_decode($response);

    }


}
