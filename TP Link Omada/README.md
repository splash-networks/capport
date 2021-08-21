# TP Link Omada External Captive Portal

This is an example of a PHP based external captive portal for TP Link Omada Controller. The code given here can be used to setup a basic captive portal for authorizing WiFi clients. The Omada Controller has to be reachable from the captive portal web server for client authorization to work.

For "External RADIUS Server" with "External Web Portal" the file `radius.html` will be used. It is taken from TP-Link's [website](https://www.tp-link.com/pk/support/faq/2912/).

Apache access log:

```
192.168.8.201 - - [21/Aug/2021:06:13:30 +0000] "GET /favicon.ico HTTP/1.1" 404 491 "http://192.168.8.190/?target=192.168.8.175&targetPort=8088&clientMac=70-8A-09-65-4D-EC&clientIp=192.168.8.201&radiusServerIp=143.198.150.160&apMac=B0-95-75-15-93-44&gatewayMac=&scheme=http&ssidName=eap225&vid=&radioId=0&originUrl=http%3A%2F%2Fconnectivitycheck.platform.hicloud.com%2Fgenerate_204_c704af26-e5e0-49a2-b54c-dc172079b4ef" "Mozilla/5.0 (Linux; Android 9; VTR-AL00; HMSCore 3.0.3.301; GMSCore 21.26.21) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 HuaweiBrowser/11.0.7.303 Mobile Safari/537.36"
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

For External captive portal without RADIUS the file `index.php` will be used. This code requires the use of cookies. Create a folder named `cookies` in the same folder where `index.php` is located and set its permissions such that the web server is able to write to it.

For an Android client the redirect parameters are as follows:

```
Array ( [clientMac] => 70-8A-09-65-4D-EC [t] => 1611814464 [site] => Default [redirectUrl] => http://connectivitycheck.platform.hicloud.com/generate_204_f21c2352-3274-4ab1-8e8b-c00bbfc52ae4 [apMac] => B0-95-75-15-93-44 [ssidName] => eap225 [radioId] => 0 )
```

The basic code has been taken from [here](https://www.tp-link.com/us/support/faq/2907/) and adapted for our use. As of this writing (Feb 2021) the example code given on the TP Link website has a couple of mistakes:

1. The time parameter's unit is milliseconds and not seconds as given on TP Link's website
2. The parameter `authType: 4` has to be included in the authorization request

This code has been tested on Omada Controller `v4.2.8` with EAP225 `v3.0 (Firmware version 5.0.0 Build 20200918 Rel. 58628)`