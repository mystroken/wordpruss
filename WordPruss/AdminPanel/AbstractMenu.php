<?php

namespace WordPruss\AdminPanel;

use WordPruss\Util\HasArguments;

/**
 * Class AbstractDashboardMenu
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v0.2
 */
abstract class AbstractMenu {
	use HasArguments;

	/**
	 * Panel of the menu.
	 *
	 * @var Panel
	 */
	protected $panel = null;


	/**
	 * AbstractMenu constructor.
	 *
	 * @param $options array
	 */
	public function __construct( $options ){

		// Sets menu arguments.
		$this->setArguments( array_merge($this->defaults, $options) );

	}


	/**
	 * Gets the panel of the menu.
	 *
	 * @return Panel
	 */
	public function getPanel() {
		return $this->panel;
	}


	/**
	 * Sets the panel of the menu.
	 *
	 * @param Panel $panel
	 * @return self
	 */
	public function setPanel( $panel ) {
		$this->panel = $panel;
		return $this;
	}

	/**
	 * Checks if the instance is a menu or a submenu.
	 *
	 * @return boolean
	 */
	public abstract function isSubMenu();

	/**
	 * Attaches menu to the WordPress menus list.
	 *
	 * @return self
	 */
	public abstract function attach();
}