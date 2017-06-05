<?php

namespace WordPruss\Hook;

/**
 * Class HookFactory
 * @package WordPruss\Hook
 * @author Emmanuel KWENE <njume48@gmail.com>
 */
if( !class_exists('WordPruss\Hook\HookFactory') )
{
    class HookFactory
    {
        public $action;
        public $filter;

        public function __construct()
        {
            $this->action = new Action();
            $this->filter = new Filter();
        }
    }
}