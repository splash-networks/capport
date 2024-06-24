# Plasma External Captive Portal

This is an example of a PHP based external captive portal for Plasma Cloud. It has been tested with PA1200 AP. The code given here authorizes the user on the network. Any user engagement flow can be added to it based on one's requirements.

The parameter `$uam_secret` needs to be updated in `connect.php` and has to match the UAM secret defined in Plasma Cloud.

The username and password entered by the user is sent to the AP which then sends them to the configured RADIUS server for authentication.

Here is Apache's access log:

```
"GET /?res=notyet&uamip=10.255.0.1&uamport=8081&mac=9C-2E-A1-35-C0-D5&called=54-9C-27-07-9C-F0&ssid=guest&nasid=Office%20test%20&userurl=http%3A%2F%2Fconnect.rom.miui.com%2Fgenerate_204&challenge=5387D931F347D4915B7A4DDC9C0E30C65C3D4F7062366136C68A71E10C818405 HTTP/1.1"
```

Plasma is based on Open Mesh and uses Coova Chilli for captive portal. The code given here is slightly modified from the Coova Chilli code available [here](https://github.com/splash-networks/capport/tree/master/Coova%20Chilli).

Plasma's captive portal documentation is given [here](https://www.kaiwoo.ai/docs/captive-portal/) and redirection details are available [here](https://www.kaiwoo.ai/docs/splashpage-redirect/).
