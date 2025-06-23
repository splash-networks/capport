# Coova Chilli External Captive Portal

This is an example of a PHP based external captive portal for Coova Chilli. This code is based on the external captive portal code for Open Mesh APs (now acquired by Datto Networking) in their excellent Github repository - Open Mesh APs run Coova Chilli under the hood for captive portal:

https://github.com/cloudtrax/docs/tree/master/captive_portal/splash_pages/external

This has been tested on OpenWRT 18.06.1 firmware.

The `username` and `password` entered by the user is sent to the AP which then sends them to the configured RADIUS server for authentication. The `$uam_secret` has to match with the UAM secret defined in Coova Chilli's config file.

Apache access log for Coova Chilli on OpenWRT:
```
"GET /uam_simple_server.php?res=notyet&uamip=192.168.182.1&uamport=3660&challenge=5b1d296db7826a655411dcd83ee25154&called=94-83-C4-01-42-27&mac=5C-1D-D9-20-A0-C1&ip=192.168.182.64&nasid=fonlo&sessionid=5e6792ce00000006&userurl=http%3a%2f%2fcaptive.apple.com%2fhotspot-detect.html&md=7AD032E82BAC3510BB756B7CF4580355 HTTP/1.1" 200 15333 "-" "Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"
```
Many other devices use Coova Chilli under the hood so this code will work for them as well. Some examples are Xirrus, LigoWave and OpenMesh. Some use Coova Chilli with slight variations, such as Cradlepoint and Plasma. Their codes are given in their respective folders.

Xirrus APs also use Coova Chilli so this code will also work with them.

Apache access log for Xirrus:
```
"GET /?res=notyet&uamip=185.0.0.1&uamport=10000&challenge=82c235779d0f51f5143d375337940675&userurl=http%3a%2f%2fcaptive.apple.com%2fhotspot-detect.html&mac=38-53-9c-82-79-f0&apmac=48-c0-93-8c-60-38&ssid=hubconnect&vlan=0&sg=32c056d6be8185aa5d52d96ed26868639edcfcb2 HTTP/1.0" 200 1148 "-" "CaptiveNetworkSupport-390.60.1 wispr"
```

Apache access log for LigoWave:
```
"GET /?res=notyet&uamip=10.1.0.0&uamport=3990&challenge=932c4067a2a821a8868bf1c658f39561&called=00-19-3B-26-94-3A&mac=0E-0D-87-9A-9C-C7&ip=192.168.5.1&nasid=192.168.200.44&sessionid=62c2d3ae00000001&userurl=http%3a%2f%2fconnectivitycheck.gstatic.com%2fgenerate_204&md=C345488485B32C0DFF630FAC14AC4EC7 HTTP/1.1" 200 4149 "-" "Mozilla/5.0 (Linux; Android 14; SM-A336E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/137.0.7151.115 Mobile Safari/537.36"
```

FreeRADIUS debug parameters for LigoWave:

```
(0)   ChilliSpot-Version = "1.3.1.4"
(0)   User-Name = "Abc"
(0)   User-Password = "Abc"
(0)   Service-Type = Login-User
(0)   Acct-Session-Id = "62c2d3ae00000001"
(0)   Framed-IP-Address = 192.168.5.1
(0)   NAS-Port-Type = Wireless-802.11
(0)   NAS-Port = 1
(0)   NAS-Port-Id = "00000001"
(0)   Calling-Station-Id = "0E-0D-87-9A-9C-C7"
(0)   Called-Station-Id = "00-19-3B-26-94-3A"
(0)   NAS-IP-Address = 192.168.5.66
(0)   NAS-Identifier = "192.168.200.44"
(0)   WISPr-Logoff-URL = "http://10.1.0.0:3990/logoff"
(0)   Message-Authenticator = 0xf20fea1c075ca3459570ccb7be23307c
```
