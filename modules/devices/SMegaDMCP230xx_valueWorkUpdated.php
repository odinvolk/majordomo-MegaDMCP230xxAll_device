<?php

startMeasure('statusUpdated');
$ot = $this->object_title;

$ncno = $this->getProperty('ncno');

//DebMes("Updated $ot - ".$ncno . " new value: ".$params['NEW_VALUE'],'openclose');

$this->setProperty('updated', time());
$this->callMethodSafe('setUpdatedText');

$this->callMethod('keepAlive');

$is_blocked=(int)$this->getProperty('blocked');
if ($is_blocked) {
    //DebMes("Blocked $ot",'openclose');
    return;
}

if ($this->getProperty('isActivity')) {
    $linked_room = $this->getProperty('linkedRoom');
    if (getGlobal('NobodyHomeMode.active')) {
        callMethodSafe('NobodyHomeMode.deactivate', array('sensor' => $ot, 'room' => $linked_room));
    }
    $nobodyhome_timeout = 1 * 60 * 60;
    if (defined('SETTINGS_BEHAVIOR_NOBODYHOME_TIMEOUT')) {
        $nobodyhome_timeout = SETTINGS_BEHAVIOR_NOBODYHOME_TIMEOUT * 60;
    }
    if ($nobodyhome_timeout) {
        setTimeOut('nobodyHome', "callMethodSafe('NobodyHomeMode.activate');", $nobodyhome_timeout);
    }
    if ($linked_room) {
        callMethodSafe($linked_room . '.onActivity', array('sensor' => $ot));
    }
}

$description = $this->description;
if (!$description) {
    $description = $ot;
}
if ($this->getProperty('notify_status')) {
    if (isset($params['NEW_VALUE'])) {
        if (($params['NEW_VALUE'] && $ncno == 'no') || (!$params['NEW_VALUE'] && $ncno == 'nc'))
            saySafe($description . ' ' . LANG_DEVICES_STATUS_OPEN, 2);
        else
            saySafe($description . ' ' . LANG_DEVICES_STATUS_CLOSED, 2);
    }
}
if ($this->getProperty('notify_nc')) {
    if (isset($params['NEW_VALUE'])) {
        if (($params['NEW_VALUE'] && $ncno == 'no') || (!$params['NEW_VALUE'] && $ncno == 'nc')) {
            setTimeout($ot . '_notify_timer_1', "saySafe('" . LANG_REMINDER_INTRO." ".$description . " " . LANG_DEVICES_STATUS_OPEN . "!', 5);", 10 * 60);
            setTimeout($ot . '_notify_timer_2', "saySafe('" . LANG_REMINDER_INTRO." ".$description . " " . LANG_DEVICES_STATUS_OPEN . "!', 5);", 20 * 60);
            setTimeout($ot . '_notify_timer_3', "saySafe('" . LANG_REMINDER_INTRO." ".$description . " " . LANG_DEVICES_STATUS_OPEN . "!', 5);", 30 * 60);
            setTimeout($ot . '_notify_timer_4', "saySafe('" . LANG_REMINDER_INTRO." ".$description . " " . LANG_DEVICES_STATUS_OPEN . "!', 5);", 60 * 60);
        } else {
            clearTimeOut($ot . '_notify_timer_1');
            clearTimeOut($ot . '_notify_timer_2');
            clearTimeOut($ot . '_notify_timer_3');
            clearTimeOut($ot . '_notify_timer_4');
        }
    }
}


//DebMes("LogicAction $ot",'openclose');
$this->callMethodSafe('logicAction');

//DebMes("LinkedDevices $ot",'openclose');
startMeasure('statusUpdatedLinkedDevices');
include_once(DIR_MODULES . 'devices/devices.class.php');
$dv = new devices();
$dv->checkLinkedDevicesAction($ot, $params['NEW_VALUE']);
endMeasure('statusUpdatedLinkedDevices');




$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('PortSDA');

//http://192.168.10.101/sec/?pt=31&ext=10&cmd=get
//Переключение диммируемого канала
//$value = file_get_contents("http://192.168.10.101/sec/?pt=31&ext=9&cmd=get");
//http://192.168.10.101/sec/?pt=31&ext=0&cmd=get
$value = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&cmd=get");
//$value = file_get_contents("http://192.168.10.101/sec/?pt=31&cmd=get");
$this->setProperty('stored_value', $value);

//if ($value <> "ON") {
//$value = '0';
//} else {
//$value = '1';
//}


$p = explode(";", $value);

