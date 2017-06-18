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
		'title' => 'Default Title',
		'slug'  => 'Default Slug',
		'order' => 'Default Order',
	];

	public function __construct( $options ){
		parent::__construct( $options );
	}

	/**
	 * {@inheritdoc}
	 */
	public function isSubMenu(){
		return true;
	}
}