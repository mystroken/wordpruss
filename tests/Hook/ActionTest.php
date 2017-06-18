<?php
/**
 * Created by PhpStorm.
 * User: Mystro Ken
 * Date: 16/06/2017
 * Time: 21:37
 */

namespace WordPruss\Tests\Hook;

use PHPUnit\Framework\TestCase;
use WordPruss\Hook\Action;

/**
 * Class ActionTest
 *
 * @Covers Action
 * @package WordPruss\Tests\Hook
 */
class ActionTest extends TestCase {


	public function testCanInstantiateAnElement() {
		$this->assertInstanceOf(
			Action::class,
			new Action()
		);
	}

}
