# Cisco Meraki External Captive Portal

This portal has been tested on Meraki as well as Meraki Go.

Apache Access Log (on captive portal server):-
```
95.141.23.135 - - [24/Nov/2022:10:29:50 +0000] "GET /?user_continue_url=https%3A%2F%2Fn93.network-auth.com%2Fsplash%2Fconnected%3Fhide_terms%3Dtrue&node_id=247165649030275&node_mac=e0:cb:bc:b6:0c:83&gateway_id=247165649030275&client_ip=10.218.44.108&client_mac=42:ae:4c:c0:73:a2&base_grant_url=https%3A%2F%2Fn93.network-auth.com%2Fsplash%2Fgrant HTTP/1.0" 200 1006 "-" "CaptiveNetworkSupport-441 wispr"
```
Get parameters in redirect:
```
Array ( [user_continue_url] => http://www.cnn.com/ [node_id] => 247165649030275 [node_mac] => e0:cb:bc:b6:0c:83 [gateway_id] => 247165649030275 [client_ip] => 10.218.44.108 [client_mac] => 42:ae:4c:c0:73:a2 [base_grant_url] => https://n93.network-auth.com/splash/grant )
```
