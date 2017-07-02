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
