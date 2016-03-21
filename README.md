# mustache-file-array-loader

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides a loader for [Mustache.php] to allow loading from an array of files.

## Install

Via Composer

``` bash
$ composer require ramracing/mustache-file-array-loader
```

## Usage

``` php
$skeleton = new RamRacing\Mustache\FileArrayLoader();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@ramracing.org instead of using the issue tracker.

## Credits

- [Ram Racing]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ramracing/mustache-file-array-loader.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ramracing/mustache-file-array-loader/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ramracing/mustache-file-array-loader.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ramracing/mustache-file-array-loader.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ramracing/mustache-file-array-loader.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ramracing/mustache-file-array-loader
[link-travis]: https://travis-ci.org/ramracing/mustache-file-array-loader
[link-scrutinizer]: https://scrutinizer-ci.com/g/ramracing/mustache-file-array-loader/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ramracing/mustache-file-array-loader
[link-downloads]: https://packagist.org/packages/ramracing/mustache-file-array-loader
[link-author]: https://github.com/ramracing
[link-contributors]: ../../contributors

[Mustache.php]: https://github.com/bobthecow/mustache.php
[Ram Racing]: https://ramracing.org
