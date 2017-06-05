<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel K
 * Date: 05/06/2017
 * Time: 05:13
 */

namespace WordPruss\Hook;


abstract class Hook
{

    /**
     * Add a hook
     *
     * @param $hook_name
     * @param $callable
     * @param int $priority
     * @param int $accepted_args
     */
    public function add($hook_name, $callable, $priority = 10, $accepted_args = 1)
    {
    }


    /**
     * Remove a hook
     *
     * @param $hook_name
     * @param $callable
     * @param int $priority
     */
    public function remove($hook_name, $callable, $priority = 10)
    {}
}