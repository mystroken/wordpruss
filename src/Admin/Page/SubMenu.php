<?php

namespace WordPruss\Admin\Page;

/**
 * Class DashboardSubMenu
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v1.0
 * @see https://codex.wordpress.org/Administration_Menus
 */
class SubMenu extends AbstractMenu
{

    /**
     * SubMenu constructor.
     *
     * Constructs an new admin submenu.
     *
     * @param array $arguments
     */
    public function __construct( $arguments ){

        // Sets the defaults value of arguments.
        $this->defaults = [
            'title'       => '',
            'slug'        => '',
            'parent_slug' => ''
        ];

        // Sets the required values of arguments.
        $this->required = ['title', 'slug', 'parent_slug'];

        // Sets finally arguments.
        $this->setArguments( array_merge($this->defaults, $arguments) );
    }

    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function addMenuPage() {
        add_submenu_page(
            $this->getArgument('parent_slug'),
            $this->page->getArgument('title'),
            $this->getArgument('title'),
            $this->page->getArgument('role'),
            $this->getArgument('slug'),
            $this->page->getArgument('callback')
        );
    }

	public function isSubMenu() { return true; }
}