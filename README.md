# WordPruss

[![Latest Stable Version](https://poser.pugx.org/wordpruss/wordpruss/v/stable)](https://packagist.org/packages/wordpruss/wordpruss)
[![Coverage Status](https://coveralls.io/repos/github/mystroken/wordpruss/badge.svg?branch=master)](https://coveralls.io/github/mystroken/wordpruss?branch=master)
[![Total Downloads](https://poser.pugx.org/wordpruss/wordpruss/downloads)](https://packagist.org/packages/wordpruss/wordpruss)
[![License](https://poser.pugx.org/wordpruss/wordpruss/license)](https://packagist.org/packages/wordpruss/wordpruss)


WordPruss is a reusable set of clean PHP classes that wrap WordPress functions for fastly develop a plugin or a theme.



## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install WordPruss.

```bash
$ composer require wordpruss/wordpruss "~0.1"
```

This will install WordPruss and all required dependencies. WordPruss requires PHP 5.6 or newer.


## Usage

First of all, you have to include the autoload file of Composer.

```php
require 'vendor/autoload.php';
```

Theme development  => Ideally into functions.php file.
Plugin development => Ideally into /path/your-plugin-folder/your-plugin-bootstrap-file.php file

For more information on how to configure your web server, see the [Documentation](##).

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover security related issues, please email mystroken@gmail.com or use the issue tracker.

## License
WordPruss is an open-sourced library licensed under the MIT license. See [License File](LICENSE.md) for more information.
