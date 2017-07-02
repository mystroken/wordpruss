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
     * @var array
     */
    protected $attributes;

    /**
     * @var callable
     */
    protected $handler;


    /**
     * Shortcode constructor.
     *
     * @param string $tagName
     * @param array $attributes
     */
    public function __construct( $tagName, $attributes = [] ){
        $this->tagName = $tagName;
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getTagName() {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     * @return self
     */
    public function setTagName( $tagName ) {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes() {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return self
     */
    public function setAttributes( $attributes ) {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * Set a output handler to the shortcode.
     *
     * @codeCoverageIgnore
     *
     * @param callable $handler
     * @return self
     */
    public function handle($handler){
        $this->handler = $handler;
        return $this;
    }


    /**
     * Sets the output of the shortcode.
     * @codeCoverageIgnore
     *
     * @param $attributes
     * @param string|null $content
     *
     * @return mixed|null
     */
    public function handler($attributes, $content = null){

        // The output of the shortcode
        $output = $content;

        // We merge the values of passed attributes with the defaults
        $attributes = shortcode_atts($this->attributes, $attributes);

        // We call the shortcode output handler if it has been set
        if( is_callable($this->handler) ){
            $output = call_user_func($this->handler, $attributes, $content);
        }

        return $output;
    }


    /**
     * Hooks all registered actions.
     * @codeCoverageIgnore
     */
    public function hook(){

        if ( !empty($this->getTagName()) ){
            add_shortcode($this->getTagName(), [$this, 'handler']);
        }
        else {
            throw new \InvalidArgumentException("You have to set a non empty tag name!");
        }
    }

}