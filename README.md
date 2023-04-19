
[![Latest Version on Packagist](https://img.shields.io/packagist/v/mehedi-tanwir/core-component-repository.svg?style=flat-square)](https://packagist.org/packages/mehedi-tanwir/core-component-repository)
[![Build Status](https://img.shields.io/travis/mehedi-tanwir/core-component-repository/master.svg?style=flat-square)](https://travis-ci.org/mehedi-tanwir/core-component-repository)
[![Quality Score](https://img.shields.io/scrutinizer/g/mehedi-tanwir/core-component-repository.svg?style=flat-square)](https://scrutinizer-ci.com/g/mehedi-tanwir/core-component-repository)
[![Total Downloads](https://img.shields.io/packagist/dt/mehedi-tanwir/core-component-repository.svg?style=flat-square)](https://packagist.org/packages/mehedi-tanwir/core-component-repository)

## Installation

You can install the package via composer:

```bash
composer require phptr/core-component-repository @dev
```
If You can face any error try this via composer:
```bash
composer require phptr/core-component-repository @dev --ignore-platform-reqs
```
## Usage
Add this line under providers array in config/app.php
``` php
MehediIitdu\CoreComponentRepository\CoreComponentRepositoryServiceProvider::class
```
## In Controller 
Add this at the top of controller 
``` php
use CoreComponentRepository;
```
## In Controller method
Add this in controller method. You can use it in any method in controller;
``` php
CoreComponentRepository::instantiateShopRepository();
```
### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Credits

- Md Ronju (https://github.com/mdronju)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
# mehedi-tanwir
