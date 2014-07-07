<?php

if (!$os)
{
  # RouterOS <= 4
  # sysDescr.0 = STRING: router
  if ($sysDescr == "router")
  {
    if (is_numeric(snmp_get($device, "SNMPv2-SMI::enterprises.7571.100.1.1.5.1", "-Oqv", "")))
    {
      $os = "saf";
    }
  }
  # Routeros >= 5
  # sysDescr.0 = STRING: RouterOS RB493AH
  if (preg_match("/^SAF/", $sysDescr)) { $os = "saf"; }
}

?>
