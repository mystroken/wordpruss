<?php

namespace Wordpruss\Hook;

/**
 * Class Filter
 * @package Wordpruss\Hook
 * @author Emmanuel KWENE <njume48@gmail.com>
 */
class Filter implements HookInterface
{
    /**
     * Apply a filter
     *
     * @param $hook_name
     * @param $default_value
     * @param array ...$variables
     * @return \WordPruss\Hook\HookInterface $this
     */
    public function apply($hook_name, $default_value, ...$variables)
    {
        apply_filters($hook_name, $default_value, ...$variables);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function add($hook_name, $callable, $priority = 10, $accepted_args = 1)
    {
        add_filter($hook_name, $callable, $priority, $accepted_args);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($hook_name, $callable, $priority = 10)
    {
        remove_filter($hook_name, $callable, $priority);
        return $this;
    }
}