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
