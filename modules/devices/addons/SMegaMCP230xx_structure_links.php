<?php
$this->device_links['SMegaDMCP230xx']=array(
    array (
        'LINK_NAME'=>'sensor_pass_port0',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 0 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port1',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 1 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port2',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 2 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port3',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 3 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port4',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 4 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port5',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 5 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port6',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 6 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port7',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 7 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port8',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 8 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port9',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 9 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port10',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 10 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port11',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 11 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port12',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 12 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port13',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 13 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port14',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 14 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array (
        'LINK_NAME'=>'sensor_pass_port15',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство с 15 порта',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array(
        'LINK_NAME'=>'switch_it',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT,
        'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SWITCH_IT_DESCRIPTION,
        'TARGET_CLASS'=>'SControllers',
        'PARAMS'=>array(
            array(
                'PARAM_NAME'=>'action_type',
                'PARAM_TITLE'=>LANG_DEVICES_LINK_ACTION_TYPE,
                'PARAM_TYPE'=>'select',
                'PARAM_OPTIONS'=>array(
                    array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_ON,'VALUE'=>'turnon'),
                    array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_OFF,'VALUE'=>'turnoff'),
                    array('TITLE'=>LANG_DEVICES_LINK_TYPE_SWITCH,'VALUE'=>'switch')
                    )
            ),
            array(
                'PARAM_NAME'=>'action_delay',
                'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT_PARAM_ACTION_DELAY,
                'PARAM_TYPE'=>'num'
            )
        )
    ),
);
