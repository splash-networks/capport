# TP Link Omada External Captive Portal

This is an example of a PHP based external captive portal for TP Link Omada Controller. The code given here can be used to setup a basic captive portal for authorizing WiFi clients. The Omada Controller has to be reachable from the captive portal web server for client authorization to work.

For "External RADIUS Server" with "External Web Portal" the required files are located in the `RADIUS` folder and consist of the files `index.php` and `login.php`. The file `radius.html` is taken from TP-Link's [website](https://www.tp-link.com/pk/support/faq/2912/) and only a single modification is made in Line 17: hardcoding the public IP of Omada Controller as the IP received in query string might contain private IP which is not useful for connecting back to the controller for user authorization if portal server is located on the internet. This setup will only work when the portal is HTTP based as HTTP to HTTPS connection from client side is blocked by browsers. This problem is resolved in `index.php` and `login.php` by using PHP and CURL for initiating API call to controller from server-side. For HTTPS based portals `index.php` and `login.php` should be used whereas for HTTP based portals `radius.html` may be used.

For External captive portal without RADIUS the file `index.php` will be used. This code requires the use of cookies. Using the same CURL handle for both requests ensures that cookies are preserved.

This code has been tested on Omada Controller `v5.9.9` with EAP225 `v3.0 Firmware version 5.0.9`

Apache access log:

```
192.168.100.165 - - [22/Feb/2023:06:31:54 +0000] "GET /?clientMac=52-DE-63-F1-E3-3B&clientIp=192.168.100.165&t=1677047514&site=Default&redirectUrl=http%3A%2F%2Fconnectivitycheck.gstatic.com%2Fgenerate_204&apMac=B0-95-75-15-93-44&ssidName=eap225&radioId=0 HTTP/1.1" 200 350 "http://192.168.100.164/?clientMac=52-DE-63-F1-E3-3B&clientIp=192.168.100.165&t=1677047514&site=Default&redirectUrl=http%3A%2F%2Fconnectivitycheck.gstatic.com%2Fgenerate_204&apMac=B0-95-75-15-93-44&ssidName=eap225&radioId=0" "Mozilla/5.0 (Linux; Android 13; SM-A336E Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/109.0.5414.117 Mobile Safari/537.36"
```

RADIUS Access-Request logs:

```
(0) Received Access-Request Id 1 from 206.84.142.42:46287 to 143.198.150.160:1812 length 210
(0)   User-Name = "steve"
(0)   Service-Type = Login-User
(0)   NAS-IP-Address = 192.168.8.175
(0)   Framed-IP-Address = 192.168.8.201
(0)   Called-Station-Id = "B0-95-75-15-93-44:eap225"
(0)   Calling-Station-Id = "70-8A-09-65-4D-EC"
(0)   NAS-Identifier = "TP-Link"
(0)   Acct-Session-Id = "13b4620b9267463b96183d63d9c3bb9e"
(0)   NAS-Port-Type = Wireless-802.11
(0)   NAS-Port = 1
(0)   NAS-Port-Id = "00000001"
(0)   CHAP-Password = 0x71b75cb3df0c94bf5cd94846e8c5cb3c9e
(0)   CHAP-Challenge = 0x2559c80c56135697e3520a7f9f987fab
(0)   Message-Authenticator = 0x150529374b6f607913ab4b72f47fa97b
```
