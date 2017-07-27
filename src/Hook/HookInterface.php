<?php

namespace WordPruss\Hook;

/**
 * Interface HookInterface
 *
 * @codeCoverageIgnore
 *
 * @package WordPruss
 * @subpackage WordPruss\Hook
 * @author Mystro Ken <mystroken@gmail.com>
 * @since v1.0
 */
interface HookInterface
{
    /**
     * Hooks all registered actions.
     */
    public function hook();
}