<?php
/**
 * Created by PhpStorm.
 * User: Mystro Ken
 * Date: 18/06/2017
 * Time: 21:15
 */

namespace WordPruss\Tests\AdminPanel;


use PHPUnit\Framework\TestCase;

class AbstractMenuTest extends TestCase
{

	/**
	 * The menu instance to test.
	 * @var Menu
	 */
	protected $menu;

	public function setUp() {
		$this->menu = new Menu([]);
	}

	public function testCanKeepDefaultsValues(){
		$this->assertArrayHasKey('title', $this->menu->getArguments());
	}

	public function testCanGetADefaultArgument(){
		$this->assertEquals('Default Title', $this->menu->getDefault('title'));
	}

	public function testCanSetAnDefaultArgument(){
		$this->menu->setDefault('icon', '');
		$this->assertArrayHasKey('icon', $this->menu->getDefaults());
	}

	public function testCanGetANotDefinedArgument(){
		$this->assertEquals('', $this->menu->getArgument('not_defined'));
	}

	public function testCanGetAnArgument(){
		$this->assertEquals('Default Title', $this->menu->getArgument('title'));
	}

	public function testCanSetAnArgument(){
		$this->menu->setArgument('title', 'New Title');
		$this->assertEquals('New Title', $this->menu->getArgument('title'));
	}
}