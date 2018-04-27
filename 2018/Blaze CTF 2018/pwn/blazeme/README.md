# blazeme (Blaze CTF 2018)
* 420 pts

## Description
>>>
this is kerenl explotation challegne so you need to do the following in server :

myuser should be blazeme

adduser myuser

// follow the prompts

su myuser cd /home/myuser cp /path/to/bzImage . cp /path/to/rootfs.ext2 . cp /path/to/launcher/script.sh . # script.sh is the launcher script mentioned in the previous section

// add /home/myuser/script.sh to /etc/shells

chsh -s /home/myuser/script.sh myuser

// and qemu user's ID is blazeme password is guest. Do the same for the server's user.

// This has been done.

Download this (6 MB) (`https://s3.us-east-2.amazonaws.com/blazefox/blazeme/blazeme.tar.gz`)

----
Kernel exploitation challenge!

`ssh blazeme@18.222.40.104` password: `guest`

Download here (6 MB) (`https://s3.us-east-2.amazonaws.com/blazefox/blazeme/blazeme.tar.gz`

The flag in this archive is not the real flag. It's there to make you feel good when your exploit works locally.

Author: crixer
>>>

## Links
* https://ctf.420blaze.in
