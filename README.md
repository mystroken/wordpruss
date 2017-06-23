# WordPruss

[![Build Status](https://travis-ci.org/mystroken/wordpruss.svg?branch=master)](https://travis-ci.org/mystroken/wordpruss)
[![Total Downloads](https://poser.pugx.org/wordpruss/wordpruss/downloads)](https://packagist.org/packages/wordpruss/wordpruss)
[![License](https://poser.pugx.org/wordpruss/wordpruss/license)](https://packagist.org/packages/wordpruss/wordpruss)


WordPruss is a reusable set of clean PHP classes that wrap WordPress functions for a fastly plugin or theme development.



## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install WordPruss.

```bash
$ composer require wordpruss/wordpruss "dev-master"
```

This will install WordPruss and all required dependencies. WordPruss requires PHP 5.6 or newer.


## Usage

Here is a Basic Example of the library usage:

```php
<?php

/*
* Suppose that we need
* to create an admin panel for our plugin.
* Let's go
*/

require __DIR__. '/vendor/autoload.php';

use \WordPruss\AdminPanel\Menu;
use \WordPruss\AdminPanel\Panel;


// Creates a new admin menu
$adminMenu = new Menu([
    'title' => 'My Plugin Name',
    'slug' => 'my_plugin_name'
]);

// Create a panel for the menu
$adminPanel = new Panel([
    'title' => 'Plugin Name - Welcome to the settings page',
    'role' => 'manage_options',
    'callback' => function() {
        echo '<h1>Hello World !</h1>';
    }
]);

$adminMenu
// Links panel to the menu
    ->setPanel($adminPanel)
// Adds the menu to WordPress admin menus list
    ->attach();
```


For more information on how to configure your web server, see the [Documentation](https://mystroken.github.io/wordpruss/).

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover security related issues, please email mystroken@gmail.com or use the issue tracker.

## License
WordPruss is an open-sourced library licensed under the MIT license. See [License File](LICENSE.md) for more information.
