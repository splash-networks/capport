Tested on `DBA-2520P` AP with firmware `2.05.003` via D Link Nuclias Cloud.

Apache access log:

```
"GET /?continue_url=https%3A%2F%2Fwww.nuclias.com%2F&login_url=https%3A%2F%2Fexternal.redirect.nuclias.com%2Fexternal.ccp%3Fstate%3D50335181369277980&ssid=Nuclias_Guest&ap_mac=C4%3AE9%3A0A%3AA0%3A18%3AC6&ap_name=C4%3AE9%3A0A%3AA0%3A18%3AC6&ap_tags=Captive%20Wifi%2CCaptive%20Wifi&mauth=1A%3AFF%3A2C%3A18%3A99%3A96&ip=10.229.65.131&mac=1A%3AFF%3A2C%3A18%3A99%3A96&logout_url=https%3A%2F%2Flogout.redirect.nuclias.com%2F HTTP/1.1" 200 5887 "http://connectivitycheck.gstatic.com/" "Mozilla/5.0 (Linux; Android 12; A063 Build/SKQ1.211230.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/108.0.5359.128 Mobile Safari/537.36"
```

The RADIUS server needs to allow only usernames and passwords. If a RADIUS server is configured with `DEFAULT Auth-Type := Accept` to allow all users for testing, the external captive portal redirection does not work properly because D-Link starts using MAC based authentication (this was communicated by D Link support).
