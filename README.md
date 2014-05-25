# Component\Core\Cloneable

**FlorianWolters\Component\Core\Cloneable** is a simple-to-use [PHP][1] component that allows and disallows the cloning of objects.

[![Build Status](https://travis-ci.org/FlorianWolters/PHP-Component-Core-Cloneable.svg?branch=master)](https://travis-ci.org/FlorianWolters/PHP-Component-Core-Cloneable)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Cloneable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Cloneable/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Cloneable/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/FlorianWolters/PHP-Component-Core-Cloneable/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/16878759-ea3e-4854-bc64-c43402fe09bc/mini.png)](https://insight.sensiolabs.com/projects/16878759-ea3e-4854-bc64-c43402fe09bc)
[![Coverage Status](https://coveralls.io/repos/FlorianWolters/PHP-Component-Core-Cloneable/badge.png?branch=master)](https://coveralls.io/r/FlorianWolters/PHP-Component-Core-Cloneable?branch=master)

[![Latest Stable Version](https://poser.pugx.org/florianwolters/component-core-cloneable/v/stable.png)](https://packagist.org/packages/florianwolters/component-core-cloneable)
[![Total Downloads](https://poser.pugx.org/florianwolters/component-core-cloneable/downloads.png)](https://packagist.org/packages/florianwolters/component-core-cloneable)
[![Monthly Downloads](https://poser.pugx.org/florianwolters/component-core-cloneable/d/monthly.png)](https://packagist.org/packages/florianwolters/component-core-cloneable)
[![Daily Downloads](https://poser.pugx.org/florianwolters/component-core-cloneable/d/daily.png)](https://packagist.org/packages/florianwolters/component-core-cloneable)
[![Latest Unstable Version](https://poser.pugx.org/florianwolters/component-core-cloneable/v/unstable.png)](https://packagist.org/packages/florianwolters/component-core-cloneable)
[![License](https://poser.pugx.org/florianwolters/component-core-cloneable/license.png)](https://packagist.org/packages/florianwolters/component-core-cloneable)

[![Stories in Ready](https://badge.waffle.io/florianwolters/php-component-core-cloneable.png?label=ready&title=Ready)](https://waffle.io/florianwolters/php-component-core-cloneable)
[![Dependency Status](https://www.versioneye.com/user/projects/51c33102007fcd0002000439/badge.png)](https://www.versioneye.com/user/projects/51c33102007fcd0002000439)
[![Dependencies Status](https://depending.in/FlorianWolters/PHP-Component-Core-Cloneable.png)](http://depending.in/FlorianWolters/PHP-Component-Core-Cloneable)
[![HHVM Status](http://hhvm.h4cc.de/badge/florianwolters/component-core-cloneable.png)](http://hhvm.h4cc.de/package/florianwolters/component-core-cloneable)

## Table of Contents (ToC)

* [Introduction](#introduction)
* [Features](#features)
* [Requirements](#requirements)
* [Usage](#usage)
* [Installation](#installation)
* [As A Dependency On Your Component](#as-a-dependency-on-your-component)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Introduction

This component is inspired by the the [Java][54] programming language.

**FlorianWolters\Component\Core\Cloneable** consists of six artifacts:

1. The interface [`FlorianWolters\Component\Core\CloneableInterface`][55]: Indicates to the magic [`__clone`][53] method of a class that it is legal for that method to make a field-for-field copy of instances of that class.
2. The exception class [`FlorianWolters\Component\Core\CloneNotSupportedException`][56]: Indicates that the magic [`__clone`][23] method in a class has been called to clone an object, but that the object's class does not implement the [`CloneableInterface`][25].
3. The trait [`FlorianWolters\Component\Core\CloneNotSupportedTrait`][57]: Indicates to the magic [`__clone`][53] method of a class that it is **illegal** for that method to make a field-for-field copy of instances of that class.
3. The trait [`FlorianWolters\Component\Core\ShallowCloneTrait`][58]: Indicates to the magic [`__clone`][53] method of a class that it is **legal** for that method to make a **shallow** field-for-field copy of instances of that class.
3. The trait [`FlorianWolters\Component\Core\DeepCloneTrait`][59]: Indicates to the magic [`__clone`][53] method of a class that it is **legal** for that method to make a **deep** field-for-field copy of instances of that class.
6. The static class [`FlorianWolters\Component\Core\CloneUtils`][60]: Offers operations to clone objects.

## Features

* Disallows cloning via the magic method [`__clone`][53] by using the trait [`CloneNotSupportedTrait`][57]. When trying to copy an object via the `clone` keyword, a [`CloneNotSupportedException`][56] is thrown.
* Allows (type safe) cloning via the magic method [`__clone`][53] by implementing the interface [`CloneableInterface`][55] and using one of the two traits [`ShallowCloneTrait`][58] to make a **shallow** or [`DeepCloneTrait`][59] to make a **deep** copy of an instance of the class.
* Allows creating **deep** copies of any object via the method `copyDeep` of the class [`CloneUtils`][60].
* Artifacts tested with both static and dynamic test procedures:
    * Dynamic component tests (unit and integration tests) implemented with [PHPUnit][41].
    * Static code analysis performed using the following tools:
        * [PHP_CodeSniffer][40]: Style Checker
        * [PHP Mess Detector (PHPMD)][44]: Code Analyzer
        * [PHP Depend][45]: Code Metrics
        * [phpcpd][42]: Copy/Paste Detector (CPD)
        * [phpdcd][43]: Dead Code Detector (DCD)
        * [SensioLabs Security Checker][47]: Security Checker
    * Continuous Integration (CI) using the following web services:
        * [Scrutinizer CI][21]
        * [SensioLabsInsight][22]
        * [Coveralls][23]
        * [VersionEye][24]
        * [Depending][25]
        * [Waffle][26]
* Provides a [Packagist][3] package which can be installed using the dependency manager [Composer][2]. Click [here][51] for the package on [Packagist][3].
* Provides a complete Application Programming Interface (API) documentation generated with the documentation generator [phpDocumentor][46]. Click [here][52] for the API documentation.
* Follows the following "standards" from the [PHP Framework Interoperability Group (FIG)][10]. PSR stands for PHP Standards Recommendation:
    * [PSR-0][11]: Autoloading Standards

        > Aims to provide a standard file, class and namespace convention to allow plug-and-play code.
    * [PSR-1][12]: Basic Coding Standard

        > Aims to ensure a high level of technical interoperability between shared PHP code.
    * [PSR-2][13]: Coding Style Guide

        > Provides a Coding Style Guide for projects looking to standardize their code.
    * [PSR-4][14]: Autoloader

        > A more modern take on autoloading reflecting advances in the ecosystem.
* Follows the [Semantic Versioning][4] (SemVer) specification version 2.0.0.

## Requirements

### Production

* [PHP][1] >= 5.4
* [Composer][2]

### Development

* [PHPUnit][41]
* [phpcpd][42]
* [phpdcd][43]
* [PHP_CodeSniffer][40]
* [PHP Mess Detector (PHPMD)][44]
* [PDepend][45]
* [phpDocumentor][46]
* [SensioLabs Security Checker][47]
* [php-coveralls][48]

## Usage

The best documentation for **FlorianWolters\Component\Core\Cloneable** are the unit tests, which are shipped in the package.

## Installation

**FlorianWolters\Component\Core\Cloneable** should be installed using the dependency manager [Composer][2].

> [Composer][2] is a tool for dependency management in [PHP][1]. It allows you to declare the dependent libraries your project needs and it will install them in your project for you.

The [Composer][2] installer can be downloaded with `php`.

    php -r "readfile('https://getcomposer.org/installer');" | php

> This will just check a few [PHP][1] settings and then download `composer.phar` to your working directory. This file is the [Composer][2] binary. It is a PHAR ([PHP][1] archive), which is an archive format for [PHP][1] which can be run on the command line, amongst other things.

> To resolve and download dependencies, run the `install` command:

    php composer.phar install

## As A Dependency On Your Component

If you are creating a component that relies on **FlorianWolters\Component\Core\Cloneable**, please make sure that you add **FlorianWolters\Component\Core\Cloneable** to your component's `composer.json` file:

```json
{
    "require": {
        "florianwolters/component-core-cloneable": "0.3.*"
    }
}
```

## Contributing

See [`CONTRIBUTING.md`](CONTRIBUTING.md).

## Credits

* [Florian Wolters][9]
* [All Contributors][50]

## License

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU Lesser General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along
with this program. If not, see <http://gnu.org/licenses/lgpl.txt>.

[1]: https://php.net
     "PHP: Hypertext Preprocessor"
[2]: https://getcomposer.org
     "Composer"
[3]: https://packagist.org
     "Packagist"
[4]: http://semver.org
     "Semantic Versioning"
[9]: https://github.com/FlorianWolters
     "FlorianWolters · GitHub"
[10]: http://php-fig.org
      "PHP-FIG — PHP Framework Interop Group"
[11]: http://php-fig.org/psr/psr-0
      "PSR-0 requirements for autoloader interoperability"
[12]: http://php-fig.org/psr/psr-1
      "PSR-1 basic coding style guide"
[13]: http://php-fig.org/psr/psr-2
      "PSR-2 coding style guide"
[14]: http://php-fig.org/psr/psr-4
      "PSR-4: Improved Autoloading"
[20]: https://travis-ci.org
      "Travis CI"
[21]: https://scrutinizer-ci.com
      "Scrutinizer CI"
[22]: https://insight.sensiolabs.com
      "SensioLabsInsight"
[23]: https://coveralls.io
      "Coveralls"
[24]: https://versioneye.com
      "VersionEye"
[25]: https://depending.in
      "Depending"
[26]: https://waffle.io
      "Waffle"
[27]: http://hhvm.h4cc.de
      "HHVM Support in PHP Projects"
[40]: https://pear.php.net/package/PHP_CodeSniffer
      "PHP_CodeSniffer"
[41]: https://phpunit.de
      "PHPUnit"
[42]: https://github.com/sebastianbergmann/phpcpd
      "sebastianbergmann/phpcpd · GitHub"
[43]: https://github.com/sebastianbergmann/phpdcd
      "sebastianbergmann/phpdcd · GitHub"
[44]: http://phpmd.org
      "PHPMD - PHP Mess Detector"
[45]: http://pdepend.org
      "PHP Depend - Software Metrics for PHP"
[46]: http://phpdoc.org
      "phpDocumentor"
[47]: https://github.com/sensiolabs/security-checker
      "SensioLabs Security Checker"
[48]: https://github.com/satooshi/php-coveralls
      "satooshi/php-coveralls · GitHub"
[50]: https://github.com/FlorianWolters/PHP-Component-Core-Cloneable/contributors
      "Contributors to FlorianWolters/PHP-Component-Core-Cloneable"
[51]: https://packagist.org/packages/florianwolters/component-core-cloneable
      "florianwolters/component-core-cloneable - Packagist"
[52]: http://blog.florianwolters.de/PHP-Component-Core-Cloneable
      "Application Programming Interface (API) documentation"
[53]: https://php.net/language.oop5.cloning
      "PHP: Object Cloning"
[54]: https://java.com
      "Java"
[55]: src/main/php/CloneableInterface.php
      "FlorianWolters\Component\Core\CloneableInterface"
[56]: src/main/php/CloneNotSupportedException.php
      "FlorianWolters\Component\Core\CloneNotSupportedException"
[57]: src/main/php/CloneNotSupportedTrait.php
      "FlorianWolters\Component\Core\CloneNotSupportedTrait"
[58]: src/main/php/ShallowCloneTrait.php
      "FlorianWolters\Component\Core\ShallowCloneTrait"
[59]: src/main/php/DeepCloneTrait.php
      "FlorianWolters\Component\Core\DeepCloneTrait"
[60]: src/main/php/CloneUtils.php
      "FlorianWolters\Component\Core\CloneUtils"
