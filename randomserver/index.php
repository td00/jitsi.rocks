<?php
$urls = array("de-wob-2", "fi-hel-1", "fi-hel-2");
$url = array_rand($urls);
$forwardedurl = $urls[$url];
header("Location: https://$forwardedurl.jitsi.rocks");
?>
