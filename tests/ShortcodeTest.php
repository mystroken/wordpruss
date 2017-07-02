<?php

namespace WordPruss\Tests;


use PHPUnit\Framework\TestCase;
use WordPruss\Shortcode;


/**
 * Class ShortcodeTest
 *
 * @package WordPruss\Tests
 * @author Mystro Ken <mystroken@gmail.com>
 */
class ShortcodeTest extends TestCase {

    /** @var Shortcode  */
    protected $shortcode;
    protected $tagName = 'test';


    public function setUp(){
        $this->shortcode = new Shortcode($this->tagName);
    }

    public function testGettersAndSetters(){
        $testTagName = 'tag';
        $testAttributes = ['attribute 1' => 'value'];

        $this->shortcode->setTagName($testTagName);
        $this->shortcode->setAttributes($testAttributes);
        $this->assertEquals($testTagName, $this->shortcode->getTagName());
        $this->assertEquals($testAttributes, $this->shortcode->getAttributes());
    }

    public function testHandler(){

    }
}