$this->setProperty('p0',$p[0]);
$this->setProperty('p1',$p[1]);
$this->setProperty('p2',$p[2]);
$this->setProperty('p3',$p[3]);
$this->setProperty('p4',$p[4]);
$this->setProperty('p5',$p[5]);
$this->setProperty('p6',$p[6]);
$this->setProperty('p7',$p[7]);
$this->setProperty('p8',$p[8]);
$this->setProperty('p9',$p[9]);
$this->setProperty('p10',$p[10]);
$this->setProperty('p11',$p[11]);
$this->setProperty('p12',$p[12]);
$this->setProperty('p13',$p[13]);
$this->setProperty('p14',$p[14]);
$this->setProperty('p15',$p[15]);

//пишите свой скрипт, по всем топикам вызывая функцию
//function mqttPublish($topic, $value, $qos = 0, $retain = 0);

include_once(DIR_MODULES . 'mqtt/mqtt.class.php');
 $mqtt = new mqtt();
// $topic = "/mjd/26/".$ot."/stored_value";
 //$value = gg('ThisComputer.lastSayMessage');
// $rezult = $mqtt->mqttPublish($topic, $value, 0, 0);
 $topic = "/mjd/26/".$ot."/p0/status";
 $rezult = $mqtt->mqttPublish($topic, $p[0], 0, 0);
 $topic = "/mjd/26/".$ot."/p1/status";
 $rezult = $mqtt->mqttPublish($topic, $p[1], 0, 0);
 $topic = "/mjd/26/".$ot."/p2/status";
 $rezult = $mqtt->mqttPublish($topic, $p[2], 0, 0);
 $topic = "/mjd/26/".$ot."/p3/status";
 $rezult = $mqtt->mqttPublish($topic, $p[3], 0, 0);
 $topic = "/mjd/26/".$ot."/p4/status";
 $rezult = $mqtt->mqttPublish($topic, $p[4], 0, 0);
 $topic = "/mjd/26/".$ot."/p5/status";
 $rezult = $mqtt->mqttPublish($topic, $p[5], 0, 0);
 $topic = "/mjd/26/".$ot."/p6/status";
 $rezult = $mqtt->mqttPublish($topic, $p[6], 0, 0);
 $topic = "/mjd/26/".$ot."/p7/status";
 $rezult = $mqtt->mqttPublish($topic, $p[7], 0, 0);
 $topic = "/mjd/26/".$ot."/p8/status";
 $rezult = $mqtt->mqttPublish($topic, $p[8], 0, 0);
 $topic = "/mjd/26/".$ot."/p9/status";
 $rezult = $mqtt->mqttPublish($topic, $p[9], 0, 0);
 $topic = "/mjd/26/".$ot."/p10/status";
 $rezult = $mqtt->mqttPublish($topic, $p[10], 0, 0); 
 $topic = "/mjd/26/".$ot."/p11/status";
 $rezult = $mqtt->mqttPublish($topic, $p[11], 0, 0); 
 $topic = "/mjd/26/".$ot."/p12/status";
 $rezult = $mqtt->mqttPublish($topic, $p[12], 0, 0); 
 $topic = "/mjd/26/".$ot."/p13/status";
 $rezult = $mqtt->mqttPublish($topic, $p[13], 0, 0); 
 $topic = "/mjd/26/".$ot."/p14/status";
 $rezult = $mqtt->mqttPublish($topic, $p[14], 0, 0);
 $topic = "/mjd/26/".$ot."/p15/status";
 $rezult = $mqtt->mqttPublish($topic, $p[15], 0, 0);


//list($p0, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15) = explode(";", $value);

//If ($value == 0 || $value == "") {
//$this->callMethod('turnOn');
//} else {
//$this->callMethod('turnOff');
//}
//return "";

//			$this->setProperty('p1',$p0);
//			$this->setProperty('p2',$p1);
//			$this->setProperty('p3',$p2);
//			$this->setProperty('p4',$p3);
//			$this->setProperty('p5',$p4);
//			$this->setProperty('p6',$p5);
//			$this->setProperty('p7',$p6);
//			$this->setProperty('p8',$p7);
//			$this->setProperty('p9',$p8);
//			$this->setProperty('p10',$p9);
//			$this->setProperty('p11',$p10);
//			$this->setProperty('p12',$p11);
//			$this->setProperty('p13',$p12);
//			$this->setProperty('p14',$p13);
//			$this->setProperty('p15',$p14);
endMeasure('statusUpdated');
