# Huawei External Captive Portal

This portal has been tested on the following hardware:

```
Device: AirEngine5760-51
Redirect Method: GET
```

Apache access log:
```
"GET /?userip=192%2E168%2E40%2E143&usermac=5ae7d4727798&url=http%3A%2F%2F192%2E168%2E40%2E1%3A8000 HTTP/1.1" 200 3031 "http://connectivitycheck.gstatic.com/" "Mozilla/5.0 (Linux; Android 15; SM-A336E Build/AP3A.240905.015.A2; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/138.0.7204.179 Mobile Safari/537.36"
```

Example of RADIUS Access-Request Packet (in FreeRADIUS debug):-
```
(14) Received Access-Request Id 14 from 192.168.200.41:54103 to 192.168.200.47:1812 length 445
(14)   User-Name = "test"
(14)   User-Password = "test"
(14)   NAS-Port = 101
(14)   Service-Type = Framed-User
(14)   Framed-Protocol = PPP
(14)   Framed-IP-Address = 192.168.40.143
(14)   Calling-Station-Id = "5ae7-d472-7798"
(14)   NAS-Identifier = "94b2-71df-b360"
(14)   NAS-Port-Type = Wireless-802.11
(14)   NAS-Port-Id = "slot=0;subslot=0;port=0;vlanid=101;interfaceName=Wlan-Bss17"
(14)   Called-Station-Id = "94-B2-71-DF-B3-60:huawei"
(14)   NAS-IP-Address = 192.168.200.41
(14)   Acct-Session-Id = "94b2-710000000000010128a1020000016"
(14)   Huawei-Startup-Stamp = 1727662048
(14)   Huawei-IPHost-Addr = "192.168.40.143 5a:e7:d4:72:77:98"
(14)   Huawei-Connect-ID = 22
(14)   Huawei-Version = "V200R024C00"
(14)   Huawei-Product-ID = "AP"
(14)   Huawei-Loopback-Address = "94B2-71DF-B360"
(14)   Huawei-User-Mac = "\000\000\000\003"
(14)   Attr-26.2011.201 = 0x41502d4465766963652d436f64653d313932323033383231393462323731646662333630
(14)   Attr-26.2011.201 = 0x5445524d494e414c2d504f532d583d30
(14)   Attr-26.2011.201 = 0x5445524d494e414c2d504f532d593d30
(14)   Attr-26.2011.201 = 0x576966692d44656e736974793d2d3335
(14)   Attr-26.2011.201 = 0x48572d4163636573732d54696d653d31373438353734333237
```
