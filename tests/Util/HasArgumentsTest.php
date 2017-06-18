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

	/**
	 * Defaults arguments
	 * @var array
	 */
	protected $defaults = [];
}

class HasArgumentsTest extends TestCase {


	public function testCannotWorkWithoutDefaultVar(){
		$hasArgumentClass = new HasArgumentsFakeClass();
		$hasArgumentClass->getDefaults();
	}
}