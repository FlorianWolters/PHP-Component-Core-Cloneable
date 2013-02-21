# FlorianWolters\Component\Core\Cloneable

[![Build Status](https://secure.travis-ci.org/FlorianWolters/PHP-Component-Core-Cloneable.png?branch=master)](http://travis-ci.org/FlorianWolters/PHP-Component-Core-Cloneable)

**FlorianWolters\Component\Core\Cloneable** allows and disallows the cloning of objects as a simple-to-use PHP component.

## Introduction

**FlorianWolters\Component\Core\Cloneable** consists of four artifacts:

1. The interface `FlorianWolters\Component\Core\Cloneable\CloneableInterface`.
2. The exception `FlorianWolters\Component\Core\Cloneable\CloneNotSupportedException`.
3. The trait `FlorianWolters\Component\Core\Cloneable\CloneNotSupportedTrait` to indicate to the `__clone` method of a class that it is **illegal** for that method to make a field-for-field copy of instances of that class.

## Features

* Disallows cloning via the magic method [`__clone`][23] by using the trait `CloneNotSupportedTrait`. When trying to copy an object via the `clone` keyword, a `CloneNotSupportedException` is thrown.
* (Exlicitly) Allows cloning via the magic method [`__clone`][23] by implementing the interface `CloneableInterface`.
* Artifacts tested with both static and dynamic test procedures:
    * Dynamic component tests (unit tests) implemented using [PHPUnit][19].
    * Static code analysis performed using the following tools:
        * [PHP_CodeSniffer][14]: Style Checker
        * [PHP Mess Detector (PHPMD)][18]: Code Analyzer
        * [phpcpd][4]: Copy/Paste Detector (CPD)
        * [phpdcd][5]: Dead Code Detector (DCD)
* Installable via [Composer][3] or the [PEAR command line installer][11]:
    * Provides a [Packagist][22] package which can be installed using the dependency manager [Composer][3].

      Click [here][21] for the package on [Packagist][22].
    * Provides a [PEAR package][13] which can be installed using the package manager [PEAR installer][11].

      Click [here][9] for the [PEAR channel][12].
* Provides a complete Application Programming Interface (API) documentation generated with the documentation generator [ApiGen][2].

  Click [here][1] for the current API documentation.
* Follows the [PSR-0][6] requirements for autoloader interoperability.
* Follows the [PSR-1][7] basic coding style guide.
* Follows the [PSR-2][8] coding style guide.
* Follows the [Semantic Versioning][20] Specification (SemVer) 2.0.0-rc.1.

## Requirements

* [PHP][17] >= 5.4

## Installation

### Local Installation

**FlorianWolters\Component\Core\Cloneable** should be installed using the dependency manager [Composer][3]. [Composer][3] can be installed with [PHP][6].

    php -r "eval('?>'.file_get_contents('http://getcomposer.org/installer'));"

> This will just check a few [PHP][17] settings and then download `composer.phar` to your working directory. This file is the [Composer][3] binary. It is a PHAR ([PHP][17] archive), which is an archive format for [PHP][17] which can be run on the command line, amongst other things.
>
> Next, run the `install` command to resolve and download dependencies:

    php composer.phar install

### System-Wide Installation

**FlorianWolters\Component\Core\Cloneable** should be installed using the [PEAR installer][11]. This installer is the [PHP][17] community's de-facto standard for installing [PHP][17] components.

    pear channel-discover pear.florianwolters.de
    pear install --alldeps fw/Cloneable

## As A Dependency On Your Component

### Composer

If you are creating a component that relies on **FlorianWolters\Component\Core\Cloneable**, please make sure that you add **FlorianWolters\Component\Core\Cloneable** to your component's `composer.json` file:

```json
{
    "require": {
        "florianwolters/component-core-cloneable": "0.1.*"
    }
}
```

### PEAR

If you are creating a component that relies on **FlorianWolters\Component\Core\Cloneable**, please make sure that you add **FlorianWolters\Component\Core\Cloneable** to your component's `package.xml` file:

```xml
<dependencies>
  <required>
    <package>
      <name>Cloneable</name>
      <channel>pear.florianwolters.de</channel>
      <min>0.1.0</min>
      <max>0.1.99</max>
    </package>
  </required>
</dependencies>
```

## Usage

The best documentation for **FlorianWolters\Component\Core\Cloneable** are the unit tests, which are shipped in the package. You will find them installed into your [PEAR][10] repository, which on Linux systems is normally `/usr/share/php/test`.

## Development Environment

If you want to patch or enhance this component, you will need to create a suitable development environment. The easiest way to do that is to install [phix4componentdev][16]:

    # phix4componentdev
    pear channel-discover pear.phix-project.org
    pear install phix/phix4componentdev

You can then clone the Git repository:

    # PHP-Component-Core-Cloneable
    git clone http://github.com/FlorianWolters/PHP-Component-Core-Cloneable

Then, install a local copy of this component's dependencies to complete the development environment:

    # build vendor/ folder
    phing build-vendor

To make life easier for you, common tasks (such as running unit tests, generating code review analytics, and creating the [PEAR package][13]) have been automated using [phing][15]. You'll find the automated steps inside the `build.xml` file that ships with the component.

Run the command `phing` in the component's top-level folder to see the full list of available automated tasks.

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with this program. If not, see <http://gnu.org/licenses/lgpl.txt>.

[1]: http://blog.florianwolters.de/PHP-Component-Core-Cloneable
     "FlorianWolters\Component\Core\Cloneable | Application Programming Interface (API) documentation"
[2]: http://apigen.org
     "ApiGen | API documentation generator for PHP 5.3.+"
[3]: http://getcomposer.org
     "Composer"
[4]: https://github.com/sebastianbergmann/phpcpd
     "sebastianbergmann/phpcpd · GitHub"
[5]: https://github.com/sebastianbergmann/phpdcd
     "sebastianbergmann/phpdcd · GitHub"
[6]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
     "PSR-0 requirements for autoloader interoperability"
[7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
     "PSR-1 basic coding style guide"
[8]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
     "PSR-2 coding style guide"
[9]: http://pear.florianwolters.de
     "PEAR channel of Florian Wolters"
[10]: http://pear.php.net
      "PEAR - PHP Extension and Application Repository"
[11]: http://pear.php.net/manual/en/guide.users.commandline.cli.php
      "Manual :: Command line installer (PEAR)"
[12]: http://pear.php.net/manual/en/guide.users.concepts.channel.php
      "Manual :: PEAR Channels"
[13]: http://pear.php.net/manual/en/guide.users.concepts.package.php
      "Manual :: PEAR Packages"
[14]: http://pear.php.net/package/PHP_CodeSniffer
      "PHP_CodeSniffer"
[15]: http://phing.info
      "Phing"
[16]: https://github.com/stuartherbert/phix4componentdev
      "stuartherbert/phix4componentdev · GitHub"
[17]: http://php.net
      "PHP: Hypertext Preprocessor"
[18]: http://phpmd.org
      "PHPMD - PHP Mess Detector"
[19]: http://phpunit.de
      "sebastianbergmann/phpunit · GitHub"
[20]: http://semver.org
      "Semantic Versioning"
[21]: http://packagist.org/packages/florianwolters/component-core-cloneable
      "florianwolters/component-core-cloneable - Packagist"
[22]: http://packagist.org
      "Packagist"
[23]: http://php.net/language.oop5.cloning
      "PHP: Object Cloning"
