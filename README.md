# Nova Hook | Open Source C# Cheat Loader

I will not be actively updating this project, but I may bring in some new features from time to time when I am bored and have nothing else to do. If you need support contact me on Discord at Thaisen#9999 or [on my Discord server](https://discord.gg/J8HNrPG)! (UPDATED 11/22/2019)

By downloading and using the source you agree to the [License](#license) that comes with the loader.

Have some code you wanna add to the repo? Let me know through an email (thaisenbusiness@gmail.com) and I will test it out and add you some credits and maybe let you collab on the repo.

## What does this loader offer

This loader is in C# meaning it is quite easy to expand upon. It has multiple cheat versions that are dependant on the MyBB user groups. It has a DLL injection method for x86 only, so if you're using x64 then do not use this loader. 

### Things I recommend to add

Add some junk code to your injection library or preferably find another library to use. Add dll encryption and decryption. Have the loader ONLY decrypt to the process memory, not to the system. Have it clear the process memory after injection. Add some functions to now allow hooking into the process.

## Screenshots

<p align="center">
 <img src="https://i.imgur.com/umvcUDj.png">
</p>

<p align="center">
 <img src="https://i.imgur.com/odKzp8h.png">
</p>

## SQL Setup For HWID

1. Enter your PHPMyAdmin (Or whatever tool you use for SQL management) and navigate to your mybb_users.

2. Click on the "Structure" tab at the top of PHPMyAdmin.

3. Now add a new column named `hwid` that is a `varchar` with a max limit of `255`.

## Web Files Setup

1. Upload all of your web files.

2. Change the settings in the `config.ini` and that's all.


### Anti-Leak Instructions

1. Create a directory on your webserver to put your DLL files into.

2. Change lines 79 and 86 to correspond to the new path.

3. Create a .htaccess file inside the directory.

4. Make the .htaccess with the following code.

```
    SetEnvIfNoCase User-Agent "CustomUseragentString" good_bot
    <FilesMatch ".dll">
    	Order Deny,Allow
    	Deny from All
    	Allow from env=good_bot
    </FilesMatch>
```


This will give a `403 Forbidden` error to any bot/crawler/human who tries to access the DLL that is not running `CustomUseragentString`. The User-Agent can be spoofed giving anyone the ability to brute force. But if you create a longer string using some password generator, it will be harder.

## Loader Form Files

1. Change all of the links in Form1 to match your website.

2. Go to Form3 and change the file deletion string.

3. Goto Form4 and change all of the links and file paths.

4. Next install Costura Fody for DLL merging for MetroFramework and such.

5. Test and attempt to fix errors before spamming me.

## License

This repo is listed with a [MIT license](https://github.com/ThaisenPM/Cheat-Loader-CSGO-2.0/blob/master/LICENSE) which allows this to be used for commercial use, personal use and distribution and allows for modification of the source BUT does NOT allow me to be liable for what you do with the source and does not offer any warranty.

## FAQ

**Q: Is this a cheat for Counter Strike?**

A: No, this is a tool for being able to sell cheats without giving your .dll file to your users
___
**Q: Is this only for Counter Strike?**

A: No! Although it is targeted towards CS:GO it can literally be used for any game that takes dll based cheats
___
**Q: Is this detected by VAC?**

A: At the time of writing no. But make sure you change the signature of the loader to some extent.
___
**Q: If I am using this, do I have to give you credit?**

A: [The license for the project](https://github.com/ThaisenPM/Cheat-Loader-CSGO-2.0/blob/master/LICENSE)
___
**Q: Can I use this for a massive P2C?**

A: Yes, but your stuff WILL get leaked eventually. I'd recommend using this for a private cheat for your friends with a max of like 30 members.
___
**Q: Do I need a website?**

A: Yes and no. You can make it local only by using a tool such as XAMPP but if you want it to be available for others to use you should get a website. Port forwarding would work too but I advise against it.
___
**Q: How do I make paid usergroups on MyBB?**

A: https://community.mybb.com/thread-123597.html ALSO if you wanna be a real meme and need invite codes: https://community.mybb.com/thread-113141.html

## Credits

[HazzardEdit](https://www.youtube.com/channel/UCG0LukbgMa6vJkA_JJ4Jepg) for the [HWID creation and encryption code.](https://www.youtube.com/watch?v=M1-pAqPqJcw)

[weakspider](https://www.unknowncheats.me/forum/members/172964.html) for the [Injection method](https://www.unknowncheats.me/forum/c-/213037-x86-manual-map-injection.html)

Decimal: pCoder helped with fixes even though has 0 coding knowledge

Storm: More secure with .htaccess and fixed C:\\Temp\\ on Windows 10 where the Temp directory is in AppData.

[Peatreat](https://github.com/peatreat): Provided all fixes to injections and more
