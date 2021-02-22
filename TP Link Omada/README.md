# TP Link Omada External Captive Portal

This is an example of a PHP based external captive portal for TP Link Omada Controller. The code given here can be used to setup a basic captive portal for authorizing WiFi clients. The Omada Controller has to be reachable from the captive portal web server for client authorization to work.

For an Android client the redirect parameters are as follows:

```
Array ( [clientMac] => 70-8A-09-65-4D-EC [t] => 1611814464 [site] => Default [redirectUrl] => http://connectivitycheck.platform.hicloud.com/generate_204_f21c2352-3274-4ab1-8e8b-c00bbfc52ae4 [apMac] => B0-95-75-15-93-44 [ssidName] => eap225 [radioId] => 0 )
```

The basic code has been taken from [here](https://www.tp-link.com/us/support/faq/2907/) and adapted for our use. As of this writing (Feb 2021) the code on the TP Link website has a couple of mistakes:

1. The time parameter's unit is ms and not seconds as given on TP Link's website
2. The parameter `authType: 4` has to be included in the authorization request

This code has been tested on Omada Controller `v4.2.8` with EAP225 `v3.0 (Firmware version 5.0.0 Build 20200918 Rel. 58628)`
