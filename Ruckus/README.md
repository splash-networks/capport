This was tested with `Ruckus R310` AP with software version `110.0.0.0.683`.

It uses Coova Chilli under the hood. For further details please consult Coova Chilli documentation in [this](https://github.com/nasirhafeez/capport/tree/master/Coova%20Chilli) repository.

Apache access log:

```
"GET /?res=notyet&uamip=10.1.0.1&uamport=3990&uamhttps=3992&challenge=aaa8552e4761ab74ded5e9b2a9454419&mac=3E-11-69-20-DB-27&ip=192.168.1.181&ssid=Wireless1&called=B4-79-C8-3C-4B-20&nasid=nas01&userurl=http%3a%2f%2fcaptive.apple.com%2fhotspot-detect.html&md=66C04DADCB3DD4EE8346374E5928D18E HTTP/1.1" 200 6109 "-" "Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"
```
