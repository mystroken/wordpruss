<?php

namespace WordPruss\Admin\Page;

use WordPruss\Support\HasArgumentsTrait;
use WordPruss\Admin\Page\AbstractMenu;

/**
 * Class AdminPanel
 *
 * @package WordPruss
 * @subpackage WordPruss\Admin\Page
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v1.0
 * @see https://codex.wordpress.org/Administration_Menus
 */
class Page
{
    use HasArgumentsTrait;

    /**
     * @var AbstractMenu $menu
     */
    protected $menu;


    /**
     * Page constructor.
     *
     * Constructs an admin page.
     *
     * @param $arguments
     */
    public function __construct( $arguments, $menu = null )
    {

        if ($menu !== null && $menu instanceof AbstractMenu)
        {
            $this->menu = $menu;
        }

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

    /**
     * @return AbstractMenu
     */
    public function getMenu(){
        return $this->menu;
    }

    /**
     * @param AbstractMenu $menu
     * @return self 
     */
    public function setMenu(AbstractMenu $menu){
        $this->menu = $menu;
        return $this;
    }

}