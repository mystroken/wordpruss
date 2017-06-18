<?php
/**
 * Created by PhpStorm.
 * User: Mystro Ken
 * Date: 18/06/2017
 * Time: 21:17
 */

namespace WordPruss\Tests\AdminPanel;


use WordPruss\AdminPanel\AbstractMenu;

class Menu extends AbstractMenu
{

	/**
	 * {@inheritdoc}
	 */
	protected $defaults = [
		'title' => '',
		'slug'  => '',
		'order' => 'Default Order',
		'test' => 'test',
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