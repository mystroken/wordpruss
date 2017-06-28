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


    public function setUp(){
        $this->shortcode = new Shortcode();
    }

    public function testGettersAndSetters(){
        $testContent = 'content';
        $testTagName = 'tag';
        $testAttributes = [
            [ 'attribute' => 'value' ]
        ];

        $this->shortcode->setContent($testContent);
        $this->shortcode->setTagName($testTagName);
        $this->shortcode->setAttributes($testAttributes);

        $this->assertEquals($testContent, $this->shortcode->getContent());
        $this->assertEquals($testTagName, $this->shortcode->getTagName());
        $this->assertEquals($testAttributes, $this->shortcode->getAttributes());

    }
}