# Cradlepoint External Captive Portal

Cradlepoint uses Coova Chilli under the hood. Their documentation can be found [here](https://customer.cradlepoint.com/articles/Knowledge/NCOS-How-to-Setup-Hotspot-Services-Captive-Portal).

For further details please consult Coova Chilli documentation in [this](https://github.com/nasirhafeez/capport/tree/master/Coova%20Chilli) repository. The only difference between the code given here is that in `connect.php` line 45 uses `response` parameter instead of `password`.

Apache access log for Coova Chilli on OpenWRT:

```
"GET /?res=notyet&uamip=192.168.0.1&uamport=8000&challenge=0b1c72e9022049697cd6eee92c037e31&called=00-30-44-46-7d-7a&mac=66-8c-01-5c-82-37&ip=192.168.0.184&nasid=&sessionid=2b3abee1c0a800b8&userurl=http%3A%2F%2Fcaptive.apple.com%2Fhotspot-detect.html HTTP/1.0" 302 3374 "-" "CaptiveNetworkSupport-428.120.3 wispr"
```
