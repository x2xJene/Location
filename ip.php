<?php
$ip = $_SERVER["REMOTE_ADDR"];
$ua = $_SERVER["HTTP_USER_AGENT"];
preg_match("/(Firefox|Chrome|Safari|Edge)[\/\s]?([0-9.])*/",$ua,$bX91);
$browser = $bX91[1] ?? 'unknown';
$browserVersion =  $bX91[2] ?? 'unknown';
preg_match('/(Windows|Mac OS|Android|iphon OS)[\/\s]?([0-9._])*/',$ua,$osX91);
$os = $osX91[1] ?? 'unknown';
$osVersion = $osX91[2] ?? 'unknown';
$data = "IP:$ip\nUser-Agent:$ua\nBrowser-Type:$browser\nBrowser-Version:$browserVersion\nOS:$os\nOS-Version:$osVersion\n    ";
file_put_contents("data_ip.txt",$data,FILE_APPEND);
?>