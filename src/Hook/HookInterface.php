<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel K
 * Date: 05/06/2017
 * Time: 05:13
 */

namespace WordPruss\Hook;


interface HookInterface
{

    /**
     * Add a hook
     *
     * @param $hook_name
     * @param $callable
     * @param int $priority
     * @param int $accepted_args
     * @return \WordPruss\Hook\HookInterface $this
     */
    public function add($hook_name, $callable, $priority = 10, $accepted_args = 1);


    /**
     * Remove a hook
     *
     * @param $hook_name
     * @param $callable
     * @param int $priority
     * @return \WordPruss\Hook\HookInterface $this
     */
    public function remove($hook_name, $callable, $priority = 10);
}