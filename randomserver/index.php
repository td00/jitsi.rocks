<?php
$urls = array("fi-hel-1", "fi-hel-2", "de-nue-1", "de-nue-2", "de-fsn-1", "de-fsn-2", "de-bra-1");
$url = array_rand($urls);
$forwardedurl = $urls[$url];
header("Location: https://$forwardedurl.jitsi.rocks");
?>
