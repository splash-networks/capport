# Aruba Instant On External Captive Portal

This is an example of a PHP based external captive portal for Grandstream using GWN cloud. The code given here can be used to setup a basic captive portal featuring an HTML form.

Apache access log showing redirect parameters

```
154.192.21.44 - - [02/Jun/2026:13:36:47 +0000] "GET /?login_url=http://cwp.gwnportal.cloud:8080/gwn_login&ap_mac=EC-74-D7-9C-ED-4C&client_mac=CE-5B-77-8D-14-6E&ssid=GWN-Cloud&orig_url=http://connectivitycheck.gstatic.com/generate_204 HTTP/1.1" 200 4403 "http://connectivitycheck.gstatic.com/" "Mozilla/5.0 (Linux; Android 16; SM-A336E Build/BP2A.250605.031.A3; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/148.0.7778.178 Mobile Safari/537.36"
```

FreeRADIUS Access-Request

```
(0) Received Access-Request Id 191 from 154.192.21.44:43609 to 10.142.0.2:1812 length 129
(0)   User-Name = "CE-5B-77-8D-14-6E"
(0)   User-Password = "CE-5B-77-8D-14-6E"
(0)   NAS-IP-Address = 192.168.100.52
(0)   NAS-Port = 0
(0)   NAS-Port-Type = Wireless-802.11
(0)   Called-Station-Id = "EC-74-D7-9C-ED-4C"
(0)   Calling-Station-Id = "CE-5B-77-8D-14-6E"
```
Tested on GWN7660E AP with firmware 1.0.25.45.
