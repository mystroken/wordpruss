<?php

namespace WordPruss\Hook;

/**
 * Class Action
 * @package WordPruss\Hook
 * @author Emmanuel KWENE <njume48@gmail.com>
 */
if ( !class_exists('WordPruss\Hook\Action') )
{
    class Action implements HookInterface
    {

        /**
         * Execute an attached action
         *
         * @param $hook_name
         * @param array ...$arguments
         * @return \WordPruss\Hook\HookInterface $this
         */
        public function execute($hook_name, ...$arguments)
        {
            do_action($hook_name, ...$arguments);
            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function add($hook_name, $callable, $priority = 10, $accepted_args = 1)
        {
            add_action($hook_name, $callable, $priority, $accepted_args);
            return $this;
        }

        /**
         * {@inheritdoc}
         */
        public function remove($hook_name, $callable, $priority = 10)
        {
            remove_action($hook_name, $callable, $priority);
            return $this;
        }
    }
}