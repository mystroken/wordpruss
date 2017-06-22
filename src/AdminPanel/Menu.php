<?php

namespace WordPruss\AdminPanel;
use WordPruss\Hook\HookFactory;

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


	public function __construct( $arguments ){
		parent::__construct( $arguments );
	}

	/**
	 * {@inheritdoc}
	 */
	public function attach(){

		// Makes sure required arguments are present and not empty.
		$this->checkRequiredArguments();


		$hook = new HookFactory();
		$hook->action->add('admin_menu', function() {

            add_menu_page(
                $this->panel->getArgument('title'),
                $this->getArgument('title'),
                $this->panel->getArgument('role'),
                $this->getArgument('slug'),
                $this->panel->getArgument('callback'),
                $this->getArgument('icon'),
                $this->getArgument('order')
            );

        });
	}

	/**
	 * {@inheritdoc}
	 */
	public function isSubMenu(){
		return false;
	}
}