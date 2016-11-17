<?php
namespace Jinraynor1\OpManager\Api\Methods;

use Jinraynor1\OpManager\Api\Main;

class DeviceSnapshot extends Main
{

    static function init()
    {

        self::registerMethods(array(
            'getPerformanceMonitors' => array('dataType' => 'GET', 'section' => 'device'),
            'getDeviceSummary' => array('dataType' => 'GET', 'section' => 'device'),
            'UpdateDeviceDetails' => array('dataType' => 'POST', 'section' => 'device'),
            'getInterfaceUtilization' => array('dataType' => 'POST', 'section' => 'device'),
            'getInterfaceData' => array('dataType' => 'POST', 'section' => 'device'),
            'GetCredentialsForDevice' => array('dataType' => 'GET', 'section' => 'device'),
            'getAssociatedMonitors' => array('dataType' => 'GET', 'section' => 'device'),
            'getPerfomanceMonitorDetails' => array('dataType' => 'GET', 'section' => 'device'),
            'EditPerfomanceMonitor' => array('dataType' => 'POST', 'section' => 'device'),
            'getInterfaceGraphs' => array('dataType' => 'GET', 'section' => 'device'),
            'getGraphNames' => array('dataType' => 'GET', 'section' => 'device'),
            'getGraphData' => array('dataType' => 'GET', 'section' => 'device'),
            'ConfigureMonitoringInterval' => array('dataType' => 'POST', 'section' => 'device')
        ));


    }


}
