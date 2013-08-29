<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
$hdrhid = "192.168.3.20";
echo exec("hdhomerun_config '$hdrhid' get /tuner0/vstatus");
//echo "$hdrhid"
?>

