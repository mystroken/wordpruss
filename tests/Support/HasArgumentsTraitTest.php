<?php

namespace WordPruss\Tests\Support;


use PHPUnit\Framework\TestCase;
use WordPruss\Support\HasArgumentsTrait;

/**
 * Class HasArgumentsTraitTest
 *
 * @package WordPruss\Tests\Support
 * @author Mystro Ken <mystroken@gmail.com>
 */
class HasArgumentsTraitTest extends TestCase {

    /**
     * @var FakeArgumentsUsing
     */
    protected $hasArgumentTrait;

    public function setUp(){
        $this->hasArgumentTrait = new FakeArgumentsUsing();
    }


    /**
     * Tests the getting of arguments types.
     */
    public function testGetAllArguments(){
        $this->assertEquals([], $this->hasArgumentTrait->getDefaults());
        $this->assertEquals([], $this->hasArgumentTrait->getRequired());
        $this->assertEquals([], $this->hasArgumentTrait->getArguments());
    }


    /**
     * Tests the setting of arguments types.
     *
     * @return FakeArgumentsUsing
     */
    public function testSetGloballyArguments(){
        $test = ['key' => 'value'];
        $required = ['key'];

        $this->hasArgumentTrait->setDefaults($test);
        $this->hasArgumentTrait->setRequired($required);
        $this->hasArgumentTrait->setArguments($test);

        $this->assertEquals($test, $this->hasArgumentTrait->getDefaults());
        $this->assertEquals($required, $this->hasArgumentTrait->getRequired());
        $this->assertEquals($test, $this->hasArgumentTrait->getArguments());

        return $this->hasArgumentTrait;
    }


    /**
     * Tests the getting of an individual key from an argument type.
     *
     * @depends testSetGloballyArguments
     * @param FakeArgumentsUsing $hasArgumentTrait
     */
    public function testGetIndividualArgument(FakeArgumentsUsing $hasArgumentTrait){
        $this->assertEquals('value', $hasArgumentTrait->getDefault('key'));
        $this->assertEquals('value', $hasArgumentTrait->getArgument('key'));
    }


    /**
     * Tests can individually add a new argument.
     */
    public function testSetIndividualArgument(){
        $this->hasArgumentTrait->setDefault('default', 'value');
        $this->hasArgumentTrait->setArgument('argument', 'value');

        $this->assertArrayHasKey('default', $this->hasArgumentTrait->getDefaults());
        $this->assertArrayHasKey('argument', $this->hasArgumentTrait->getArguments());
    }

    /**
     * Tests that an exception is thrown when
     * a required argument is not present.
     */
    public function testCheckRequiredArguments(){

        $this->expectException(\InvalidArgumentException::class);

        // A given set of arguments.
        $arguments = [];
        $defaults = [
            'title' => '',
            'slug'  => '',
            'order' => null
        ];


        $this
            ->hasArgumentTrait
                // Sets the defaults value of arguments.
                ->setDefaults($defaults)
                // Sets required arguments.
                ->setRequired(['slug'])
                // Sets finally arguments.
                ->setArguments( array_merge($defaults, $arguments) )

                // Checks if requirement are set.
                ->checkRequiredArguments();
        ;
    }
}