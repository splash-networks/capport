# OpenNDS External Captive Portal Using FAS

This is an example of a PHP based external captive portal for OpenNDS using its Forwarding Authentication Service (FAS).

OpenNDS supports FAS in 4 modes. The following files contain external portal code for each mode respectively.

| Level   | Filename   |
|---------|------------|
| 0       | fas-0.php  |
| 1       | fas-1.php  |
| 2 and 3 | fas-23.php |

These files are a simplified version of files that come with OpenNDS: `fas-hid.php`, `fas-aes.php` and `fas-aes-https.php`.

Apache access logs for these modes are given below:

Level 0:

```
"GET /?authaction=http://192.168.1.1:2050/opennds_auth/?clientip=192.168.1.249&gatewayname=openNDS%20Node%3ae4956e4d641c%20&tok=89db8dfe&redir=http%3a%2f%2fconnectivitycheck.gstatic.com%2fgenerate_204 HTTP/1.1" 200 439 "-" "Mozilla/5.0 (Linux; Android 13; SM-A336E Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/115.0.5790.166 Mobile Safari/537.36"
```

Level 1:

```
"GET /fas-1.php?fas=aGlkPTJlNjA3MzA0ZjZmNjk4M2IzZjUyYjZlMTBiNGU0YzYyZGRjNzQ0MDk5MTY4YzI3ZGRhMGZjNzZkYjMwZjIyNTIsIGNsaWVudGlwPTE5Mi4xNjguMS4yNDksIGNsaWVudG1hYz0wZToyYTo2OTo3NTo5NzoxOCwgY2xpZW50X3R5cGU9Y3BkX2NhbiwgZ2F0ZXdheW5hbWU9b3Blbk5EUyUyME5vZGUlM2FlNDk1NmU0ZDY0MWMlMjAsIGdhdGV3YXl1cmw9aHR0cCUzYSUyZiUyZnN0YXR1cy5jbGllbnQsIHZlcnNpb249MTAuMS4yLCBnYXRld2F5YWRkcmVzcz0xOTIuMTY4LjEuMToyMDUwLCBnYXRld2F5bWFjPWU0OTU2ZTRkNjQxYywgb3JpZ2ludXJsPWh0dHAlM2ElMmYlMmZjb25uZWN0aXZpdHljaGVjay5nc3RhdGljLmNvbSUyZmdlbmVyYXRlXzIwNCwgY2xpZW50aWY9d2xhbjAsIHRoZW1lc3BlYz0sIChudWxsKShudWxsKShudWxsKShudWxsKQ== HTTP/1.1" 200 608 "-" "Mozilla/5.0 (Linux; Android 13; SM-A336E Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/115.0.5790.166 Mobile Safari/537.36"
```

Level 2 and 3:

```
"GET /fas-23.php?fas=SHNBbnkrOEgxNnRia0dFY21nNEYyT3p5ZFBTZVJUN3JobTMyeUFhNDRVT3Z0NWdYWFBJTFdGcUxpelpjYnNveEpnaFcyREJLZmMySTczSU9rU1FSWlE2SUpjV2sxYVQ0Q3Z5bHAyV2EwdWprY2Z0V2plUXZIN2tNVk5rTXlPc1VyeXJSeFREOUc5dEwwKzF4NUZuQ2x1amptVGpCZEx0YjJZYzV5N0x5aTVBSElWeWpaYmVsYXMzRHlaMWwxc2JTS1JsdjAyeXE1WlhueTNhVXVGdytnTTJWbUlycEUxTGl1TVVJNlF2b2VXU0JaS2ZscjB4ZUJpZFF6K01XanhaandZYU9QQXh4YUQrQkwwWlBDZ25wRWlrYURhaXU2YTBNSWk3bll5a0lJaWNxUFlQUFk1ZUZwZmtIek8vZmFJOGVETiswMWMvdGtxQzlva1VnV3c3cUtFZStxZll5aENlbStpTmVGS3lhWVEweDNiNkVNckQ3K2RuMTg3WXlUdEsyeUVHU0pzQ0RFRkVicmVOTVl5ak84RVE1dWxNVlVTUHo0UHpoaTNvZ0FGSkZMeUxkeC9CNVlnYyt1c09aSVVTNER0MS9EM1pmb3dNQjIvd1BvbzFCLy9CSmZHSDZ2WEZ3QWNRbE9pb1NweVBZQ1lkQWN5MTRoalgrSVMybmZkc0p4OEJ5b1RCVm5TYkJqckE3VHZrK3VzWUEwblNJOVM5RzZjOWpoSzVXS0t3VFpUY2hQRjdRdFNhNW50K0plNmE5L3JYT21CUVpsNzFoMVB3QU5uSEkrZz09&iv=3ef72fdbb9cc115b HTTP/1.1" 200 5899 "-" "Mozilla/5.0 (Linux; Android 13; SM-A336E Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/115.0.5790.166 Mobile Safari/537.36"
```

The `$redir` parameter may be set to redirect the client after successful authorization.

OpenNDS documentation is very clear and detailed and can be found [here](https://opennds.readthedocs.io/en/stable/index.html).
