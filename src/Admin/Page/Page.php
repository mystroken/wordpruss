<?php

namespace WordPruss\Admin\Page;

use WordPruss\Support\HasArgumentsTrait;

/**
 * Class AdminPanel
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v1.0
 * @see https://codex.wordpress.org/Administration_Menus
 */
class Page
{
    use HasArgumentsTrait;

    /**
     * Page constructor.
     *
     * Constructs an admin page.
     *
     * @param $arguments
     */
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

    /**
     * @return mixed|string
     * @codeCoverageIgnore
     */
    public function __toString() {
        return !empty($this->getArgument('title'))
            ? $this->getArgument('title')
            : ''
        ;
    }

}