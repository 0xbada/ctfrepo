# Wait Wait... Don't Shell Me (Plaid CTF 2018)

* 125 pts

## Description

>>>
PCTF radio is hosting a new game show. Check it out at `wwdsm.chal.pwning.xxx:6615`.
>>>

## Quiz
```
nc wwdsm.chal.pwning.xxx 6615

From PPP and PCTF Pittsburgh, this is

+---------------------------------------------------------------------------+
|                       Wait Wait... Don't Shell Me!                        |
+---------------------------------------------------------------------------+

The PPP Flage Quiz.

Now it's time for

----------------------- Shellcode, Fill in the Blank. -----------------------

The rules are these: contestants get 60 seconds to answer as many fill in the
hex byte questions as possible. If you manage to complete the shellcode, you
win! We have flipped a coin, and Pwner was chosen to go first. Pwner, you're
up. Time begins as soon as you connect, so answer quickly!

b8 __ __ __ __ bf __ __ __ __ be __ __ __ __ ba
__ __ __ __ 01 c7 29 fe 21 f2 0f 05 48 b8 __ __
__ __ __ __ __ __ 50 b8 __ __ __ __ ba __ __ __
__ bf __ __ __ __ 48 89 __ 0f 05 be __ __ __ __
bf __ __ __ __ ba __ __ __ __ 83 c0 __ 0f 05 89
__ b8 __ __ __ __ bf __ __ __ __ 41 ba __ __ __
__ 0f 05 58
```

## Links
* https://play.plaidctf.com/
