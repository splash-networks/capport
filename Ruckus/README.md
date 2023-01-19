`Ruckus R310` AP with older firmwares (like software version `110.0.0.0.683` which was tested) used Coova Chilli. For further details and code please consult Coova Chilli documentation in [this](https://github.com/nasirhafeez/capport/tree/master/Coova%20Chilli) repository.

Apache access log for Coova Chilli based firmwares:

```
"GET /?res=notyet&uamip=10.1.0.1&uamport=3990&uamhttps=3992&challenge=aaa8552e4761ab74ded5e9b2a9454419&mac=3E-11-69-20-DB-27&ip=192.168.1.181&ssid=Wireless1&called=B4-79-C8-3C-4B-20&nasid=nas01&userurl=http%3a%2f%2fcaptive.apple.com%2fhotspot-detect.html&md=66C04DADCB3DD4EE8346374E5928D18E HTTP/1.1" 200 6109 "-" "Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"
```

Newer firmwares use Ruckus Unleased. The code in `index.php` is for that.

Apache access log for Ruckus Unleashed:

```
"GET /?sip=192.168.0.253&mac=b479c83c4b20&client_mac=5edec34d503d&uip=192.168.1.106&lid=&dn=&url=http%3a%2f%2fcaptive.apple.com%2fhotspot%2ddetect.html&ssid=Captive+Ruckus+Test&loc=&vlan=1 HTTP/1.0" 200 5193 "-" "CaptiveNetworkSupport-443.40.1 wispr"
```
