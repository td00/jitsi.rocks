<?php
$urls = array("de-wob-1", "fi-hel-1", "fi-hel-2", "de-nue-1", "de-nue-2", "de-fsn-1", "de-fsn-2", "us-nyc-1", "gb-lon-1", "nl-ams-1");
$url = array_rand($urls);
$forwardedurl = $urls[$url];
header("Location: https://$forwardedurl.jitsi.rocks");
?>
