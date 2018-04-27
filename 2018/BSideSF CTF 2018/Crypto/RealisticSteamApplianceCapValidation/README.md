# Realistic Steam Appliance: Cap Validation (BSidesSF 2018 CTF)

## Description

>>>
Realistic Steam Appliance

1) Cup validation system

Protecting the integrity of the custom-purchased cups is of utmost importance. Since the cup area is small we only have room for a small QR code which will be factory-signed. Instead of rolling our own crypto, we've decided to go with an unbreakable industry-standard signing algorithm using our public key:

d=0x025F2D1619EF1ABD

Our system will then scan the QR code and validate that it was properly signed by us. For our initial run of cups, we are shipping them with n=0x01A3900C7CD5B305;c=0x16464fd11c039c2 which can be validated with our private key.

P.S, Is not in FLAG: format
>>>

## Links
* https://ctf.bsidessf.net/challenges/