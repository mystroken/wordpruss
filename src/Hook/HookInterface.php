<?php

namespace WordPruss\Hook;

/**
 * Interface HookInterface
 *
 * @package WordPruss\Hook
 * @author Mystro Ken <mystroken@gmail.com>
 */
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