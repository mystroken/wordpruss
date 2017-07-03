<?php

namespace WordPruss\Admin\Page;

use WordPruss\Hook\HookInterface;
use WordPruss\Support\HasArgumentsTrait;

/**
 * Class AbstractDashboardMenu
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v1.0
 * @see https://codex.wordpress.org/Administration_Menus
 */
abstract class AbstractMenu implements HookInterface
{
	use HasArgumentsTrait;

	/**
	 * Panel of the menu.
	 *
	 * @var Page
	 */
	protected $page = null;


    /**
     * Hooks all registered actions.
     *
     * @codeCoverageIgnore
     */
    public function hook() {
        // Makes sure required arguments are present and not empty.
        $this->checkRequiredArguments();
        $this->getPage()->checkRequiredArguments();

        add_action('admin_menu', [$this, 'addMenuPage']);

        // TODO: Allows Admin Panel to be hooked in neither to 'admin_menu', 'user_admin_menu' or 'network_admin_menu'
    }

	/**
	 * Gets the panel of the menu.
	 *
	 * @return Page
	 */
	public function getPage() {
		return $this->page;
	}


	/**
	 * Sets the panel of the menu.
	 *
	 * @param Page $page
	 *
	 * @return self
	 */
	public function setPage( $page ) {
		$this->page = $page;
		return $this;
	}

    /**
     * Adds menu to the WP menu list.
     *
     * @return self
     */
    public abstract function addMenuPage();

	/**
	 * Checks if the instance is a menu or a submenu.
	 *
	 * @return boolean
	 */
	public abstract function isSubMenu();

}