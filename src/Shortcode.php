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
    protected $content;

    /**
     * @var string
     */
    protected $tagName;

    /**
     * @var array
     */
    protected $attributes;


    /**
     * Shortcode constructor.
     *
     * @param string $tagName
     */
    public function __construct( $tagName = '' ){
        if( is_string($tagName) ){
            $this->tagName = $tagName;
        }
    }


    /**
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent( $content ) {
        $this->content = $content;
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
     * @return array
     */
    public function getAttributes() {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes( $attributes ) {
        $this->attributes = $attributes;
    }


    protected function addShorcode($attributes, $content = ''){}


    /**
     * Hooks all registered actions.
     * @codeCoverageIgnore
     */
    public function hook(){

        if ( empty($this->tagName) ){
            throw new \InvalidArgumentException("You have to set a valid tagName first!");
        }else{
            add_shortcode( $this->getTagName() , [$this, 'addShortcode'] );
        }
    }
}