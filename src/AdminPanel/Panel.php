<?php

namespace WordPruss\AdminPanel;

/**
 * Class AdminPanel
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v0.2
 */
class Panel
{
	/**
	 * the title of the panel page
	 * @var string
	 */
    protected $title;

	/**
	 * the minimal role to access to the panel page
	 * @var string
	 */
	protected $role;

	/**
	 * the callable function that will display the view of panel
	 * @var callable
	 */
	protected $callback;

	/**
	 * the dashboard menu of the panel
	 * @var AbstractMenu
	 */
	protected $menu;

    public function __construct() {



    }

    public function boot() {
    	if( $this->menu == null ) {
    		throw new \InvalidArgumentException("You've forgotten to link a Dashboard Menu to a panel.");
	    }

	    $menuIcon = $this->menu->getIcon();
	    $menuIcon = isset( $menuIcon ) ? $menuIcon : '';

	    $menuOrder = $this->menu->getOrder();
	    $menuOrder = isset( $menuOrder ) ? $menuOrder : null;

	    if( $this->menu->isSubMenu() === false )
	    {
		    add_menu_page(
			    $this->title,
			    $this->menu->getTitle(),
			    $this->role,
			    $this->menu->getSlug(),
			    isset( $this->callback ) ? $this->callback : '',
			    $menuIcon,
			    $menuOrder
		    );
	    }
	    else
	    {
		    add_submenu_page(
			    $this->menu->getParentSlug(),
			    $this->title,
			    $this->menu->getTitle(),
			    $this->role,
			    $this->menu->getSlug(),
			    isset( $this->callback ) ? $this->callback : ''
		    );

	    }
    }

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
	public function getRole() {
		return $this->role;
	}

	/**
	 * @param string $role
	 */
	public function setRole( $role ) {
		$this->role = $role;
	}

	/**
	 * @return callable
	 */
	public function getCallback() {
		return $this->callback;
	}

	/**
	 * @param callable $callback
	 */
	public function setCallback( $callback ) {
		$this->callback = $callback;
	}

	/**
	 * @return AbstractMenu
	 */
	public function getMenu() {
		return $this->menu;
	}

	/**
	 * @param AbstractMenu $menu
	 */
	public function setMenu( $menu ) {
		$this->menu = $menu;

		// Set the panel of the menu by the same way
		if( !$this->isEqual($this->menu->getPanel()) ) $this->menu->setPanel($this);
	}

	/**
	 * @param Panel $panel
	 *
	 * @return boolean
	 */
	public function isEqual( $panel ) {
		return ( ($this->title === $panel->getTitle()) && ($this->callback === $panel->getCallback()) );
	}

}