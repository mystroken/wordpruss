<?php

namespace WordPruss\Tests\Admin\Page;


use PHPUnit\Framework\TestCase;
use WordPruss\Admin\Page\Menu;
use WordPruss\Admin\Page\Page;
use WordPruss\Admin\Page\SubMenu;


/**
 * Class AbstractMenuTest
 *
 * @package WordPruss\Tests\Admin\Page
 */
class AdminMenuPageTest extends TestCase
{

	/** @var Menu */
	protected $menu;

    /** @var SubMenu */
	protected $submenu;

	/** @var  Page */
	protected $page;



	public function setUp() {
        $this->page = new Page([]);
        $this->menu = new Menu([]);
        $this->submenu = new SubMenu([]);
	}

	public function testPageGettingAndSetting(){
	    $this->menu->setPage($this->page);
	    $this->assertEquals($this->page, $this->menu->getPage());
    }

	public function testCanDistinctMenuAndSubmenu(){
	    $this->assertTrue( $this->menu->isSubMenu() === false );
	    $this->assertTrue( $this->submenu->isSubMenu() === true );
    }

}