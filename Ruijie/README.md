# Ruijie External Captive Portal

Captive portal flow:

Step 1: `/login`: from user device to captive portal. Portal responds with a token

Step 2: `/auth`: from AP to captive portal to verify token. Portal verifies it by responding with `Auth:1`. This happens on TCP port 80, even if the captive portal is using HTTPS on port 443. So port 80 needs to be open as well to respond to this request.

Step 3: `/portal`: from user device to captive portal

Apache access logs:

```
154.192.47.15 - - [11/Feb/2025:06:50:00 +0000] "GET /login/?gw_id=G1RP6TP081524&gw_sn=G1RP6TP081524&gw_address=1.2.3.4&gw_port=2060&ip=192.168.200.29&mac=a2:8f:4f:10:27:5c&apmac=7085.c4d2.3e6f&ssid=Ruijie&url=http%3A%2F%2Fconnectivitycheck.gstatic.com%2Fgenerate_204&vlanid=1 HTTP/1.1" 302 4073 "http://connectivitycheck.gstatic.com/" "Mozilla/5.0 (Linux; Android 14; SM-A336E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/132.0.6834.163 Mobile Safari/537.36"
154.192.47.15 - - [11/Feb/2025:06:50:01 +0000] "GET /auth/?gw_sn=G1RP6TP081524&gw_id=G1RP6TP081524&stage=login&ip=192.168.200.29&mac=a2:8f:4f:10:27:5c&token=a2:8f:4f:10:27:5c&incoming=0&outgoing=0&vlanid=1 HTTP/1.1" 301 918 "-" "MCFi 1.0.0"
154.192.47.15 - - [11/Feb/2025:06:50:02 +0000] "GET /portal/?gw_sn=G1RP6TP081524&gw_id=G1RP6TP081524&mac=a2:8f:4f:10:27:5c HTTP/1.1" 200 831 "http://connectivitycheck.gstatic.com/" "Mozilla/5.0 (Linux; Android 14; SM-A336E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/132.0.6834.163 Mobile Safari/537.36"
```

[Reference Guide](https://cloud.ruijienetworks.com/help/#/ArticleList?id=4f324cfa2e3447e0a37d78a65e062239)
