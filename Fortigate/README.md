# Fortigate External Captive Portal

This is an example of a PHP based external captive portal for Fortigate. The code given here can be used to setup a basic captive portal featuring an HTML login form.

The username and password has to be posted to the Fortigate firewall.

HTTP Request Type: `GET`

Apache access log example:

```
login&post=http://172.172.172.1:1000/fgtauth&magic=050e078a95ae1754&usermac=fc:3f:db:a6:4a:ff&apmac=70:4c:a5:ab:85:95&apip=172.172.172.1&userip=172.172.172.2&ssid=Test&apname=FG800D5818800451&bssid=00:00:00:00:00:00
```
