# Aerohive External Captive Portal

This is an example of a PHP based external captive portal for Aerohive. The code given here can be used to setup a basic captive portal featuring an HTML login form. The `http://1.1.1.1/reg.php` URL given here represents the internal IP address of the one of the radio interfaces on the Aerohive AP. The AP has several internal radio interfaces (and sub-interfaces) like: `Wifi0`, `Wifi1`, `Wifi0.1` and `Wifi1.1`. They represent 2.4 GHz and 5 GHz channels and also 802.11n/802.11ac standards. They have IPs like `1.1.1.1` and `1.1.2.1`. Some details can be found here:

https://getsatisfaction.com/aerohive/topics/external_cwp

The username and password have to be posted to the IP of the correct interface.
