# idIoT: Lights (Plaid CTF 2018)

* 450 pts

## Description

>>>
It's showtime. The LEDs in the picture are from a Particle Photon that the idIoT has running this program(`https://play.plaidctf.com/files/led-controller_7c0a5af013fe4449da662aac2c115f01b2369531.ino`). We managed to convince him a dump of the flash (idiot-1(`https://play.plaidctf.com/files/dump-1_709196f504e3bcf3b732bfb0bef0e811c1468c45.bin`), idiot-3(`https://play.plaidctf.com/files/dump-3_20ac9ea04541fa3910f8ceadaafdecb251560889.bin`)), but I think he figured out we were up to something: there are a suspicious number of null bytes in a couple places. However, I know he keeps one of his flags on a dashboard(`https://play.plaidctf.com/files/index_7e57d3447a5ed2a36f610b4bfbcf919d56a8af6a.html.gz`) that he serves directly from his local filesystem, so this is definitely a worthy target.

To help you along, I've also compiled a few helpful notes.(`https://play.plaidctf.com/files/helpful-notes_d45168265fd62e4ef437ad1a19d7b8f623f39eac.txt`)

To download everything in one file, click here.(`https://play.plaidctf.com/files/lights_9350285dd16b15c80cc0d7710f2a806b.tar.gz`)

(You may need to connect to device.spark.io. Attempting to exploit it is out-of-scope, however.)

(You will probably need to solve both idIoT: Action and idIoT: Camera first.)
>>>

## Links
* https://play.plaidctf.com/
