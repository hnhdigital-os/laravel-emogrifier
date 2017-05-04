# Laravel Number Converter

This package provides a Laravel wrapper to the [PHP-Number-Converter](https://github.com/bluora/php-number-converter) package that provides the ability to convert a numerical number to a word, roman numeral, or an ordinal suffix.

[![Latest Stable Version](https://poser.pugx.org/bluora/laravel-emogrifier/v/stable.svg)](https://packagist.org/packages/bluora/laravel-emogrifier) [![Total Downloads](https://poser.pugx.org/bluora/laravel-emogrifier/downloads.svg)](https://packagist.org/packages/bluora/laravel-emogrifier) [![Latest Unstable Version](https://poser.pugx.org/bluora/laravel-emogrifier/v/unstable.svg)](https://packagist.org/packages/bluora/laravel-emogrifier) [![License](https://poser.pugx.org/bluora/laravel-emogrifier/license.svg)](https://packagist.org/packages/bluora/laravel-emogrifier)

[![Build Status](https://travis-ci.org/bluora/laravel-emogrifier.svg?branch=master)](https://travis-ci.org/bluora/laravel-emogrifier) [![StyleCI](https://styleci.io/repos/x/shield?branch=master)](https://styleci.io/repos/x) [![Test Coverage](https://codeclimate.com/github/bluora/laravel-emogrifier/badges/coverage.svg)](https://codeclimate.com/github/bluora/laravel-emogrifier/coverage) [![Issue Count](https://codeclimate.com/github/bluora/laravel-emogrifier/badges/issue_count.svg)](https://codeclimate.com/github/bluora/laravel-emogrifier) [![Code Climate](https://codeclimate.com/github/bluora/laravel-emogrifier/badges/gpa.svg)](https://codeclimate.com/github/bluora/laravel-emogrifier)

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

## Install

Via composer:

`$ composer require bluora/laravel-emogrifier dev-master`

Enable the service provider by editing config/app.php:

```php
'providers' => array(
    ...
    'Bluora\LaravelEmogrifier\ServiceProvider',
    ...
)
```

Enable an alias by editing config/app.php:

```php
'aliases' => array(
    ...
    'NumConvert' => 'Bluora\LaravelEmogrifier\NFacade',
    ...
)
```

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-emogrifier/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-emogrifier/contributors)

## License
