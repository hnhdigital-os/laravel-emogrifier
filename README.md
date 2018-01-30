```
                                 _  __ _ 
                                (_)/ _(_)
  ___ _ __ ___   ___   __ _ _ __ _| |_ _  ___ _ __
 / _ \ '_ ` _ \ / _ \ / _` | '__| |  _| |/ _ \ '__|
|  __/ | | | | | (_) | (_| | |  | | | | |  __/ |
 \___|_| |_| |_|\___/ \__, |_|  |_|_| |_|\___|_|
                       __/ |
                      |___/
```

This package provides a Laravel wrapper to the [Emogrifier](https://github.com/jjriv/emogrifier) package that provides the ability to convert CSS styles into inline style attributes in your HTML code.

[![Latest Stable Version](https://poser.pugx.org/hnhdigital-os/laravel-emogrifier/v/stable.svg)](https://packagist.org/packages/hnhdigital-os/laravel-emogrifier) [![Total Downloads](https://poser.pugx.org/hnhdigital-os/laravel-emogrifier/downloads.svg)](https://packagist.org/packages/hnhdigital-os/laravel-emogrifier) [![Latest Unstable Version](https://poser.pugx.org/hnhdigital-os/laravel-emogrifier/v/unstable.svg)](https://packagist.org/packages/hnhdigital-os/laravel-emogrifier) [![Built for Laravel](https://img.shields.io/badge/Built_for-Laravel-green.svg)](https://laravel.com/) [![License](https://poser.pugx.org/hnhdigital-os/laravel-navigation-builder/license.svg)](https://packagist.org/packages/hnhdigital-os/laravel-navigation-builder) [![Donate to this project using Patreon](https://img.shields.io/badge/patreon-donate-yellow.svg)](https://patreon.com/RoccoHoward)

[![Build Status](https://travis-ci.org/hnhdigital-os/laravel-emogrifier.svg?branch=master)](https://travis-ci.org/hnhdigital-os/laravel-emogrifier) [![StyleCI](https://styleci.io/repos/90264632/shield?branch=master)](https://styleci.io/repos/90264632) [![Test Coverage](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/badges/coverage.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/coverage) [![Issue Count](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/badges/issue_count.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier) [![Code Climate](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/badges/gpa.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier)

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

## Documentation

* [Requirements](#requirements)
* [Installation](#install)
* [Configuration](#configuration)
* [Instructions](#instructions)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Requirements

* Laravel 5.4
* PHP 7.1

## Installation

Via composer:

`$ composer require hnhdigital-os/laravel-emogrifier ~2.0`

The service provider will autoload from Laravel 5.5.

Enable the facade by editing config/app.php:

```php
'aliases' => array(
    ...
    'Emogrifier' => HnhDigital\Emogrifier\Facade::class,
    ...
)
```

To enable the service provider in versions prior to Laravel 5.4, edit the config/app.php:

Enable the service provider by editing config/app.php:

```php
'providers' => array(
    ...
    HnhDigital\Emogrifier\ServiceProvider::class,
    ...
)
```

## Instructions

```php
$output = Emogrifier::parse($html, $css);
$output = app('Emogrifier')->parse($html, $css);

```

## Contributing

Please see [CONTRIBUTING](https://github.com/hnhdigital-os/laravel-emogrifier/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/RoccoHowrd)
* [All Contributors](https://github.com/hnhdigital-os/laravel-emogrifier/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/hnhdigital-os/laravel-emogrifier/blob/master/LICENSE) for more information.
