# Draytek External Captive Portal

This portal has been tested on the following hardware:

```
Vendor: Draytek
Device: Vigor2862
Redirect Method: GET
```

Redirecting client to captive portal:-

URL format: http://<URL.of.external.portal>/login.php?apmac=<AP MAC>&clientmac=<Client MAC>&loginurl=<URL to which username password should be sent>&target=<URL which client was accessing>

Redirecting client from captive portal to router (for authorization):-

URL format: http://portal.draytek.com:8001/cgi-bin/wifilogin.cgi?username=<username>&password=<password>

Apache Access Log (on captive portal server):-
```
apmac=00-1D-AA-09-44-10&client_mac=D8-8F-76-6D-A8-7B&loginurl=http://portal.draytek.com:8001/cgi-bin/wifilogin.cgi&target=http://captive.apple.com/hotspot-detect.html HTTP/1.0" 404 379 "-" "CaptiveNetworkSupport-355.270.2 wispr"
```
RADIUS Access-Request Packet (in FreeRADIUS debug):-
```
User-Name = "draytek"
User-Password = "draytek"
Called-Station-Id = "00-1D-AA-09-44-10"
Calling-Station-Id = "D8-8F-76-6D-A8-7B"
NAS-IP-Address = <NAS IP Address>
Service-Type = Authenticate-Only
```
Notes: portal.draytek.com is the address of the Draytek router
