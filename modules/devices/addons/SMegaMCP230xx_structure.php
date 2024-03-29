<?php
 
$this->device_types['megadmcp230xxAll'] = array(
        'TITLE'=>'Расширитель MegaDMCP230xxAll',
        'PARENT_CLASS'=>'SDevices',
        'CLASS'=>'SMegaDMCP230xxAll',
        'METHODS'=>array(
            'statusUpdated'=>array('DESCRIPTION'=>'Data Value updated event'),
            'valueWorkUpdated'=>array('DESCRIPTION'=>'Work Value updated event'),
            'refreshStats'=>array('DESCRIPTION'=>'Refreshes daily/monthly stats','_CONFIG_SHOW'=>1),
        ),
        'PROPERTIES'=>array(
            'ipAddress'=>array('DESCRIPTION'=>'IP-адрес Меги','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'Password'=>array('DESCRIPTION'=>'Пароль Меги','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'PortSDA'=>array('DESCRIPTION'=>'Порт Меги SDA','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'PortINT'=>array('DESCRIPTION'=>'Порт Меги INT','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'Ext'=>array('DESCRIPTION'=>'Канал MCP230xx','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'value'=>array('DESCRIPTION'=>'Data Value','ONCHANGE'=>'valueUpdated','DATA_KEY'=>1),
            'stored_value'=>array('DESCRIPTION'=>'Month Value'),
            'p0'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p1'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p2'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p3'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p4'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p5'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p6'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p7'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p8'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p9'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p10'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p11'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p12'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p13'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p14'=>array('DESCRIPTION'=>'Канал MCP230xx'),
            'p15'=>array('DESCRIPTION'=>'Канал MCP230xx'),
        ),
);
