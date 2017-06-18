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
		'order' => 'Default Order',
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
	}

	/**
	 * {@inheritdoc}
	 */
	public function isSubMenu(){
		return false;
	}
}