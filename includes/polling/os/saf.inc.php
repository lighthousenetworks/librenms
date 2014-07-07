<?php

$hardware = trim(snmp_get($device, "1.3.6.1.4.1.7571.100.1.1.5.1.1.1.1", "-OQv", "", ""),'"');
if( strstr($poll_device['sysDescr'], "SAF")) { $version = substr($poll_device['sysDescr'], 38); }

?>
