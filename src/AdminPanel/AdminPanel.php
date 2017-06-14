<?php

namespace WordPruss\AdminPanel;

/**
 * Class AdminPanel
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v0.2
 */
class AdminPanel
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
	 * @var AbstractDashboardMenu
	 */
	protected $dashboardMenu;

    public function __construct() {



    }

    public function boot() {
    	if( $this->dashboardMenu == null ) {
    		throw new \InvalidArgumentException("You've forgotten to link a Dashboard Menu to a panel.");
	    }

	    $menuIcon = $this->dashboardMenu->getIcon();
	    $menuIcon = isset( $menuIcon ) ? $menuIcon : '';

	    $menuOrder = $this->dashboardMenu->getOrder();
	    $menuOrder = isset( $menuOrder ) ? $menuOrder : null;

	    if( $this->dashboardMenu->isSubMenu() === false )
	    {
		    add_menu_page(
			    $this->title,
			    $this->dashboardMenu->getTitle(),
			    $this->role,
			    $this->dashboardMenu->getSlug(),
			    isset( $this->callback ) ? $this->callback : '',
			    $menuIcon,
			    $menuOrder
		    );
	    }
	    else
	    {
		    add_submenu_page(
			    $this->dashboardMenu->getParentSlug(),
			    $this->title,
			    $this->dashboardMenu->getTitle(),
			    $this->role,
			    $this->dashboardMenu->getSlug(),
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
	 * @return AbstractDashboardMenu
	 */
	public function getDashboardMenu() {
		return $this->dashboardMenu;
	}

	/**
	 * @param AbstractDashboardMenu $dashboardMenu
	 */
	public function setDashboardMenu( $dashboardMenu ) {
		$this->dashboardMenu = $dashboardMenu;

		// Set the panel of the menu by the same way
		if( !$this->isEqual($this->dashboardMenu->getPanel()) ) $this->dashboardMenu->setPanel($this);
	}

	/**
	 * @param AdminPanel $panel
	 * @return boolean
	 */
	public function isEqual( $panel ) {
		return ( ($this->title === $panel->getTitle()) && ($this->callback === $panel->getCallback()) );
	}

}