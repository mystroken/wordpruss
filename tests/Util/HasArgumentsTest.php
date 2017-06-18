<?php

/**
 * Created by PhpStorm.
 * User: Mystro Ken
 * Date: 18/06/2017
 * Time: 16:10
 */

namespace Wordpruss\Tests\Util;

use PHPUnit\Framework\TestCase;
use WordPruss\Util\HasArguments;

class HasArgumentsFakeClass
{
	use HasArguments;
}

class HasArgumentsTest extends TestCase {

	protected $fakeClass;

	public function setUp(){
		$this->fakeClass = new HasArgumentsFakeClass();
	}
	public function testCannotWorkWithoutDefaultVar(){
		$this->fakeClass->getDefaults();
	}
}