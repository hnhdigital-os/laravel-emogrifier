# Laravel wrapper for emogrifier

This package provides a Laravel wrapper to the [Emogrifier](https://github.com/jjriv/emogrifier) package that provides the ability to convert CSS styles into inline style attributes in your HTML code.

[![Latest Stable Version](https://poser.pugx.org/hnhdigital-os/laravel-emogrifier/v/stable.svg)](https://packagist.org/packages/hnhdigital-os/laravel-emogrifier) [![Total Downloads](https://poser.pugx.org/hnhdigital-os/laravel-emogrifier/downloads.svg)](https://packagist.org/packages/hnhdigital-os/laravel-emogrifier) [![Latest Unstable Version](https://poser.pugx.org/hnhdigital-os/laravel-emogrifier/v/unstable.svg)](https://packagist.org/packages/hnhdigital-os/laravel-emogrifier) [![License](https://poser.pugx.org/hnhdigital-os/laravel-emogrifier/license.svg)](https://packagist.org/packages/hnhdigital-os/laravel-emogrifier)

[![Build Status](https://travis-ci.org/hnhdigital-os/laravel-emogrifier.svg?branch=master)](https://travis-ci.org/hnhdigital-os/laravel-emogrifier) [![StyleCI](https://styleci.io/repos/90264632/shield?branch=master)](https://styleci.io/repos/90264632) [![Test Coverage](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/badges/coverage.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/coverage) [![Issue Count](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/badges/issue_count.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier) [![Code Climate](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier/badges/gpa.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-emogrifier)

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

## Install

Via composer:

`$ composer require hnhdigital-os/laravel-emogrifier dev-master`

Enable the service provider by editing config/app.php:

```php
'providers' => array(
    ...
    HnhDigital\LaravelEmogrifier\ServiceProvider::class,
    ...
)
```

Enable an alias by editing config/app.php:

```php
'aliases' => array(
    ...
    'Emogrifier' => HnhDigital\LaravelEmogrifier\Facade::class,
    ...
)
```

## Contributing

Please see [CONTRIBUTING](https://github.com/hnhdigital-os/laravel-emogrifier/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/hnhdigital-os/laravel-emogrifier/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/hnhdigital-os/laravel-emogrifier/blob/master/LICENSE) for more information.
