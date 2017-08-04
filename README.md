<h1 align="center">ccinn-psr-fix ---Format the files according to the PSR---- </h1>

# specification

In many cases, we need to format our PHP files to conform to the PSR2 standard, but for the existing code, we have no reason to format them one by one, this time you can use `php-cs-fix` to help us.

For me, because I want to use vim, I need a code formatting tools to help me complete psr2 standard format code, this is good for my project more specification, combining vimscript, we can make each PHP file is completed, is automatically formatted for the current configuration standards

# reference

- [php-cs-fix](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

> If you don't want to use this configuration, check out the original configuration

# user manual

## Install

```
git clone https://github.com/whiteCcinn/ccinn-psr-fix.git
```

then 

```
cd ccinn-psr-fix
chmod a+x php-cs-fix
mv php-cs-fix /usr/local/bin
```

Then you can use `php-cs-fix` in the global role

## config

**.php_cs**

This is a ps-cs-fix configuration file that, according to my requirements, has some other criteria besides the PSR2

1.You can put this file in the source directory you want to format

Or

2.You can put this file in a fixed place

IF your choose the `1`:

you just need:

```
php-cs-fix fix xxxx.php
```


ELSEIF your choose the `2`:

you must be add option 

```
php-cs-fix fix xxxx.php --config /path/to/.php_cs
```

