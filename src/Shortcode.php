<?php

namespace WordPruss;


use WordPruss\Hook\HookInterface;

/**
 * Class Shortcode
 *
 * Creates easily a WP shortcode
 *
 * @package WordPruss
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v1.0
 */
class Shortcode implements HookInterface
{

    /**
     * @var string
     */
    protected $tagName;

    /**
     * @var callable
     */
    protected $callable;


    /**
     * Shortcode constructor.
     *
     * @param string $tagName
     */
    public function __construct( $tagName ){
        if( is_string($tagName) ){
            $this->tagName = $tagName;
        }
    }

    /**
     * @return string
     */
    public function getTagName() {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     */
    public function setTagName( $tagName ) {
        $this->tagName = $tagName;
    }

    /**
     * handle
     *
     * @param $callable callable
     * @return self
     */
    public function handle($callable){
        $this->callable = $callable;
        return $this;
    }


    /**
     * Hooks all registered actions.
     * @codeCoverageIgnore
     */
    public function hook(){

        if ( empty($this->callable) ){
            throw new \InvalidArgumentException("You have to set a handler to the shortcode first!");
        }else{
            add_shortcode($this->getTagName(), $this->callable);
        }
    }

}