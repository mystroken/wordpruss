<?php

namespace WordPruss\AdminPanel;

/**
 * Class DashboardMenu
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v0.2
 */
class Menu extends AbstractMenu
{

	/**
	 * {@inheritdoc}
	 */
	protected $defaults = [
		'title' => '',
		'slug'  => '',
		'order' => null,
        'icon' => 'none'
	];

	/**
	 * {@inheritdoc}
	 */
	protected $required = [
		'title', 'slug'
	];


	public function __construct( $options ){
		parent::__construct( $options );
	}

	/**
	 * {@inheritdoc}
	 */
	public function attach(){

		// Makes sure required arguments are present and not empty.
		$this->checkRequiredArguments();

		add_menu_page(
		    $this->panel->getArgument('title'),
		    $this->getArgument('title'),
            $this->panel->getArgument('role'),
            $this->getArgument('slug'),
            $this->panel->getArgument('callback'),
            $this->getArgument('icon'),
            $this->getArgument('order')
        );
	}

	/**
	 * {@inheritdoc}
	 */
	public function isSubMenu(){
		return false;
	}
}