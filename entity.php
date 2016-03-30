<?php
$xml = "<Address><Name>L & T</Name><Address>";
$xml = str_ireplace("&", "&amp;", $xml);
echo $xml;
?>