# Aerohive External Captive Portal

This is an example of a PHP based external captive portal for Aerohive. The code given here can be used to setup a basic captive portal featuring an HTML login form. The `http://1.1.1.1/reg.php` URL given here represents the internal IP address of the one of the radio interfaces on the Aerohive AP. The AP has several internal radio interfaces (and sub-interfaces) like: `Wifi0`, `Wifi1`, `Wifi0.1` and `Wifi1.1`. They represent 2.4 GHz and 5 GHz channels and also 802.11n/802.11ac standards. They have IPs like `1.1.1.1` and `1.1.2.1`.

The username and password has to be posted to the IP of the correct interface.

HTTP Request Type: `GET`

Apache access log example:

```
url=E2B8F3578D88E9B12D88FB428D83488ECB3F06945E31C5FBC89099D15D278E90A4AFE84A98C0A3BC2794F4538BA813C896&ssid=CAPTIVE-TEST&mac=2a3a117cfd4a&autherr=0&challenge=2D3DCCBBA8F7A3C217228514113476D1&Called-Station-Id=90b8326defa7&NAS-IP-Address=198.18.38.1&RADIUS-NAS-IP=192.168.10.250&Calling-Station-Id=2a3a117cfd4a&STA-IP=192.168.10.14&NAS-ID=AH-6def80&MGT-MAC-Address=90b8326def80 HTTP/1.1
```
