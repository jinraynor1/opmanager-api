<?php
namespace Jinraynor1\OpManager\Api;


/**
 * Do requests to opmanager
 * @package Jinraynor1\OpmManager\Api
 */

class Client
{

    // bit flags
    const debug_all = -1; //all bits to 1
    const debug_basic = 1; //first bit
    const debug_verbose = 2; //second bit


    private static $apiKey;
    private static $apiUrl;

    private static $debug = 0;

    /**
     * Sets the apíkey
     * @param $apiKey
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Sets the url endpoint
     * @param $apiUrl
     */
    static function setApiUrl($apiUrl)
    {
        $_apiUrl = trim($apiUrl);

        // add trailing slash
        if (substr($_apiUrl, -1) != '/') {
            $_apiUrl .= '/';
        }

        // add suffix
        $_apiUrl .= 'api/json/';

        self::$apiUrl = $_apiUrl;
    }

    static function getApiUrl()
    {
        return self::$apiUrl;
    }

    /**
     * Sets the debug level
     * @param $debug one or more bit flags
     */
    static function setDebug($debug)
    {

        self::$debug = $debug;
    }

    /**
     * Output some debug
     * @param $string
     */
    static function _debug($string)
    {
        printf("%s %s \n", (date('Y-m-d H:i:s') . '[DEBUG]'), $string);

    }

    /**
     * Initiliaze the request endpoint
     * @param $data
     */
    public static function initialize($data)
    {

        if (!is_array($data)) {
            trigger_error('Invalid data on initialize');
        }

        if (!isset($data['apiKey']) || trim($data['apiKey']) == '') {
            trigger_error('Invalid api key');
        }

        if (!isset($data['apiUrl']) || trim($data['apiUrl']) == '') {
            trigger_error('Invalid api url');
        }

        self::setApiKey($data['apiKey']);
        self::setApiUrl($data['apiUrl']);
    }

    /** Make request and delivers response
     * @param $data
     * @return mixed
     */
    public static function doRequest($data)
    {

        if (!is_array($data)) {
            trigger_error('Invalid data');
        } else {
            if (!isset($data['section']) || !isset($data['method']) || !isset($data['type']) || !isset($data['parameters'])) {
                trigger_error('Arguments insufficient');
            }
        }

        $section = trim($data['section']);
        $rest_method = trim($data['method']);
        $type_request = strtoupper(trim($data['type']));

        if (!$section) {
            trigger_error('Invalid section');
        }

        if (!$rest_method) {
            trigger_error('Invalid method');
        }

        if (!in_array($type_request, array('POST', 'GET'))) {
            trigger_error('Invalid type');
        }


        $parameters_url_encoded = http_build_query($data['parameters']);


        $curl_options[CURLOPT_RETURNTRANSFER] = TRUE;

        //Anytime you send data greater than > 1024kbytes a server asks for a 100-continue handshake
        $curl_options[CURLOPT_HTTPHEADER] = array('Expect:');

        if ($type_request == 'POST') {
            $curl_options[CURLOPT_URL] = self::$apiUrl . $section . '/' . $rest_method . '?apiKey=' . self::$apiKey;
            $curl_options[CURLOPT_POST] = 1;
            $curl_options[CURLOPT_POSTFIELDS] = 'apiKey=' . self::$apiKey . '&' . $parameters_url_encoded;

        } elseif ($type_request == 'GET') {
            $curl_options[CURLOPT_URL] = self::$apiUrl . $section . '/' . $rest_method . '?apiKey=' . self::$apiKey . '&' . $parameters_url_encoded;
        }


        $curl = curl_init();


        // set up verbal debug
        if (self::$debug & self::debug_verbose) {
            $temp = tmpfile();
            $curl_options[CURLOPT_VERBOSE] = true;
            $curl_options[CURLOPT_STDERR] = $temp;


        }

        curl_setopt_array($curl, $curl_options);

        // show basic debug
        if (self::$debug & self::debug_basic) {

            self::_debug("url: " . $curl_options[CURLOPT_URL]);
            self::_debug("method: " . $type_request);
            self::_debug("parameters: " . $parameters_url_encoded);


        }

        // exec request
        $resp = curl_exec($curl);

        // show verbal debug
        if (self::$debug & self::debug_verbose && is_resource($temp)) {
            rewind($temp);
            self::_debug("verbose output is: " . stream_get_contents($temp));

        }

        // always close resource
        curl_close($curl);


        return $resp;
    }

}


