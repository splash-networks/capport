# Aruba iAP External Captive Portal using Authentication Text

This is an example of a PHP based external captive portal for Aruba iAP. The code given here can be used to setup a basic captive portal featuring an HTML login form. Aruba iAPs use two types of authentication schemes for external captive portals:

1. Authentication Text
2. RADIUS

Authentication text is the simplest scheme. In it nothing is POSTed back to the iAP. Instead, the iAP is configured with an "Authentication Text" - a string that the iAP looks out for in the body of the page loaded by the client. If the page contains that string the user is automatically authenticated. In this case we are using the string `Guest_authenticated` configured in `login.php`. The string is hidden so it doesn't affect user experience.

It is configured on the iAP like this:

![Auth text settings](https://github.com/nasirhafeez/capport/blob/master/Aruba%20iAP/Auth%20Text%20Settings.png)

The files `index.php` and `login.php` are for auth text based login. The file `userlogin.html` is for username password based RADIUS login.
 It posts the entered username and password to `http://securelogin.arubanetworks.com` which resolves to the IP of the iAP.
