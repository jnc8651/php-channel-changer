<?php
// set the ip address of the hd homerun prime device 
$hdrhid = "192.168.3.20";
//$tuner0vchannel = "12";
echo exec("ip a show dev eth0 | grep 'inet' | awk \{print $2\} \| awk -F \"/\" '\{print $1\}'");
//sets the channel number on tuner 0
//exec("hdhomerun_config '$hdrhid' set /tuner0/vchannel $tuner0vchannel");
//echo "$ip";
?>

