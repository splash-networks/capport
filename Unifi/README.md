This is an example of a PHP based external captive portal for Unifi. The code given here can be used to setup a basic captive portal with an HTML login form. The code for authorizing the user is from Art of WiFi's Unifi API client located here:

https://github.com/Art-of-WiFi/UniFi-API-client

To run this you also need to install the Unifi API client. The can be done using Composer. Include the following code in your composer.json file:

{
    "require": {
        "art-of-wifi/unifi-api-client": "^1.1"
    }
}

This portal will authorize the user for 30 minutes and then redirect the user to Google. In connecting.php you need to enter the correct values for $site_id, $controlleruser, $controllerpassword, $controllerurl and $controllerversion.
