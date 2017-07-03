<?php

namespace WordPruss\Admin\Page;

/**
 * Class DashboardMenu
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v1.0
 * @see https://codex.wordpress.org/Administration_Menus
 */
class Menu extends AbstractMenu
{

    /**
     * Menu constructor.
     *
     * Constructs a new admin menu.
     *
     * @param array $arguments
     */
	public function __construct( $arguments ){

	    // Sets the defaults value of arguments.
        $this->defaults = [
            'title' => '',
            'slug'  => '',
            'order' => null,
            'icon'  => 'none'
        ];

        // Sets the required values of arguments.
        $this->required = ['title', 'slug'];

        // Sets finally arguments.
        $this->setArguments( array_merge($this->defaults, $arguments) );
	}

    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function addMenuPage() {
        add_menu_page(
            $this->page->getArgument('title'),
            $this->getArgument('title'),
            $this->page->getArgument('role'),
            $this->getArgument('slug'),
            $this->page->getArgument('callback'),
            $this->getArgument('icon'),
            $this->getArgument('order')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function isSubMenu(){ return false; }
}