# Alta External Captive Portal

This is an example of a PHP based external captive portal for Alta. It has been tested with AP6. The code given here authorizes the user on the network. Any user engagement flow can be added to it based on one's requirements.

You need to enter the correct value for `$secret` based on what you have configured on Alta's portal.

This portal will authorize the user for 4 hours by default. You may include `timeout` parameter in JSON body to specify a different time limit in seconds. 

The redirect query string just contains 1 parameter `token`. Here is Apache's access log:

```
"GET /?token=dKBnu3mnU05KF3JXmoxL5Tu_mRnf7MqvOMcqKNG3QHgn_0StyWaqAHvTGKMRbqkpRlJW1Ix_qJJ9bQweDmsn9j8UYoOL1HpjlJZUxscf6MM2YAry7zM6mFL8T_qc0kr5XCumfYflkkNnEQ HTTP/1.0" 200 4681 "-" "CaptiveNetworkSupport-443.120.3 wispr"
```
