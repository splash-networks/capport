# NoDogSplash External Captive Portal Using FAS

This is an example of a PHP based external captive portal for NoDogSplash (NDS) using its Forwarding Authentication Service (FAS). The code given here can be used to setup a basic captive portal featuring an HTML login form.

NDS supports sending the client token to the external captive portal aka FAS in clear text as well as in encrypted format. This portal is for the latter case in which `fas_secure_enabled` option is set to `2` in NDS config file.

The original code for this can be found here:

https://github.com/nodogsplash/nodogsplash/blob/master/forward_authentication_service/fas-aes/fas-aes.php

The `$redir` parameter may be set to redirect the client after successful authorization.

The NDS documentation is very clear and detailed and can be found here:

https://nodogsplashdocs.readthedocs.io/en/stable/overview.html
