<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
$HDRHID = '192.168.3.20';
echo exec('hdhomerun_config $HDHRID get /tuner0/vstatus');
echo "$HDRHID"
?>

