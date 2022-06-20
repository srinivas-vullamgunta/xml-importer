# Laravel XML made easy!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/srinivas-vullamgunta/xml-importer.svg?style=flat-square)](https://packagist.org/packages/srinivas-vullamgunta/xml-importer)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/srinivas-vullamgunta/xml-importer/run-tests?label=tests)](https://github.com/srinivas-vullamgunta/xml-importer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/srinivas-vullamgunta/xml-importer/Check%20&%20fix%20styling?label=code%20style)](https://github.com/srinivas-vullamgunta/xml-importer/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/srinivas-vullamgunta/xml-importer.svg?style=flat-square)](https://packagist.org/packages/srinivas-vullamgunta/xml-importer)

This package handles importing and exporting XML data from your Laravel application.

The main features are

* Fast XML importing with the ability to cast to classes and models
* XML exporting from (nested / value only ) arrays
* Exporting Laravel views to XML

## Installation

You can install the package via composer:

```bash
composer require srinivas-vullamgunta/xml-importer
```

## Usage
This packages comes with a facade which you can use like this `\XML::` or use it in your class like `use XML;`

In depth guides can be found here:

* [Exporting](https://github.com/srinivas-vullamgunta/xml-importer/wiki/Exporting)
* [Importing](https://github.com/srinivas-vullamgunta/xml-importer/wiki/Importing)


```php
$notes = XML::import("notes.xml")
    ->cast('note')->to(NoteModel::class)
    ->expect('note')->as('array')
    ->optimize('camelcase')
    ->get();

```


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [srinivas-vullamgunta](https://github.com/srinivas-vullamgunta) 


