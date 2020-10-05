# Unifi External Captive Portal

This is an example of a PHP based external captive portal for Unifi. The code given here can be used to setup a basic captive portal featuring an HTML login form. The code for authorizing the user is from Art of WiFi's excellent Unifi API client located here:

https://github.com/Art-of-WiFi/UniFi-API-client

To run this you need to install the Unifi API client. The can be done using Composer:
```
composer require art-of-wifi/unifi-api-client
```
Or include the following code in your composer.json file:
```
{
    "require": {
        "art-of-wifi/unifi-api-client": "^1.1"
    }
}
```
This portal will authorize the user for 30 minutes on the Unifi controller and redirect them to Google. In connecting.php you need to enter the correct values for `$site_id`, `$controlleruser`, `$controllerpassword`, `$controllerurl` and `$controllerversion`.

For an Android client the redirect parameters are as follows:

```
Array ( [ap] => 44:d9:e7:0a:80:43 [id] => 70:8a:09:65:4d:ec [t] => 1601896413 [url] => http://connectivitycheck.platform.hicloud.com/generate_204_291a4662-e11c-4a24-aa5c-e16876b713f3 [ssid] => Unifi Zigsa )
```
