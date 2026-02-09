# Alcatel Lucent External Captive Portal

This is an example of a PHP based external captive portal for Aruba Instant On AP. The code given here can be used to setup a basic captive portal featuring an HTML form.

Apache access log showing redirect parameters:

```
"GET /?clientmac=ac:74:b1:73:ca:ee&clientip=192.168.5.16&ssid=Splash&switchmac=dc:08:56:a0:05:a0&switchip=192.168.1.138&url=http://www.msftconnecttest.com/redirect HTTP/1.1" 200 1368 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36"
```

FreeRADIUS Access Request:

```
(1) Received Access-Request Id 5 from 213.6.78.97:46282 to 10.142.0.2:1812 length 242
(1)   User-Name = "guest"
(1)   Acct-Session-Id = "192.168.1.138_09/02/2026_08:39:47_fe99737becd0"
(1)   Acct-Multi-Session-Id = "192.168.1.138_09/02/2026_08:39:47_fe99737becd0"
(1)   NAS-IP-Address = 192.168.1.138
(1)   Framed-IP-Address = 192.168.5.5
(1)   NAS-Identifier = "Splash"
(1)   Calling-Station-Id = "FE99737BECD0"
(1)   Called-Station-Id = "DC0856A005A0:Splash"
(1)   NAS-Port = 6
(1)   NAS-Port-Id = "wifi-5G"
(1)   NAS-Port-Type = Wireless-802.11
(1)   Filter-Id = "Splash_Access"
(1)   Tunnel-Private-Group-Id:0 = "20"
(1)   Service-Type = Login-User
(1)   User-Password = "guest"
```

Tested on cloud hosted SaaS version of Alcatel-Lucent Enterprise OmniVista Cirrus 4.9.2 GA (Build 17.5.20, 2025-04-16) with AP Model OAW-AP1301.
