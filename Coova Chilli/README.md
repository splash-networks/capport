# Coova Chilli External Captive Portal

This is an example of a PHP based external captive portal for Coova Chilli. This code is based on the external captive portal code for Open Mesh APs (now acquired by Datto Networking) in their excellent Github repository. Open Mesh APs run Coova Chilli under the hood for captive portal.

https://github.com/cloudtrax/docs/tree/master/captive_portal/splash_pages/external

This has been tested on OpenWRT 18.06 firmware.

The `username` and `password` entered by the user and sent to the AP which then sends them to the configured RADIUS server for authentication. The `$uam_secret` has to match with the UAM secret defined in Coova Chilli's config file.
