<?php
// set the ip address of the hd homerun prime device
$hdrhid = "hdhr-1317135e.vlan3.thelaughingman.local";
$tuner0vchannel = "12";
// sets a variable as the ip address of eth0
$ip = exec("ip a show dev eth0 | grep ' inet ' | awk '{print $2}' | awk -F '/' '{print $1}'");
//check and see if VLC is running and if so kill the process, if vlc isnt running its not going to complain.
exec("ps aux | grep [v]lc  | awk '{print $2}' | xargs -L1 kill -9 >/dev/null 2>&1");
// starts VLC up and sets it to listen to incoming udp traffic on port  5000 and then sets it to transcode and make the stream available on port 8080
exec("su jnc8651 -c 'cvlc -d udp://@:5000 :sout=#t'ranscode{vcodec=h264,vb=560,fps=30,scale=1,width=1280,height=720,acodec=mp4a,ab=64,channels=2,samplerate=44100,deinterlace}:standard{access=http,mux=flv,dst=:8181/}' :sout-keep'");
//sets the channel number on tuner 0
exec("hdhomerun_config '$hdrhid' set /tuner0/vchannel $tuner0vchannel");
// prints out the variables to ensure they are being set right
echo "eth0 ip is '$ip'";
echo "\n";
echo " the hd homerun prime id is '$hdrhid'";
?>
