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

	public function __construct($options = []) {

		foreach (['title', 'slug', 'order', 'icon'] as $key) {
			if( isset($options[$key]) ) {
				$setter = 'set' . ucfirst( strtolower($key) );
				$this->$setter($options[$key]);
			}
		}

		if( empty($this->title) ) {
			throw new \InvalidArgumentException("The required 'title' option is missing");
		}

		if( empty($this->slug) ) {
			throw new \InvalidArgumentException("The required 'slug' option is missing");
		}

	}

	public function isSubMenu() { return false; }
}