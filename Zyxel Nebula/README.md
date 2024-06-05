# Zyxel Nebula External Captive Portal

This portal has been tested on the following hardware:

```
Device: NWA90AX
Redirect Method: GET
```

*GET Parameters*

```
Array ( [apmac] => b8:ec:a3:e4:69:c2 [usermac] => 1e:ef:13:77:22:d0 [apip] => 192.168.1.161 [userip] => 10.156.213.184 [ssid_name] => owetm__Test Nebula1_9e433ee873 [apurl] => http://nap-slogin.nebula.zyxel.com/cgi-bin/Clicktocontinue.cgi )
```

Example of Apache Access Log (on captive portal server):

```
apmac=b8:ec:a3:e4:69:c2&usermac=16:ca:3d:da:3c:ce&apip=192.168.1.161&userip=10.8.83.43&ssid_name=_Test%20Nebula1&apurl=https://nap-slogin.nebula.zyxel.com/cgi-bin/login.cgi&error_num=1 HTTP/1.1
```
