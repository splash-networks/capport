# TP Link Omada External Captive Portal

This is an example of a PHP based external captive portal for TP Link Omada Controller. The code given here can be used to setup a basic captive portal featuring an HTML login form.

For an Android client the redirect parameters are as follows:

```
Array ( [clientMac] => 70-8A-09-65-4D-EC [t] => 1611814464 [site] => Default [redirectUrl] => http://connectivitycheck.platform.hicloud.com/generate_204_f21c2352-3274-4ab1-8e8b-c00bbfc52ae4 [apMac] => B0-95-75-15-93-44 [ssidName] => eap225 [radioId] => 0 )
```

The basic code has been taken from [here](https://www.tp-link.com/us/support/faq/2907/). This code has been tested on Omada Controller v4.2.8 with EAP225 v3.0 `Firmware version 5.0.0 Build 20200918 Rel. 58628`
