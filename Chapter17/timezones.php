<?php
$tz = date_default_timezone_get();
$dtz = new DateTimeZone($tz);
$dt = new DateTime("now", $dtz);

echo "exam today: ".$dt->format("Y-m-d h:i:s");
?>
