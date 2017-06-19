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

    /**
     * {@inheritdoc}
     */
    protected $defaults = [
        'title' => '',
        'role'  => 'manage_options',
        'callback' => ''
    ];

    /**
     * {@inheritdoc}
     */
    protected $required = [
        'title', 'role'
    ];

}