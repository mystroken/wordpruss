<?php

namespace WordPruss\AdminPanel;

/**
 * Class AbstractDashboardMenu
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v0.2
 */
abstract class AbstractDashboardMenu {
	/**
	 * the title of menu
	 * @var string
	 */
	protected $title;

	/**
	 * an unique name for the panel
	 * @var string
	 */
	protected $slug;

	/**
	 * @var string
	 */
	protected $parentSlug;

	/**
	 * the order of menu
	 * @var float
	 */
	protected $order;

	/**
	 * the icon of menu
	 * @var string
	 */
	protected $icon;

	/**
	 * @var AdminPanel
	 */
	protected $panel;


	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle( $title ) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * @param string $slug
	 */
	public function setSlug( $slug ) {
		$this->slug = $slug;
	}


	/**
	 * @return string
	 */
	public function getParentSlug() {
		return $this->parentSlug;
	}

	/**
	 * @param string $parentSlug
	 */
	public function setParentSlug( $parentSlug ) {
		$this->parentSlug = $parentSlug;
	}

	/**
	 * @return float
	 */
	public function getOrder() {
		return $this->order;
	}

	/**
	 * @param float $order
	 */
	public function setOrder( $order ) {
		$this->order = $order;
	}

	/**
	 * @return string
	 */
	public function getIcon() {
		return $this->icon;
	}

	/**
	 * @param string $icon
	 */
	public function setIcon( $icon ) {
		$this->icon = $icon;
	}

	/**
	 * @return AdminPanel
	 */
	public function getPanel() {
		return $this->panel;
	}

	/**
	 * @param AdminPanel $panel
	 */
	public function setPanel( $panel ) {
		$this->panel = $panel;

		// Set the panel of the menu by the same way
		if( !$this->isEqual($this->panel->getDashboardMenu()) ) $this->panel->setDashboardMenu($this);
	}

	/**
	 * @param AbstractDashboardMenu $menu
	 * @return boolean
	 */
	public function isEqual( $menu ) {
		return ( ($this->isSubMenu() === $menu->isSubMenu()) && ($this->slug === $menu->getSlug()) && ($this->parentSlug === $menu->getParentSlug()) );
	}


	public abstract function isSubMenu();
}