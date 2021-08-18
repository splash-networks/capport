# Aruba Instant On External Captive Portal

This is an example of a PHP based external captive portal for Aruba iAP. The code given here can be used to setup a basic captive portal featuring an HTML form.

Apache access log showing redirect parameters

```
50.3.71.170 - - [18/Aug/2021:11:11:32 +0000] "GET /?cmd=login&mac=f2%3A62%3Ae7%3A99%3A63%3Ac6&network=wifi.ten&ip=172.16.0.221&apmac=d0%3A15%3Aa6%3Ac2%3A74%3Ad0&site=wifi-ten%20Site&post=captive-2020.aio.cloudauth.net&url=http%3A%2F%2Fconnectivitycheck.gstatic.com%2Fgenerate_204 HTTP/1.1" 200 8455 "-" "Mozilla/5.0 (Linux; Android 11; SM-A515F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.159 Mobile Safari/537.36"
```

FreeRADIUS Access-Request

```
(0) Received Access-Request Id 1 from 50.3.71.170:61185 to 167.99.74.17:1812 length 181
(0)   NAS-IP-Address = 192.168.8.179
(0)   NAS-Port = 0
(0)   NAS-Port-Type = Wireless-802.11
(0)   User-Name = "user1"
(0)   User-Password = "pass1"
(0)   Service-Type = Login-User
(0)   Calling-Station-Id = "f262e79963c6"
(0)   Called-Station-Id = "d015a6c274d0"
(0)   Framed-IP-Address = 172.16.0.221
(0)   Aruba-Essid-Name = "wifi.ten"
(0)   Aruba-Location-Id = <redacted (device serial number)>
(0)   Aruba-AP-Group = "InstantOn-C2:74:D0"
(0)   Message-Authenticator = 0xdf504be2ae2fc5bf3d362cad0014b260
```
