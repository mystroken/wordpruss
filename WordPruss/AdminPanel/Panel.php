<?php

namespace WordPruss\AdminPanel;

use WordPruss\Util\HasArguments;

/**
 * Class AdminPanel
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v0.2
 */
class Panel
{
    use HasArguments;

    public function __construct( $arguments ) {
        // Sets defaults arguments.
        $this->setDefault('title', '');
        $this->setDefault('role', 'manage_options');
        $this->setDefault('callback', '');

        // Sets required arguments.
        $this->setRequired(['title', 'role']);

        // Sets menu arguments.
        $this->setArguments( array_merge($this->defaults, $arguments) );
    }

}