# SonicWall External Captive Portal

SonicWall has 2 captive portal implementations:

Before v7.3.2:

This uses a CGI script and does not support RADIUS (so portal deployment use cases are limited). The code for this scenario is given in `index.php`:

Apache Access Log:

```
GET /index?ssid=&sessionId=d69349aaa90d870e06d35f68032d23bb&ip=192.168.1.196&mac=00:0e:c6:aa:d1:9d&ufi=004010218A44&mgmtBaseUrl=https://192.168.100.78:4043/&clientRedirectUrl=https://192.168.1.1:443/&req=http%3A//www.msftconnecttest.com/redirect HTTP/1.1" 404 3093 "http://192.168.1.1/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36"
```

Tested on NSv 270 with firmware version SonicOSX 7.3.1-7013.

After v7.3.2:

The code for this is given in `api.html`. It requires a valid TLS certificate for the LAN port to be installed in the firewall, and the hostname needs to be included in `api.html` (it is `soniclan.splashnetworks.co` in our example). RADIUS is supported.

Apache Access Log:

```
"GET /?userMAC=06:43:35:7b:1a:2a&userIP=192.168.1.185&UFI=0017C5F15C1F&mgmtUrl=https://192.168.1.1:443&REQ=http://connectivitycheck.gstatic.com/generate_204 HTTP/1.1" 200 4762 "-" "Mozilla/5.0 (Linux; Android 16; SM-A336E Build/BP2A.250605.031.A3; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/153.0.8010.39 Mobile Safari/537.36
```

RADIUS Access Log:

```
(0)   User-Name = "user"
(0)   User-Password = "pass"
(0)   Framed-IP-Address = 192.168.1.185
(0)   Calling-Station-Id = "06:43:35:7b:1a:2a"
(0)   NAS-IP-Address = 192.168.100.146
(0)   NAS-Port = 0
(0)   Called-Station-Id = "bc:24:11:3c:af:da"
(0)   NAS-Identifier = "0017C5F15C1F"
```

Tested on SonicOS 8 NSv with firmware version SonicOSX 8.2.2-8015.
