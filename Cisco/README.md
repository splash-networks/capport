# Cisco WLC External Captive Portal

This is an example of a PHP based external captive portal for Cisco WLC. The code given here can be used to setup a basic captive portal featuring an HTML login form. This code is based on the following repository (refer to its README for further details):

https://github.com/stuartst/cisco-wlc-captive-portal

Apache Access Log:

```
108.21.227.148 - - [25/Nov/2021:03:32:54 +0000] "GET /cisco-wlc-captive-portal/index.php?switch_url=http://wifi-guest.equinox.com/login.html&ap_mac=00:ea:bd:95:96:20&client_mac=f8:ff:c2:39:ca:71&wlan=Captive&redirect=captive.apple.com/hotspot-detect.html HTTP/1.1" 200 639 "http://captive.apple.com/hotspot-detect.html" "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko)"
```

FreeRADIUS Debug Log for Cisco WLC (AireOS):

```
(0) Received Access-Request Id 0 from 108.21.227.148:32769 to 10.250.201.61:1812 length 239
(0)   User-Name = "test123"
(0)   User-Password = "test123"
(0)   Service-Type = Login-User
(0)   NAS-IP-Address = 10.1.10.15
(0)   NAS-Port = 1
(0)   Cisco-AVPair = "audit-session-id=0a010a0f00000052619f0405"
(0)   Framed-IP-Address = 10.255.1.208
(0)   Acct-Session-Id = "619f0405/f8:ff:c2:39:ca:71/220"
(0)   NAS-Identifier = "wlc"
(0)   NAS-Port-Type = Wireless-802.11
(0)   Airespace-Wlan-Id = 4
(0)   Calling-Station-Id = "f8-ff-c2-39-ca-71"
(0)   Called-Station-Id = "00-fd-22-ca-9f-40:Captive"
(0)   Message-Authenticator = 0x58f2b7ae1e8a783c72131251c43d59d4
```

FreeRADIUS Debug Log for Cisco WLC (IOS):

```
(0) Received Access-Request Id 0 from 192.168.100.112:55843 to 192.168.100.215:1812 length 524
(0)   Calling-Station-Id = "be-08-ce-fb-3f-f9"
(0)   User-Name = "test"
(0)   Cisco-AVPair = "audit-session-id=7064A8C00000000F8F156778"
(0)   Framed-IP-Address = 192.168.100.48
(0)   Message-Authenticator = 0xd07ecda3ebf7ee2fe1281496d16fd081
(0)   Service-Type = Outbound-User
(0)   Cisco-AVPair = "service-type=Outbound"
(0)   Cisco-AVPair = "method=webauth"
(0)   User-Password = "test"
(0)   Cisco-AVPair = "addrv6=fe80::bc08:ceff:fefb:3ff9"
(0)   Cisco-AVPair = "addrv6=2407:d000:b:bcc4:bc08:ceff:fefb:3ff9"
(0)   Cisco-AVPair = "addrv6=2407:d000:b:bcc4:f924:22be:f4e2:ab4f"
(0)   Cisco-AVPair = "client-iif-id=2986345227"
(0)   Cisco-AVPair = "vlan-id=1"
(0)   NAS-IP-Address = 192.168.100.112
(0)   NAS-Port-Id = "capwap_90000004"
(0)   NAS-Port-Type = Wireless-802.11
(0)   NAS-Port = 112
(0)   Cisco-AVPair = "cisco-wlan-ssid=splash"
(0)   Cisco-AVPair = "wlan-profile-name=splash"
(0)   Called-Station-Id = "40-01-7a-17-f2-e0:splash"
(0)   Airespace-Wlan-Id = 1
(0)   NAS-Identifier = "WLC"
```
