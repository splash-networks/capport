# Cambium cnMaestro External Captive Portal

This is an example of a PHP based external captive portal for Cambium cnMaestro. It has been tested with cnPilot e410. The code given here authorizes the user on the network. Any user engagement flow can be added to it based on one's requirements.

Here is Apache's access log:

```
"GET /?ga_ssid=guest&ga_ap_mac=30-CB-C7-AF-7F-A2&ga_nas_id=E410-AF7FA2&ga_srvr=eu-w1-guest.cloud.cambiumnetworks.com&ga_cmac=22-91-CA-5D-90-96&s=1fk1b1gzLbHILDkUkBcObftO_6Lu11dxu_aYG0D4GDAo.&ga_Qv=eUROBR86HBgAGDEEVgQAGw4UWRUCACYVMgFPQ1RZX1tfIVRGKC1FUHBZQVNLBhMUMww. HTTP/1.1"
```
