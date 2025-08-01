`Ruckus R310` AP with older firmwares (like software version `110.0.0.0.683` which was tested) used Coova Chilli. For further details and code please consult Coova Chilli documentation in [this](https://github.com/nasirhafeez/capport/tree/master/Coova%20Chilli) repository.

Apache access log for Coova Chilli based firmwares:

```
"GET /?res=notyet&uamip=10.1.0.1&uamport=3990&uamhttps=3992&challenge=aaa8552e4761ab74ded5e9b2a9454419&mac=3E-11-69-20-DB-27&ip=192.168.1.181&ssid=Wireless1&called=B4-79-C8-3C-4B-20&nasid=nas01&userurl=http%3a%2f%2fcaptive.apple.com%2fhotspot-detect.html&md=66C04DADCB3DD4EE8346374E5928D18E HTTP/1.1" 200 6109 "-" "Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"
```

Newer firmwares use Ruckus Unleased. Refer to [this link](https://github.com/splash-networks/capport/blob/master/Ruckus/unleashed.php) for Ruckus Unleashed code.

Apache access log for Ruckus Unleashed:

```
"GET /?sip=192.168.0.253&mac=b479c83c4b20&client_mac=5edec34d503d&uip=192.168.1.106&lid=&dn=&url=http%3a%2f%2fcaptive.apple.com%2fhotspot%2ddetect.html&ssid=Captive+Ruckus+Test&loc=&vlan=1 HTTP/1.0" 200 5193 "-" "CaptiveNetworkSupport-443.40.1 wispr"
```

### Ruckus virtual SmartZone (vSZ)

When using vSZ the access log is like this:

```
"GET /?nbiIP=192.168.200.211&client_mac=ENCd2dbf9a1f1689ed0e5ab4c59c6ea8055bb6673892a41751e&domain_name=Administration+Domain&reason=Un-Auth-Captive&wlanName=ruckus&dn=scg.ruckuswireless.com&ssid=ruckus&mac=00:33:58:16:ef:20&url=http%3A%2F%2Fconnectivitycheck.gstatic.com%2Fgenerate_204&proxy=0&vlan=1&wlan=1&sip=scg.ruckuswireless.com&zoneName=8DT35_ORh3sMfx-OkfQWdsVkUHecuUNVnVoM7abVZ-Q_1740048752130&apip=192.168.200.32&sshTunnelStatus=1&uip=ENCb2579826807a6430655a4e4d78347972&StartURL=https%3A%2F%2Fwww.google.com HTTP/1.1" 200 4378 "-" "Mozilla/5.0 (Linux; Android 14; SM-A336E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/133.0.6943.49 Mobile Safari/537.36"
```

We can use the command `no encrypt-mac-ip` in vSZ commandline to get unencrypted MAC and IP in the query parameters:

```
"GET /?nbiIP=192.168.200.211&client_mac=2A:27:69:06:54:D7&domain_name=Administration+Domain&reason=Un-Auth-Captive&wlanName=ruckus&dn=scg.ruckuswireless.com&ssid=ruckus&mac=00:33:58:16:ef:20&url=http%3A%2F%2Fconnectivitycheck.gstatic.com%2Fgenerate_204&proxy=0&vlan=1&wlan=1&sip=scg.ruckuswireless.com&zoneName=9cnnpXWnSBXgaxwcB5hfZLjF4XXDk0VPL61R2DOf-nA_1740227749817&apip=192.168.200.32&sshTunnelStatus=1&uip=192.168.200.34&StartURL=https%3A%2F%2Fwww.google.com HTTP/1.1" 200 636 "-" "Mozilla/5.0 (Linux; Android 14; SM-A336E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/133.0.6943.49 Mobile Safari/537.36"
```

FreeRADIUS debug log:

```
(0) Received Access-Request Id 51 from 192.168.200.211:51082 to 192.168.200.38:1812 length 356
(0)   User-Name = "test"
(0)   User-Password = "test"
(0)   NAS-IP-Address = 192.168.200.32
(0)   Service-Type = Login-User
(0)   Framed-IP-Address = 192.168.200.34
(0)   WISPr-Logoff-URL = "http://192.168.200.38"
(0)   Ruckus-VLAN-ID = 1
(0)   Ruckus-SSID = "ruckus"
(0)   Ruckus-Wlan-Name = "ruckus"
(0)   Ruckus-Zone-Name = "Default Zone"
(0)   Ruckus-Client-Host-Name = "Nasir-s-A33"
(0)   Ruckus-Client-Os-Type = "Android"
(0)   Ruckus-Client-Os-Class = "Android"
(0)   Ruckus-Client-Device-Type = "Smartphones"
(0)   Called-Station-Id = "00-33-58-56-EF-20:ruckus"
(0)   Calling-Station-Id = "2A-27-69-06-54-D7"
(0)   NAS-Identifier = "00-33-58-56-EF-20"
(0)   Acct-Session-Id = "815dfcc8-855c-453f-a3e2-fd57c5110165"
(0)   NAS-Port-Type = Wireless-802.11
(0)   Event-Timestamp = "Feb 24 2025 05:44:20 UTC"
(0)   Message-Authenticator = 0x3659ab5f1b72213ad75c26c56219b0b5
(0)   Proxy-State = 0x323439
```

The code for Ruckus Smartzone is [given here](https://github.com/splash-networks/capport/blob/master/Ruckus/smartzone.php). It was tested on Virtual SmartZone v7.0.

### Ruckus One

Apache access log for Ruckus One:

```
"GET /?nbiIP=54fef4ddc72d4397b184d2039509aff4.wispr.eu.ruckus.cloud&client_mac=ba8a2045aeb1&domain_name=SUPPORTWIZARD&reason=Un-Auth-Captive&wlanName=bddcd6fd2b39449f89d8d2deb9846eae&dn=scg.ruckuswireless.com&ssid=RuckusCaptive&mac=00:33:58:16:ef:20&url=http%3A%2F%2Fwww.google.com%2Fgen_204&proxy=0&vlan=1&wlan=5&sip=54fef4ddc72d4397b184d2039509aff4.wispr.eu.ruckus.cloud&zoneName=_b6V24D54RYKpSx0rsJ561p_DEMNlHtGn3CXcj2s2Zzx7afbNrXtxgPaftnNRzd-_1748411692677&apip=192.168.200.30&sshTunnelStatus=1&uip=192.168.200.33&StartURL=https%3A%2F%2Fwww.google.com&venueId=4e583b43d7a04e55bd896a9559a05797&networkId=bddcd6fd2b39449f89d8d2deb9846eae HTTP/1.1" 200 4010 "-" "Mozilla/5.0 (Linux; Android 14; SM-A336E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.60 Mobile Safari/537.36"
```

RADIUS Access-Request for Ruckus One:

```
(0) Received Access-Request Id 241 from 34.89.230.72:60684 to 10.142.0.2:1812 length 598
(0)   User-Name = "be08cefb3ff9"
(0)   User-Password = "be08cefb3ff9"
(0)   NAS-IP-Address = 192.168.200.43
(0)   Service-Type = Login-User
(0)   Framed-IP-Address = 192.168.200.46
(0)   Attr-26.25053.160 = 0x3534666566346464633732643433393762313834643230333935303961666634
(0)   WISPr-Logoff-URL = "https://eu.ruckus.cloud/g/guest/api/tenant/54fef4ddc72d4397b184d2039509aff4/external"
(0)   Ruckus-VLAN-ID = 1
(0)   Ruckus-SSID = "splash"
(0)   Ruckus-Wlan-Name = "df8136724faf41af84aa2dcf8250a87f"
(0)   Ruckus-Zone-Name = "24fa688312cc48d4a004d00a574e07ca"
(0)   Ruckus-Client-Host-Name = "be:08:ce:fb:3f:f9"
(0)   Ruckus-Client-Os-Type = "Android"
(0)   Ruckus-Client-Os-Class = "Android"
(0)   Attr-26.25053.156 = 0x536d61727470686f6e6573
(0)   Called-Station-Id = "00-33-58-16-EF-20:splash"
(0)   Calling-Station-Id = "BE-08-CE-FB-3F-F9"
(0)   NAS-Identifier = "00-33-58-56-EF-20"
(0)   Acct-Session-Id = "3e7f51b8-7b19-4b2e-9875-1324cddc6070"
(0)   NAS-Port-Type = Wireless-802.11
(0)   Event-Timestamp = "Jul 15 2025 10:53:26 UTC"
(0)   Message-Authenticator = 0x9fa1beada76bc768c4aaede69f543a0f
(0)   Proxy-State = 0x3139
(0)   Attr-26.25053.161 = 0x3534666566346464633732643433393762313834643230333935303961666634
(0)   Ruckus-Auth-Server-Id = "012f1ae37273422b9ad7321bae83fb81"
```

The code for Ruckus One is [given here](https://github.com/splash-networks/capport/blob/master/Ruckus/ruckusone.php).
