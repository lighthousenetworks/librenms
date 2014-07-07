<?php

if ($device['os'] == "saf")
{
  echo("SAF Radio: ");

  $descr = "System Temperature";
  $temperature  = snmp_get($device, ".1.3.6.1.4.1.7571.100.1.1.5.1.1.1.5", "-Oqv");

  if ($descr != "" && is_numeric($temperature) && $temperature > "0")
  {
    $temperature_oid = ".1.3.6.1.4.1.7571.100.1.1.5.1.1.1.5";
    discover_sensor($valid['sensor'], 'temperature', $device, ".1.3.6.1.4.1.7571.100.1.1.5.1.1.1.5", "1", 'saf', $descr, '1', '1', NULL, NULL, NULL, NULL, $temperature);
  }
}

?>
