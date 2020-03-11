# Coova Chilli External Captive Portal

This is an example of a PHP based external captive portal for Coova Chilli. This code is based on the external captive portal code for Open Mesh APs (now acquired by Datto Networking) in their excellent Github repository - Open Mesh APs run Coova Chilli under the hood for captive portal:

https://github.com/cloudtrax/docs/tree/master/captive_portal/splash_pages/external

This has been tested on OpenWRT 18.06 firmware.

The `username` and `password` entered by the user and sent to the AP which then sends them to the configured RADIUS server for authentication. The `$uam_secret` has to match with the UAM secret defined in Coova Chilli's config file.

Xirrus APs also use Coova Chilli so this code will also work with them.

Apache access log for Xirrus:

`"GET /?res=notyet&uamip=185.0.0.1&uamport=10000&challenge=82c235779d0f51f5143d375337940675&userurl=http%3a%2f%2fcaptive.apple.com%2fhotspot-detect.html&mac=38-53-9c-82-79-f0&apmac=48-c0-93-8c-60-38&ssid=hubconnect&vlan=0&sg=32c056d6be8185aa5d52d96ed26868639edcfcb2 HTTP/1.0" 200 1148 "-" "CaptiveNetworkSupport-390.60.1 wispr"`
